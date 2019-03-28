<?php 
session_start();
 if(!isset($_SESSION['login']))
 {
  header('Location: login.php');
 }
?>
 
<!DOCTYPE>
<html>
<style>
ul   {list-style-type: none; margin:0; padding:0;background-color:transparent; border:1px solid black; overflow:hidden; text-align:center;}
li a {display:block; width:220px; height:60px;color:white; font-size:20px; text-align:center; padding: 14px 16px;}
li   {text-align:center; float:left; background-color:transparent;} 
li a:hover {background-color:white; color:black;}
.content {max-width: 1200px;margin: auto;}
a {font-size:20px; padding: 12px;}
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
<div align=right>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="faq.html">FAQ</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
	</ul>
</div>

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

$sql = "SELECT * from Info NATURAL JOIN Edit_Details where Email='{$_SESSION['username']}'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row

while($row = $result->fetch_assoc()) 
{
?>
	<form action="update.php" method=post> 
	<h4>    BASIC INFO</h4>
	<table align="center" border="1px" style="width:1250px; line-height:10px;">
	
	<tr>
			    <th><?php echo "Title"?></th>
			    <th> <div class="mb-2">
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="Mr" />
                            <span>Mr.</span>
                        </label>
                        <label class="mr-4">
                            <input class="with-gap" name="title" type="radio" value="Ms" />
                            <span>Ms.</span>
                        </label>
                    </div></th>
        </tr>
        <tr>
			    <th><?php echo "Name"?></th>
			    <th><input type="text" name="name" value="<?php echo $row["Name"]?>"><br></th>
        </tr>
        <tr>
			    <th><?php echo " Registration Number"?></th>
			    <th><input type="text" name="registration_number" value="<?php echo $row["Registration_Number"]?>"></th>
        </tr>

        <tr>
			    <th><?php echo "Roll Number"?></th>
			    <th><input type="text" name="roll_number" value="<?php echo $row["Roll_Number"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "Guardian's Gender"?></th>
			    <th>
			    <div class="Gender">
                         <div class="mb-2">
                        <label class="mr-4">
                            <input class="with-gap" name="gender" type="radio" value="Male" />
                            <span>Male</span>
                        </label>
                        <label class="mr-4">
                            <input class="with-gap" name="gender" type="radio" value="Female" />
                            <span>Female</span>
                        </label>
                    </div>
                    </div></th>
        </tr>
        <tr>
			    <th><?php echo "Guardian's Name"?></th>
			    <th><input type="text" name="gname" value="<?php echo $row["Guardian_Name"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo "Category"?></th>
			    <th><input type="text" name="cat" value="<?php echo $row["Category"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo "Date of Birth"?></th>
			    <th><input type="date" name="dob" value="<?php echo $row["Date_of_Birth"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo "Blood Group"?></th>
			    <th><input type="text" name="blood" value="<?php echo $row["Blood_Group"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo "Course"?></th>
			    <th><input type="text" name="course" value="<?php echo $row["Course"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo "Department"?></th>
			    <th><input type="text" name="department" value="<?php echo $row["Department"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo "Current Semester"?></th>
			    <th><input type="text" name="sem" value="<?php echo $row["Current_Semester"]?>"></th>
        </tr>
        <tr>
				<th colspan="2"><h4>Past Education</h4></th>
	</tr>
        
        
 
	<tr>
			    <th><?php echo "Tenth Board"?></th>
			    <th><input type="text" name="10board" value="<?php echo $row["Tenth_Board"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo " Tenth School"?></th>
			    <th><input type="text" name="10school" value="<?php echo $row["Tenth_School"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo " Tenth Percentage"?></th>
			    <th><input type="text" name="10per" value="<?php echo $row["Tenth_Percentage"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo " Twelfth Board"?></th>
			    <th><input type="text" name="12board" value="<?php echo $row["Twelfth_Board"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo " Twelfth School"?></th>
			    <th><input type="text" name="12school" value="<?php echo $row["Twelfth_School"]?>"></th>
        </tr>
         <tr>
			    <th><?php echo " Twelfth Percentage"?></th>
			    <th><input type="text" name="12per" value="<?php echo $row["Twelfth_Percentage"]?>"></th>
        </tr>
        
        <tr>
				<th colspan="2"><h4>CONTACT DETAILS</h4></th>
	</tr>
	<tr>
			    <th><?php echo " Mobile"?></th>
			    <th><input type="text" name="mobile" value="<?php echo $row["Mobile"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "Email id"?></th>
			    <th><input type="text" name="email" value="<?php echo $row["Email"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "Address"?></th>
			    <th><input type="text" name="address" value="<?php echo $row["Address"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "Guardian's Mobile"?></th>
			    <th><input type="text" name="gno" value="<?php echo $row["Guardian_Phone"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "Permanent Address"?></th>
			    <th><input type="text" name="padd" value="<?php echo $row["Permanent_Address"]?>"></th>
        </tr>

         <tr>
				<th colspan="2"><h4>ACADEMIC PERFORMANCE</h4></th>
	</tr>
       
	<tr>
			    <th><?php echo "SGPA SEM 1"?></th>
			    <th><input type="text" name="sem1" value="<?php echo $row["Sem1_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 2"?></th>
			    <th><input type="text" name="sem2" value="<?php echo $row["Sem2_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 3"?></th>
			    <th><input type="text" name="sem3" value="<?php echo $row["Sem3_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 4"?></th>
			    <th><input type="text" name="sem4" value="<?php echo $row["Sem4_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 5"?></th>
			    <th><input type="text" name="sem5" value="<?php echo $row["Sem5_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 6"?></th>
			    <th><input type="text" name="sem6" value="<?php echo $row["Sem6_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 7"?></th>
			    <th><input type="text" name="sem7" value="<?php echo $row["Sem7_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 8"?></th>
			    <th><input type="text" name="sem8" value="<?php echo $row["Sem8_SGPA"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "CGPA"?></th>
			    <th><input type="text" name="cgpa" value="<?php echo $row["CGPA"]?>"></th>
        </tr>
        </table>
           <center><button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text">SUBMIT</button></center>
        </form>

<?php
}
} 

else 
{
echo "0 results";
}
$conn->close();
?>




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
