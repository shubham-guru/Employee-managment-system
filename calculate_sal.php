<?php
session_start();
$holidays = $_POST['holidays'];
$key = $_SESSION['key'];
$conn = new mysqli("localhost", "root", "", "the_nirmohi");
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 $result = mysqli_query($conn,"SELECT Salary FROM employee_data WHERE Name = '" . $key . "'");
 $row = mysqli_fetch_row($result);
 echo $row;

if($result)
{ echo "okk";

   // $row = mysqli_fetch_row($result);
    //echo $row;
    // mysqli_close($conn); // Close connection
    //header("location:http://localhost/THE%20NIRMOHI/employee.php"); 
    //exit;
}
else
{
    echo "Error deleting record. Please try again.";
}
 //echo $_SESSION['key'];
?>