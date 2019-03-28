<?php 
session_start();
 if(!isset($_SESSION['login']))
{
  header('Location: login.php');
 }?>
 

<!DOCTYPE>
<html>
<style>
ul   {list-style-type: none; margin:0; padding:0;background-color:transparent; border:1px solid black; overflow:hidden; text-align:center;}
li a {display:block; width:220px; height:60px;color:white; font-size:20px; text-align:center; padding: 14px 16px;}
li   {text-align:center; float:left; background-color:transparent;} 
li a:hover {background-color:white; color:black;}
.content {max-width: 1200px;margin: auto;}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged In| NITD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyles.css">
</head>

<body>


<div class="content">
<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Name,Approval_Status FROM Info where Email='{$_SESSION['username']}'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<div align="right">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="faq.html">FAQ</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
	<li style="float:right; padding:10px 10px;"><?php echo "<span style='color:orange;font-size:20px;'> Welcome ".$row['Name']." ";?></li>
	</ul>

</div>

<?php
if($row['Approval_Status']=="Accepted")
{

  $sq = "SELECT * from Edit_Details where Email='{$_SESSION['username']}'";
  $re = $conn->query($sq);
  if($re->num_rows > 0)
  header("location: stud.php");


 echo "<span style='color:green; font-size:50px'>Congratulations!! Your request has been successfully ACCEPTED<br><br></span>"; 
 echo "<span style='font-size:30px'>Click here to proceed <a href='edit_details.html'>'Edit Details'</a></span>"; 
}
else if($row['Approval_Status']=="Rejected")
{
echo  "<span style='color:red; font-size:50px; align=center;'>Sorry!! Your request has been REJECTED by the admin.<br></span>"; 
echo  "<span style='font-size:30px'>For more details Contact XXXXXXXXXX.<br></span>"; 
echo  "<span style='font-size:30px'>Or you can Visit <a href='faq.html'>'FAQ'</a></span>"; 
}
else
{
echo "<span style='color:aqua; font-size:50px;'>Your request is still PENDING for approval.<br>Login again after some time.</span>";

}
} 
}
else {
echo "0 results";
}
$conn->close();
?>
</div>
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








