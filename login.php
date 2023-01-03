<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="Select * from `donor_reg` where username='$username' and password='$password'";

    $result=mysqli_query($con,$sql);
    if($result){
        // $hash=password_hash($password,PASSWORD_DEFAULT);
        $num=mysqli_num_rows($result);
        if($num>0){
           session_start();
           $_SESSION['username']=$username;
           header('location:donor.php'); 
        }else{
            echo("Invalid Password or Username");
            header('location:login.php');
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
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <form action="login.php" class="form" method="post">
            <h2>SIGN IN</h2>
            <input type="text" name="username" class="box" placeholder="Enter Username">
            <input type="password" name="password" class="box" placeholder="Enter password">
            <input type="submit" value="SIGN IN" id="submit">
            <a href="forget_password.php">Forgot password</a>
            <a href="signup.php">REGISTER</a>
        </form>
        <div class="side">
            <img src="images.png">
        </div>
    </div>
</body>
</html>