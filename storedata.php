<?php
    session_start();
    $Username = $_POST["name"];
    $Email = $_POST["email"];
    $Number = $_POST["number"];
    $Pass = $_POST["pass"];
    
    $conn = new mysqli("localhost", "root", "", "the_nirmohi");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO admin_data (Name, Email, Mobile_no, Password)  VALUES ('$Username', '$Email', '$Number', '$Pass')";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        $signal = true;
      } else {
          $signal = false;
        //echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
?>
<html>
      <script>
          var check = '<?php echo $signal ?>';
          if(check){
              window.location.href = "http://localhost/THE%20NIRMOHI/index.php";
              <?php $_SESSION["signal"]=$signal; ?>
          }
          else{
            alert("Something went wrong, Please try again !");
            window.location.href = "http://localhost/THE%20NIRMOHI/index.php";
          }
      </script>
</html>