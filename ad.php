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


if(isset($_POST['delete']))
{
$email=$_POST['id'];
$sql = "DELETE FROM Edit_Details WHERE Email='$email'";
if ($conn->query($sql) === TRUE) {
$sq = "DELETE FROM Info WHERE Email='$email'";
} 
else {
echo "Error deleting record: " . $conn->error;
}
}

if(isset($_POST['view']))
{
$_SESSION['em']=$_POST['id'];
header("location: view.php");  
}


$sql = "SELECT * FROM Info where Approval_Status='Accepted'";
$result = $conn->query($sql);
?>



<!DOCTYPE HTML>
<html>
<style>
ul   {list-style-type: none; margin:0; padding:0;background-color:transparent; border:1px solid black; overflow:hidden; text-align:center;}
li a {display:block; width:200px; height:40px;color:white; font-size:20px; text-align:center; padding: 14px 16px;}
li   {text-align:center; float:left; background-color:transparent;} 
li a:hover {background-color:white; color:black;}
.content {max-width: 1200px;margin: auto;}
a {font-size:30px;}
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
.button3 {
  background-color: white; 
  color: black; 
  border: 2px;
}

.button3:hover {
  background-color: aqua;
  color: black;
}
th {
  background-color: #4CAF50;
  color: white;
  
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
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
	<li><a href="about.html">About Us</a></li>
	<li><a href="faq.html">FAQ</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
	<li><a href="admin.php" style="color:red;">PENDING REQUESTS</a></li>
	</ul>
</div>
 
		<table>
			
				<th>Name</th>
				<th>Email</th>
				<th>Department</th>
				<th>Roll Number</th>
				<th>Registration No.</th>
				<th>Operation</th>
			</t>
			<?php
			if ($result->num_rows > 0) {
			     while($row = $result->fetch_assoc()) 
			     {
			?>
			<tr>
			    <td><?php echo $row["Name"]?></td>
			    <td><?php echo $row["Email"]?></td>
			 
			    <td><?php echo $row["Department"]?></td>
			    <td><?php echo $row["Roll_Number"]?></td>
			    <td><?php echo $row["Registration_Number"]?></td>
			     
			    <td>
			    <form action="ad.php" method="post">
			    <input type="hidden" name="id" value="<?php echo $row["Email"];?>">
			    <button type="Submit" name="view" class="button button1">View</button>
			    <button type="Submit" name="edit" class="button button3">Edit</button>
			    <button type="Submit" name="delete" class="button button2">Delete</button>
			    </form>
			    </td>
			</tr>
			<?php
			}
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



