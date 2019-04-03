<?php 
session_start();
 if(!isset($_SESSION['login']))
 {
  header('Location: login.php');
 }
?> 
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Acc']))
{
$status="Accepted";
$reg=$_POST['id'];
$sql = "UPDATE Info SET Approval_Status='$status' WHERE Registration_Number='$reg'";
$res=mysqli_query($conn,$sql);
}

if(isset($_POST['Rej']))
{
$status="Rejected";
$reg=$_POST['id'];
$sql = "UPDATE Info SET Approval_Status='$status' WHERE Registration_Number='$reg'";
$res=mysqli_query($conn,$sql);
}


$sql = "SELECT* FROM Info where Approval_Status is NULL";
$result = $conn->query($sql);
?>



<!DOCTYPE HTML>
<html>
<style>
ul   {list-style-type: none; margin:0; padding:0;background-color:transparent; border:1px solid black; overflow:hidden; text-align:center;}
li a {display:block; width:220px; height:60px;color:white; font-size:20px; text-align:center; padding: 14px 16px;}
li   {text-align:center; float:left; background-color:transparent;} 
li a:hover {background-color:white; color:black;}
.content {max-width: 1200px;margin: auto;}
a {font-size:20px; padding: 12px;}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  border-radius: 25px;
  color: white;
  padding: 8px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
 background-color: white; 
  color: black; 
  border: 2px;
}

.button2:hover {
  background-color: #f44336;
  color: white;
}

</style>
	<head>
	   	<meta charset="UTF-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
   		<meta http-equiv="X-UA-Compatible" content="ie=edge">  
   		<title>Pending Requests</title>  
    		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	<div style="float:left">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="faq.php">FAQ</a></li>
	<li><a href="ad.php">MY PROFILE</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
	</ul>
</div>
 
		<table align="center" border="1px" style="width:1250px; line-height:30px;">
			<tr>
				<th colspan="10"><h1>PENDING REQUESTS</h1></th>
			</tr>
			<t>
				<th>Name</th>
				<th>Email</th>
				<th>Course</th>
				<th>Department</th>
				<th>Roll Number</th>
				<th>Registration No.</th>
				<th>Date of Birth</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Status</th>
			</t>
			<?php
			     while($row = $result->fetch_assoc()) 
			     {
			?>
			<tr>
			    <th><?php echo $row["Name"]?></th>
			    <th><?php echo $row["Email"]?></th>
			    <th><?php echo $row["Course"]?></th>
			    <th><?php echo $row["Department"]?></th>
			    <th><?php echo $row["Roll_Number"]?></th>
			    <th><?php echo $row["Registration_Number"]?></th>
			     <th><?php echo $row["Date_of_Birth"]?></th>
			    <th><?php echo $row["Mobile"]?></th>   
			    <th><?php echo $row["Address"]?></th>
			    <th>
			    <form action="admin.php" method="post">
			    <input type="hidden" name="id" value="<?php echo $row["Registration_Number"];?>">
			    <button type="Submit" name="Acc" class="button button1">Accept</button>
			    <button type="Submit" name="Rej" class="button button2">Reject</button>
			    </form>
			</tr>
			<?php
			}
			?>
		</table>
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



