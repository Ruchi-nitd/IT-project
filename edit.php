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
    <title>View | ADMIN</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyles.css">
</head>

<body>


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

$sql = "SELECT * from Info NATURAL JOIN Edit_Details where Email='{$_SESSION['em']}'";
$result = $conn->query($sql);
?>
<div align=right>

<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="faq.php">FAQ</a></li>
	<li><a href="ad.php">MY PROFILE</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
	</ul>
</div>
<?php
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
				 <th><input type="text" name="title" value="<?php echo $row["Gender"]?>"><br></th>
                    </div></th>
        </tr>
        <tr>
			    <th><?php echo "Name"?></th>
			    <th><input type="text" id="name" name="name" value="<?php echo $row["Name"]?>" class="validate"><span id="errfn" style="color:red"></span><br></th>
        </tr>
        <tr>
			    <th><?php echo " Registration Number"?></th>
			    <th><input type="text" id="registration_number"name="registration_number" value="<?php echo $row["Registration_Number"]?>" class="validate"><span id="errfn8" style="color:red"></span></th>
        </tr>

        <tr>
			    <th><?php echo "Roll Number"?></th>
			    <th><input type="text" id="roll_number" name="roll_number" value="<?php echo $row["Roll_Number"]?>" class="validate"><span id="errfn7" style="color:red"></span></th>
        </tr>
        <tr>
			    <th><?php echo "Guardian's Gender"?></th>
			    <th>
			    <input type="text" name="gender" value="<?php echo $row["Guardian_Gender"]?>">
			    </th>
        </tr>
        <tr>
			    <th><?php echo "Guardian's Name"?></th>
			    <th><input type="text" id="gname" name="gname" value="<?php echo $row["Guardian_Name"]?>" class="validate"><span id="errfn20" style="color:red"></span></th>
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
			    <th><?php echo "Age"?></th>
			    <th><input type="text" name="age" value="<?php echo $row["Age"]?>"></th>
        </tr>
        <tr>
			    <th><?php echo "Hobbies"?></th>
			    <th><input type="text" id="hobby" name="hobby" value="<?php echo $row["Hobbies"]?>" class="validate"><span id="errfn21" style="color:red"></span></th>
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
			    <th><input type="text" id="sem" name="sem" value="<?php echo $row["Current_Semester"]?>" class="validate"><span id="errfn22" style="color:red"></span></th>
        </tr>
        <tr>
				<th colspan="2"><h4>Past Education</h4></th>
	</tr>
        
        
 
	<tr>
			    <th><?php echo "Tenth Board"?></th>
			    <th><input type="text" id="10board" name="10board" value="<?php echo $row["Tenth_Board"]?>" class="validate"><span id="errfn23" style="color:red"></span></th>
        </tr>
        <tr>
			    <th><?php echo " Tenth School"?></th>
			    <th><input type="text" id="10school" name="10school" value="<?php echo $row["Tenth_School"]?>" class="validate"><span id="errfn24" style="color:red"></span></th>
        </tr>
        <tr>
			    <th><?php echo " Tenth Percentage"?></th>
			    <th><input type="text" id="10per" name="10per" value="<?php echo $row["Tenth_Percentage"]?>" class="validate"><span id="errfn25" style="color:red"></span></th>
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
			    <th><input type="text" id="12per" name="12per" value="<?php echo $row["Twelfth_Percentage"]?>"class="validate"><span id="errfn26" style="color:red"></span></th>
        </tr>
        
        <tr>
				<th colspan="2"><h4>CONTACT DETAILS</h4></th>
	</tr>
	<tr>
			    <th><?php echo " Mobile"?></th>
			    <th><input type="text" id="mobile" name="mobile" value="<?php echo $row["Mobile"]?>" class="validate"><span id="errfn5" style="color:red"></span></th>
        </tr>
        <tr>
			    <th><?php echo "Email id"?></th>
			    <th><input type="text" id="email" name="email" value="<?php echo $row["Email"]?>" class="validate"><span id="errfn2" style="color:red"></span></th>
        </tr>
        <tr>
			    <th><?php echo "Address"?></th>
			    <th><input type="text" id="address" name="address" value="<?php echo $row["Address"]?>" class="validate"><span id="errfn6" style="color:red"></span></th>
        </tr>
        <tr>
			    <th><?php echo "Guardian's Mobile"?></th>
			    <th><input type="text" id="gno" name="gno" value="<?php echo $row["Guardian_Phone"]?>" class="validate"><span id="errfn27" style="color:red"></span></th>
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
			    <th><input type="text" id="sem1" name="sem1" value="<?php echo $row["Sem1_SGPA"]?>" class="validate"><span id="errfn28" style="color:red"></span></th>
        </tr>
        <tr>
			    <th><?php echo "SGPA SEM 2"?></th>
			    <th><input type="text" id="sem2" name="sem2" value="<?php echo $row["Sem2_SGPA"]?>" class="validate"><span id="errfn29" style="color:red"></span></th>
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


<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>

<script>
  $('#name').on('input', function(e) {
            var name = $('#name').val();
            var regex = /^[a-zA-Z ]+$/;
            if(name.length >= 3 && regex.test(name)==true) {
                $('#email').prop('disabled', false);
                document.getElementById('errfn').innerHTML="";
                console.log("done");
            } else{
                if(name.length < 3)
                document.getElementById('errfn').innerHTML="Invalid(Too short)";
                if(name.length >= 3)
            	 document.getElementById('errfn').innerHTML="Use only alphabetic char";
                $('#email').prop('disabled', true);
                console.log("null");
            }
        });
        $('#email').on('input', function(e) {
            var email = $('#email').val();
            var reg= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(reg.test(email)) {
                $('#password').prop('disabled', false);
                document.getElementById('errfn2').innerHTML="";
            } else{
                document.getElementById('errfn2').innerHTML="Invalid email";
                $('#password').prop('disabled', true);
            }
        });
        $('#password').on('input', function(e) {
            var password = $('#password').val();
           var regex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
            if(regex.test(password)==true) {
                $('#confirm_password').prop('disabled', false);
                document.getElementById('errfn3').innerHTML="";
            } else{
                 document.getElementById('errfn3').innerHTML="Invalid: Use atleast 1 Capital letter, 1 small letter, 1 digit (Minimum length=8)";
                $('#confirm_password').prop('disabled', true);
            }
        });
        $('#confirm_password').on('input', function(e) {
            var confirm_password = $('#confirm_password').val();
            if(confirm_password === $('#password').val()) {
                $('#dob').prop('disabled', false);
                document.getElementById('errfn4').innerHTML="";
            } else{
            document.getElementById('errfn4').innerHTML="Does not match the above password";
                $('#dob').prop('disabled', true);
            }
        });
        
        $('#dob').on('input', function(e) {
            var date = $('#dob').val();
            if(date!="") {
                  $('#age').prop('disabled', false);
                  $('#mobile').prop('disabled', false);   
               
            } else{
                $('#age').prop('disabled', true);
                
            }
        });
        
        
        
        $('#mobile').on('input', function(e) {
            var mobile = $('#mobile').val();
            var reg= /^[6789]\d{9}$/;
            if(mobile.length == 10 && reg.test(mobile)==true) {
                $('#address').prop('disabled', false);
                 document.getElementById('errfn5').innerHTML="";
            } else{
                $('#address').prop('disabled', true);
                document.getElementById('errfn5').innerHTML="Invalid Mobile Number";
            }
        });
        
        $('#address').on('input', function(e) {
            var add = $('#address').val();
            if(add.length > 10) {
                $('#roll_number').prop('disabled', false);
                 document.getElementById('errfn6').innerHTML="";
            } else{
                $('#roll_number').prop('disabled', true);
                 document.getElementById('errfn6').innerHTML="Too short";
            }
        });
        
        $('#roll_number').on('input', function(e) {
            var roll_number = $('#roll_number').val();
             var regex = /^\d{2}(IT|BT|CS|EC|CE|ME|MME|EE)\d{4}$/;
            if(regex.test(roll_number)==true) {
                $('#registration_number').prop('disabled', false);
                 document.getElementById('errfn7').innerHTML="";
            } else{
                $('#registration_number').prop('disabled', true);
                 document.getElementById('errfn7').innerHTML="Invalid: correct format is like 14ME8022";
            }
        });
        
         $('#registration_number').on('input', function(e) {
            var reg_number = $('#registration_number').val();
             var regex = /^\d{2}[A-Z]\d{5}$/;
            if(regex.test(reg_number)==true) {
                $('#course').prop('disabled', false);
                 document.getElementById('errfn8').innerHTML="";
            } else{
                $('#course').prop('disabled', true);
                 document.getElementById('errfn8').innerHTML="Invalid Registration Number";
            }
        });
        
         $('#course').on('input', function(e) {
            var c = $('#course').val();
            if(c==='course') {
                $('#dept').prop('disabled', true);
            } else{
                $('#dept').prop('disabled', false);
            }
        });
        
        $('#gname').on('input', function(e) {
            var name = $('#gname').val();
            var regex = /^[a-zA-Z ]+$/;
            if(name.length >=3 && regex.test(name)==true) {
                $('#gno').prop('disabled', false);
                document.getElementById('errfn20').innerHTML="";
                console.log("done");
            } else{
                $('#gno').prop('disabled', true);
                if(name.length < 3)
                document.getElementById('errfn20').innerHTML="Invalid(Too short)";
                if(name.length >= 3)
            	 document.getElementById('errfn20').innerHTML="Use only alphabetic char";
                console.log("null");
            }
        });
        
        $('#gno').on('input', function(e) {
            var mobile = $('#gno').val();
            var reg= /^[789]\d{9}$/;
            if(mobile.length == 10 && reg.test(mobile)==true) {
                $('#padd').prop('disabled', false);
                document.getElementById('errfn27').innerHTML="";
            } else{
                $('#padd').prop('disabled', true);
                document.getElementById('errfn27').innerHTML="Invalid Phone Number";
            }
        });
        
        $('#padd').on('input', function(e) {
            var add = $('#padd').val();
            if(add.length > 10) {
                $('#blood').prop('disabled', false);
                document.getElementById('errfn3').innerHTML="";
            } else{
                $('#blood').prop('disabled', true);
                document.getElementById('errfn3').innerHTML="Too short";
            }
        });
        
        $('#blood').on('input', function(e) {
            var c = $('#blood').val();
            if(c==='blood_group') {
                $('#cat').prop('disabled', true);
            } else{
                $('#cat').prop('disabled', false);
            }
        });
        
        $('#cat').on('input', function(e) {
            var c = $('#cat').val();
            if(c==='Category') {
                $('#hobby').prop('disabled', true);
            } else{
                $('#hobby').prop('disabled', false);
            }
        });
        
       $('#hobby').on('input', function(e) {
            var hobby = $('#hobby').val();
            if(hobby.length > 5) {
                $('#10board').prop('disabled', false);
                document.getElementById('errfn21').innerHTML="";
            } else{
                $('#10board').prop('disabled', true);
                document.getElementById('errfn21').innerHTML="Too short";
            }
        });
        
        
        function validateFileType(){
        var fileName = document.getElementById("fileName").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            //TO DO
        }else{
            alert("Only jpg/jpeg and png files are allowed!");
        }   
    }
    
    
    
    
        
        $('#10board').on('input', function(e) {
            var board = $('#10board').val();
            if(board.length > 3) {
                $('#10school').prop('disabled', false);
                document.getElementById('errfn23').innerHTML="";
            } else{
                $('#10school').prop('disabled', true);
                document.getElementById('errfn23').innerHTML="Inavlid Percentage: Example:70.6";
            }
        });
         
         
         $('#10school').on('input', function(e) {
            var school = $('#10school').val();
            if(school.length > 10) {
                $('#10per').prop('disabled', false);
            } else{
                $('#10per').prop('disabled', true);
            }
        }); 
        
        $('#10per').on('input', function(e) {
            var name = $('#10per').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(name)==true && name<=100) {
                $('#12board').prop('disabled', false);
                console.log("done");
                document.getElementById('errfn25').innerHTML="";
            } else{
                $('#12board').prop('disabled', true);
                document.getElementById('errfn25').innerHTML="Inavlid Percentage: Example:70.6";
                console.log("null");
            }
        });
        
        $('#12board').on('input', function(e) {
            var board = $('#12board').val();
            if(board.length > 3) {
                $('#12school').prop('disabled', false);
            } else{
                $('#12school').prop('disabled', true);
            }
        });
         
         
         $('#12school').on('input', function(e) {
            var school = $('#12school').val();
            if(school.length > 10) {
                $('#12per').prop('disabled', false);
            } else{
                $('#12per').prop('disabled', true);
            }
        }); 
        
        $('#12per').on('input', function(e) {
            var per = $('#12per').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(per)==true) {
                $('#sem').prop('disabled', false);
                document.getElementById('errfn26').innerHTML="";
                console.log("done");
            } else{
                $('#sem').prop('disabled', true);
                document.getElementById('errfn26').innerHTML="Invalid Percentage. Example:70.6";
                console.log("null");
            }
        });
        
        
        $('#sem').on('input', function(e) {
            var c = $('#sem').val();
            if(c==='Current Semester') {
                $('#sem1').prop('disabled', true);
            } else{
                $('#sem1').prop('disabled', false);
            }
        });
        
         $('#sem1').on('input', function(e) {
            var sg = $('#sem1').val();
            var sem = $('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true && sem>="sem2") {
            document.getElementById('errfn28').innerHTML="";
                $('#sem2').prop('disabled', false);
                console.log("done");
            } else if(regex.test(sg)==true && sem<"sem2")
              {
                $('#cgpa').prop('disabled',false);
                console.log("done");
              }
            else{
                 document.getElementById('errfn28').innerHTML="Invalid";
                $('#sem2').prop('disabled', true);
                console.log("null");
            }
        });
        
        $('#sem2').on('input', function(e) {
            var sg = $('#sem2').val();
            var sem=$('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true && sem>="sem3") {
                $('#sem3').prop('disabled', false);
                console.log("done");
            }else if(regex.test(sg)==true && sem<"sem3")
              {
                $('#cgpa').prop('disabled',false);
                console.log("done");
              } 
            else{
                $('#sem3').prop('disabled', true);
                console.log("null");
            }
        });
        
        $('#sem3').on('input', function(e) {
            var sg = $('#sem3').val();
            var sem=$('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true && sem>="sem4") {
                $('#sem4').prop('disabled', false);
                console.log("done");
            }
            else if(regex.test(sg)==true && sem<"sem4")
              {
                $('#cgpa').prop('disabled',false);
                console.log("done");
              }
             else{
                $('#sem4').prop('disabled', true);
                console.log("null");
            }
        });
        
        $('#sem4').on('input', function(e) {
            var sg = $('#sem4').val();
            var sem=$('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true && sem>="sem5") {
                $('#sem5').prop('disabled', false);
                console.log("done");
            }
            else if(regex.test(sg)==true && sem<"sem5")
              {
                $('#cgpa').prop('disabled',false);
                console.log("done");
              }
             else{
                $('#sem5').prop('disabled', true);
                console.log("null");
            }
        });
        
        $('#sem5').on('input', function(e) {
            var sg = $('#sem5').val();
            var sem=$('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true && sem>="sem6") {
                $('#sem6').prop('disabled', false);
                console.log("done");
            }
            else if(regex.test(sg)==true && sem<"sem6")
              {
                $('#cgpa').prop('disabled',false);
                console.log("done");
              } 
            else{
                $('#sem6').prop('disabled', true);
                console.log("null");
            }
        });
        
        
        $('#sem6').on('input', function(e) {
            var sg = $('#sem6').val();
            var sem=$('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true && sem>="sem7") {
                $('#sem7').prop('disabled', false);
                console.log("done");
            }
            else if(regex.test(sg)==true && sem<"sem7")
              {
                $('#cgpa').prop('disabled',false);
                console.log("done");
              } 
            else{
                $('#sem7').prop('disabled', true);
                console.log("null");
            }
        });
        
        $('#sem7').on('input', function(e) {
            var sg = $('#sem7').val();
            var sem=$('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true && sem>="sem8") {
                $('#sem8').prop('disabled', false);
                console.log("done");
            }
            else if(regex.test(sg)==true && sem<"sem8")
              {
                $('#cgpa').prop('disabled',false);
                console.log("done");
              } 
            else{
                $('#sem8').prop('disabled', true);
                console.log("null");
            }
        });
        $('#sem8').on('input', function(e) {
            var sg = $('#sem8').val();
            var sem=$('#sem').val();
            var regex = /^[+-]?\d+(\.\d+)?$/;
            if(regex.test(sg)==true) {
                $('#cgpa').prop('disabled', false);
                console.log("done");
            } else{
                $('#cgpa').prop('disabled', true);
                console.log("null");
            }
        });
        
        
        
        
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
}
} 

else 
{
echo "0 results";
}
$conn->close();
?>


