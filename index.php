<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome, HOME | NITD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="home">
    <div class="container">

        <div class="row" >
            <div class="col-sm-2">
                <img style="margin:20px;" src="https://i1.wp.com/www.noticebard.com/wp-content/uploads/2017/03/logo.png" width="150px" height="150px">
            </div>
            <div class="col-sm-10" style="margin-top:35px;" >
                <span style="font-size:40px;" >National Institute of Technology, Durgapur</span>
                <p style="font-size:30px;" >राष्ट्रीय प्रौद्योगिकी संस्थान दुर्गापुर</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <h1 class="tm-site-title">Welcome</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tm-home-left mt-3 font-weight-light">
                        <p class="tm-mb-35">This website is developed under IT Department (Prof. D Das).<h6>Developed by - </h6>Ruchi Singh<br>Ashish Agarwal<br>Gaurav Bordoloi</p>
                        <h5>Thank you!</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <ul class="list-group tm-home-list tm-bg-black font-weight-light">
                    <li class="d-flex justify-content-between align-items-center">
                    <?php
                    if(isset($_SESSION['login']))
                    {
                     ?>
                      <a href="logout.php" class="tm-white-text">Logout</a>
                     <?php
                    }
                    else
                    {
                      ?>
                        <a href="login.php" class="tm-white-text">Login</a>
                        <?php
                    }
                    ?>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                     <?php
                    if(isset($_SESSION['login']))
                    {
                      if($_SESSION['username']== 'admin@gmail.com')
                      {
                       ?>
                      <a href="ad.php" class="tm-white-text">My Profile</a>
                     <?php
                     }
                     else
                     {
                     ?>
                      <a href="profile.php" class="tm-white-text">My Profile</a>
                     <?php
                     
                     }
                    }
                    else
                    {
                      ?>
                         <a href="register.html" class="tm-white-text">Register</a>
                        <?php
                    }
                    ?>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="contact.html" class="tm-white-text">Contact Us</a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="about.html" class="tm-white-text">About Us</a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                            <a href="faq.html" class="tm-white-text">FAQ</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
