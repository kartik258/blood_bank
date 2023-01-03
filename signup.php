<?php

$msg="";
$msg1="";
$success=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $name=$_POST['name'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $username=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $check=mysqli_num_rows(mysqli_query($con,"select * from donordts where username='$username'"));
if($check>0){
  $msg="Email already exists";
}
else{

if($password==$cpassword){

    $hash=password_hash($password,PASSWORD_DEFAULT);

$sql="INSERT INTO `donor_reg` ( `name`, `age`, `weight`, `username`,`phone`,`password`, `date_signup`) VALUES ('$name', '$age', '$weight', '$username','$phone','$hash', current_timestamp());";

$result=mysqli_query($con,$sql);

if($result){
    $success=1;
    session_start();
    $_SESSION['username']=$username;
    header('location:donor.php'); 
 }else{
    //  echo("Invalid Password or Username");
     header('location:signup.php');
 }




}
else
{
    $msg1="Password does not match";
}
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <?php
           if($success){
            $sql="INSERT INTO `donordts` (`username`,`password`) values ('$username',$password)";
           }
    ?>
<div class="container">
    <div class="headline">
        <h1>Sign Up</h1>
        <div class="message">
        <?php
        echo $msg;
        ?>
        </div>
        <div class="message1">
        <?php
        echo $msg1;
        ?>
        </div>
 </div class=signup>
    <form  method="post">
        <div class="form-group first_box">
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
    <input type="text" name="age" id="age" placeholder="Enter your age" required>
    <input type="text" name="weight" id="weight" placeholder="Enter your weight" required>
    <input type="email" name="email" id="email" placeholder="Enter your email" required>
    <input type="tel" name="phone" size="10" id="phone" placeholder="Enter mobile number" required>
    <input type="password" name="password" id="password" minlength="8" placeholder="Create password" required>
    <input type="password" name="cpassword" minlength="8" id="cpassword" placeholder="Confirm password" required>
    <button type="submit" name="submit" class="btn">Create</button>
    </div>

    </form>
    
    <p>Already Have An Account?</p>
    <a href="login.php">Sign In</a>
   
    
    <div class="bottom">
        <h1>DONATE BLOOD</h1>
        <img src="donation.png" alt="Donate Blood">
    </div>

    </div>
</div>


<!-- <script src="index.js"></script> -->
</body>
</html>