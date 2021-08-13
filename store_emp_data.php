<?php
session_start();
$Employee=$_POST["employee_name"];
$Salary=$_POST["salary"];
$conn = new mysqli("localhost", "root", "", "the_nirmohi");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO employee_data (Name, Salary) VALUES ('$Employee', '$Salary')";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        $signal = true;
      } else {
          $signal = false;
       // echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
?>

<html>
    <script>
        var x = '<?php echo $signal  ?>';
        if(x){
            alert("DONE !");
            window.location.href= "http://localhost/THE%20NIRMOHI/employee.php";
        }
        else{
            alert("Something went wrong. Please try again !");
            window.location.href= "http://localhost/THE%20NIRMOHI/add_employee.php";
        }
    </script>

</html>