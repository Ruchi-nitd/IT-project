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


if (isset($_POST['name']))
{
$name = $_POST['name'];
}
else
$name=null;

if (isset($_POST['email']))
$email = $_POST['email'];
else
$email=null;
if (isset($_POST['password']))
$password = $_POST['password'];
else
$password=null;
if (isset($_POST['dob']))
$dob = $_POST['dob'];
else
$dob = null;
if (isset($_POST['age']))
$age = $_POST['age'];
else
$age = null;
if (isset($_POST['title']))
$gender = $_POST['title'];
else
$gender = null;
if (isset($_POST['mobile']))
$mobile = $_POST['mobile'];
else
$mobile = null;
if (isset($_POST['address']))
$address = $_POST['address'];
else
$address = null;
if (isset($_POST['roll_number']))
$roll = $_POST['roll_number'];
else
$roll = null;
if (isset($_POST['registration_number']))
$reg = $_POST['registration_number'];
else
$reg=null;
if (isset($_POST['course']))
$course = $_POST['course'];
else
$course = null;
if (isset($_POST['department']))
$department = $_POST['department'];
else
$department=null;




$sql = "INSERT INTO Info (Gender, Registration_Number, Name, Roll_Number, Email, Password, Mobile, Address, Date_of_Birth, Age,Course, Department) 
VALUES ('$gender','$reg','$name','$roll','$email','$password','$mobile','$address','$dob','$age','$course','$department')";

if ($conn->query($sql) === TRUE) {
echo "<script> window.location.assign('login.php'); </script>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
