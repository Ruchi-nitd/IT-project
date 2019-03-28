<?php 
session_start();
 if(!isset($_SESSION['login']))
{
  header('Location: login.php');
 }
echo "Done"; 
?>

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

$sql = "SELECT * from Info where Email='{$_SESSION['username']}'";
$result = $conn->query($sql);
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
$password=$row["password"];
if (isset($_POST['dob']))
$dob = $_POST['dob'];
else
$dob = null;
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

$sql = "UPDATE Info SET
Gender='$gender', Registration_Number='$reg', Name='$name', Roll_Number='$roll', Password='$password', Mobile='$mobile', Address='$address', Date_of_Birth='$dob', Course='$course', Department='$department' WHERE Email='{$_SESSION['username']}'";
if ($conn->query($sql) === TRUE) {
header("location: stud.php");
} 
else {
echo "Error updating record: " . $conn->error;
}




if (isset($_POST['gname']))
{
$gname = $_POST['gname'];
}
else $gname = null;

if (isset($_POST['gender']))
$gender = $_POST['gender'];
else $gender = null;

if (isset($_POST['blood']))
$blood = $_POST['blood'];
else $blood=null;

if (isset($_POST['gno']))
$mobile = $_POST['gno'];
else $mobile=null;

if (isset($_POST['padd']))
$address = $_POST['padd'];
else $address=null;

if (isset($_POST['cat']))
$cat = $_POST['cat'];
else $cat=null;

if (isset($_POST['hobby']))
$hobby = $_POST['hobby'];
else $hobby=null;

if (isset($_POST['10board']))
$tenboard = $_POST['10board'];
else $tenboard=null;

if (isset($_POST['10school']))
$tenschool = $_POST['10school'];
else $tenschool=null;

if (isset($_POST['10per']))
$tenper = $_POST['10per'];
else $tenper=null;

if (isset($_POST['12board']))
$twboard = $_POST['12board'];
else $twboard=null;

if (isset($_POST['12school']))
$twschool = $_POST['12school'];
else $twschool=null;

if (isset($_POST['12per']))
$twper = $_POST['12per'];
else $twper=null;

if (isset($_POST['sem']))
$sem = $_POST['sem'];
else $sem = null;

if (isset($_POST['sem1']))
$sem1 = $_POST['sem1'];
else $sem1 = null;

if (isset($_POST['sem2']))
$sem2 = $_POST['sem2'];
else $sem2 = null;

if (isset($_POST['sem3']))
$sem3 = $_POST['sem3'];
else $sem3 = null;

if (isset($_POST['sem4']))
$sem4 = $_POST['sem4'];
else $sem4 = null;

if (isset($_POST['sem5']))
$sem5 = $_POST['sem5'];
else $sem5 = null;

if (isset($_POST['sem6']))
$sem6 = $_POST['sem6'];
else $sem6 = null;

if (isset($_POST['sem7']))
$sem7 = $_POST['sem7'];
else $sem7 = null;
if (isset($_POST['sem8']))
$sem8 = $_POST['sem8'];
else $sem8 = null;

if (isset($_POST['cgpa']))
$cgpa = $_POST['cgpa'];
else $cgpa = null;

$sql = "UPDATE Edit_Details SET
Guardian_Gender='$gender', Guardian_Name='$gname', Guardian_Phone='$mobile',Permanent_Address='$address', Blood_Group='$blood', Category='$cat', Hobbies='$hobby', Tenth_Board='$tenboard', Tenth_School='$tenschool', Tenth_Percentage='$tenper', Twelfth_Board='$twboard', Twelfth_School='$twschool', Twelfth_Percentage='$twper', Current_Semester='$sem', Sem1_SGPA='$sem1',  Sem2_SGPA='$sem2',  Sem3_SGPA='$sem3',  Sem4_SGPA='$sem4',  Sem5_SGPA='$sem5',  Sem6_SGPA='$sem6',  Sem7_SGPA='$sem7',  Sem8_SGPA='$sem8', CGPA='$sem1' WHERE Email='{$_SESSION['username']}'";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} 
else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
 
