<?php
$msg="";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Student";
	// Create connection
	$conn = new mysqli($servername, $username,$password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}

	else
	{
		 $msg ="User Not Found";
	}
	
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($conn, $_POST['email']);
	$reg= mysqli_real_escape_string($conn, $_POST['reg']);
	$roll= mysqli_real_escape_string($conn, $_POST['roll']);
	$password= mysqli_real_escape_string($conn, $_POST['password']);
	
	$sql = "SELECT * FROM Info WHERE Email = '{$username}' AND Registration_Number='{$reg}' AND Roll_Number='{$roll}'";
	$res = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1)
	{
	    $sql = "UPDATE Info SET Password='$password' WHERE Email='{$username}'";
		if ($conn->query($sql) === TRUE) {
		header("location: login.php");
		} 
else {
echo "Error updating record: " . $conn->error;
}	
 
	}
	else
	{
		echo "User name does not exist in database";
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<style>
ul   {list-style-type: none; margin:0; padding:0;background-color:transparent; border:1px solid black; overflow:hidden; text-align:center;}
li a {display:block; width:200px; height:60px;color:white; font-size:20px; text-align:center; padding: 14px 16px;}
li   {text-align:center; float:left; background-color:transparent;} 
li a:hover {background-color:white; color:black;}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Student, Admin | NITD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyles.css">
</head>

<body id="login">	
 <?php echo $msg;?>
	<ul>
	<li><a href="index.html">Home</a></li>
	<li><a href="login.html">User-Login</a></li>
	<li><a href="login.html">Admin-Login</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="faq.html">FAQ</a></li>
	</ul>
    <div class="container">
        <div class="row tm-register-row tm-mb-35">
            <div class="col-sm-6 tm-login-l">
                <form action="" method="post" class="tm-bg-black p-5 h-100">
                    <div class="input-field">
                        <input placeholder="Email" id="email" name="email" type="email" class="validate">
                    </div>
               
               		<div class="input-field">
                        <input placeholder="Registration Number" id="reg" name="reg" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Roll Number" id="roll" name="roll" type="text" class="validate">
                    </div>
               <div class="input-field">
                        <input placeholder="New Password" id="password" name="password" type="password" class="validate">
                    </div>
               
               
                    <div class="tm-flex-lr">
                        <a href="login.php" class="white-text small">LOGIN</a>
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0" value="Reset 				Password">RESET PASSWORD</button>
                    <br><br>
                    <p id="response"></p>
                    
                    </div>
                </form>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-6 ml-auto mr-0 text-center">
                <a href="register.html" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Create New Account</a>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
   
    
    
    
    <script>
    (function (global) { 
    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {            
        noBackPlease();
        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }
})(window);
</script>
    
</body>

</html>
