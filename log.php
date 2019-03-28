<?php  
session_start();
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
$error = "Invalid username/password";

if(isset($_POST['username']) && isset($_POST['password']))
{
  $user = $_POST['username'];
  $pass = $_POST['password'];
}
else
{
$user=null;
$pass=null;
}
$val=0;


$sql = "SELECT email, Password FROM Admin_Login";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc()){
if($user == $row["email"] && $pass == $row["Password"])
{
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['login']="1";
    header("location: ad.php"); 
  $val=1;
}
}
}


if($val!=1)
{
$sql = "SELECT Email, Password FROM Info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row


while($row = $result->fetch_assoc()){
if($user == $row["Email"] && $pass == $row["Password"])
{
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['login']="1";
    header("location: profile.php"); 
  $val=1;
}
}
if($val != 1) 
{
 $_SESSION["error"] = $error;
 $_SESSION['login'] = "";
    header("location: login.php");
}
}
else {
    $_SESSION["error"] = $error;
    header("location: login.php");
}
}
$conn->close();
?>
