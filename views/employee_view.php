<?php
if(isset($_POST['sendForm']))
{
    if(strlen($_POST['employee_number']))
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

        $sql = "SELECT * FROM dept_emp where dept_emp.emp_no=".$_POST['employee_number']." ";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){

            $count = mysqli_num_rows($result);

            echo "<table class='borderland'>";
            echo "<tr>";
                echo "<td>Employees Number</td>";
                echo "<td>Department Number</td>";
                echo "<td>From</td>";
                echo "<td>To</td>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)) {
                    
                $from_date = date_create($row['from_date']);
                $to_date = date_create($row['to_date']);


                echo "<tr>";
                echo "<td>".$row['emp_no']."</td>";
                echo "<td>".$row['dept_no']."</td>";
                echo "<td>".date_format($from_date,'d/m/Y')."</td>";
                echo "<td>".date_format($to_date,'d/m/Y')."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }       
        else
        {
            echo "0 results";
        }
    }
    else
    {
        echo "Informe o código do employee";
    }    
}   

?>          