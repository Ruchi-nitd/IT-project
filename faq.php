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

<body>
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
	<li><a href="about.html">About Us</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	</ul>
    
     
     <center><h1 style="color:orange">FAQ</h1></center><b
     <div style="color:aqua">
     <h3>1. What should I do if I forgot my password?<br>
     <span style="color:white">Ans. Go to the forgot Password Page. Enter the Required Details and reset your password.</span></h3> 
     
     <br>
     <h3>2. Why my Request has been rejected by admin?<br>
      <span style="color:white">Ans. The Details you entered may not be correct or you might already have an existing account. For Further details visit the Contact Us Page</h3> </span><br>
     <h3>3. How can I edit the details I have already entered?<br>
      <span style="color:white">Ans. After logging into the system, you can select the edit details page on the top right corner of your profile.<br>There you can make the required changes.</span></h3> 
     
     <br>
     <h3>4. How long will it take for my account to be activated?<br>
      <span style="color:white">Ans. It Will take a couple of days(At max) for activating your account. If the delay persists, Contact the concerned authority</span></h3> 
     <br>
     
     <h3>5. Why my account has been deleted?<br>
      <span style="color:white">Ans. Account is deleted by the admin if the details you entered are either not correct or somebody have reported your account to be a fake account.</span> </h3> 
     <br>
     <br>
     <h3>6. Can I Save the details I have entered?<br>
      <span style="color:white">Ans. Yes, you can save as well as print the details you have already entered using the print button at the bottom of your profile page.</span></h3> 
     <br>
     
     </div>
    
</body>

</html>
