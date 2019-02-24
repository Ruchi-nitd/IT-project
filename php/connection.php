<?php
$servername = "localhost";
$username = "gmonetix_admin";
$password = "adminisadmin";
$db = "gmonetix_itlab";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>