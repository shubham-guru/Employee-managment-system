<?php
 session_start();
 $conn = new mysqli("localhost", "root", "", "the_nirmohi");
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 $id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from employee_data where Name = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:http://localhost/THE%20NIRMOHI/employee.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record. Please try again."; // display error message if not delete
}
?>