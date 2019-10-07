<?php
//MAMP and phpMyAdmin
$servername = "52.50.23.197:3306";
$username = "johnstudent";
$password = "cct19";
$database = "human_resources";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

