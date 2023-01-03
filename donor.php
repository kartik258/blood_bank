<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Section</title>
    <link rel="stylesheet" href="donor.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div id="navbar">

        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="donateblood.php">Donate Blood</a></li>
            <!-- <li class="item"><a href="#bloodbank-section">Blood Bank Login</a></li> -->
            <li class="item"><a href="contact.html">Contact Us</a></li>
        </ul>
            <div id="logo">
                <img src="logodonor.jpeg" alt="BloodDonation.com">
            </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>

            
    </div>

    <section id="home">
        <!-- <img src="img/pexels-puwadon-sangngern-5340267.jpg" alt=""> -->

        <table class="content-table">
            <thead>
                <tr>
                    <th>Blood Bank Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Time Slot</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A+</td>
                    <td>A+ AB+</td>
                    <td>A+ AB+</td>
                    <td>A+ AB+</td>
                    <td>A+ AB+</td>
                    <td>A+ A- O+ O-</td>
                </tr>
                <tr>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+ A+ B+ AB+</td>
                    <td>O+ O-</td>
                </tr>
                <tr>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+ A+ B+ AB+</td>
                    <td>O+ O-</td>
                </tr>
                <tr>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+</td>
                    <td>O+ A+ B+ AB+</td>
                    <td>O+ O-</td>
                </tr>
            </tbody>

    </section>

    
</body>

</html>