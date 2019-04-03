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
    <title>Login Student, Admin | NITD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyles.css">
</head>

<body id="login">	
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="register.html">Register</a></li>
	<li><a href="contact.php">Contact</a></li>
	
	<li><a href="faq.php">FAQ</a></li>
	</ul>
    <div class="container">
        <div class="row tm-register-row tm-mb-35">
            <div class="col-sm-6 tm-login-l">
                <form action="log.php" method="post" class="tm-bg-black p-5 h-100">
                    <div class="input-field">
                        <input placeholder="Email" id="username" name="username" type="email" class="validate">
                    </div>
                    <div class="input-field mb-5">
                        <input placeholder="Password" id="password" name="password" type="password" class="validate">
                    </div>
                    <div class="tm-flex-lr">
                        <a href="forgotpassword.php" class="white-text small">Forgot Password?</a>
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Login</button>
                    </div>
                    <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span style='color:red'>$error</span>";
                    }
                ?>  
                </form>
                
            </div>
            <div class="col-sm-6 tm-login-r">
                <header class="font-weight-light tm-bg-black p-5 h-100">
                    <h3 class="mt-0 text-white font-weight-light">Login</h3>
                    <p>Please add some texts here.</p>
                    <p class="mb-0">Please add some texts here.</p>
                </header>
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
<?php
    unset($_SESSION["error"]);
?>
