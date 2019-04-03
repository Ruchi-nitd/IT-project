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
$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
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

if (isset($_POST['submit']))
$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
else $image = null;

$sql = "INSERT INTO Edit_Details (Email, Guardian_Gender, Guardian_Name, Guardian_Phone,Permanent_Address, Blood_Group, Category, Hobbies, Image, Tenth_Board, Tenth_School, Tenth_Percentage, Twelfth_Board, Twelfth_School, Twelfth_Percentage, Current_Semester, Sem1_SGPA,  Sem2_SGPA,  Sem3_SGPA,  Sem4_SGPA,  Sem5_SGPA,  Sem6_SGPA,  Sem7_SGPA,  Sem8_SGPA, CGPA) 
VALUES ('{$_SESSION['username']}','$gender','$gname','$mobile','$address','$blood','$cat','$hobby','$image','$tenboard','$tenschool','$tenper', '$twboard','$twschool','$twper', '$sem','$sem1', '$sem2','$sem3', '$sem4','$sem5', '$sem6','$sem7', '$sem8','$cgpa')";

if ($conn->query($sql) === TRUE) {
  header("location: stud.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
