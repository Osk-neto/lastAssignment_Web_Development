<?php
/* 
servername is going to depend on which MySQL server you are trying to connect to. Note also this may differ between MAC and Windows. Below has been tested on MAC. 

MAC
1. MAMP and phpMyAdmin
    $servername = "localhost:8889";
    $username = "root";
    $password = "root";

2. Workbench / MySQL Server 
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "Password2019";

Note: that if you get error messages with 2 above, you may need to run the following command in MySQL Workbench to get it to work:
    ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Password2019';

WINDOWS
1. XAMP and phpMyAdmin 
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";

Note: make sure your mysql server has stopped if you use this one

2. Workbench / MySQL Server 
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "Password2019";

Note: that if you get error messages with 2 above, you may need to run the following command in MySQL Workbench to get it to work:
    ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Password2019';

*/
// Login credentials
$servername = "127.0.0.1:3306";
$username = "root";
$password = "Password2019";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>