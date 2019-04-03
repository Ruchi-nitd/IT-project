<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<style>
ul   {list-style-type: none; margin:0; padding:0;background-color:transparent; border:none; overflow:hidden; text-align:center;}
li a {display:block; width:200px; height:60px;color:white; font-size:20px; text-align:center; padding: 14px 16px;}
li   {text-align:center; float:left; background-color:transparent;} 
li a:hover {background-color:white; color:black;}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us| NITD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="home">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><?php
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
                    ?></li>
	
	<li><a href="faq.php">FAQ</a></li>
	</ul>
    <div class="container">

        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <h1 class="tm-site-title">Contact Us</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tm-home-left mt-3 font-weight-light">
                        <h3><p class="tm-mb-35">If you want to discuss anything feel free to contact us<br>We will be happy to provide you with all the information you need </p></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <ul class="list-group tm-home-list tm-bg-black font-weight-light">
                    <li class="d-flex justify-content-between align-items-center">
                        <div class="tm-white-text">Email: StudentInformationSystem@gmail.com</div>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                         <div class="tm-white-text">Call: 9893506067</div>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>
    <br>
    <br><br><br>
    
</body>

</html>
