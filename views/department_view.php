<?php
if(isset($_POST['sendForm']))
{
    // Login credentials for AWS database
    $servername = "52.50.23.197:3306";
    $username = "johnstudent";
    $password = "cct19";
    $database = "human_resources";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   // echo "Connect Successufly";

    $sql = "SELECT * FROM departments";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){

        $count = mysqli_num_rows($result);

        echo "<table class='borderland'>";
        echo "<tr>";
            echo "<td>Department Number</td>";
            echo "<td>Department Name</td>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
                
            echo "<tr>";
            echo "<td>".$row['dept_no']."</td>";
            echo "<td>".$row['dept_name']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }       
    else
    {
        echo "0 results";
    }
}
?>