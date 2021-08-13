<?php
    session_start();
    $Email = $_POST["email"];
    $Pass = $_POST["pass"];

    $conn = new mysqli("localhost", "root", "", "the_nirmohi");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $result = mysqli_query($conn,"SELECT * FROM admin_data WHERE Email='" . $Email . "' and Password = '". $Pass."'");

	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = true;
	} else {
		$message = false;
	}
  // fetching name from the db
  while($get_name=mysqli_fetch_array($result)){
    $name_value=$get_name['Name'];
    $_SESSION['name_value'] = $name_value;
  }
      $conn->close();
?>
<html>
    <script>
        var a = '<?php echo $message ?>';
        if(!a){
            //alert ("");
            window.location.href = "http://localhost/THE%20NIRMOHI/dashboard.php";
        }
        else{
            alert ("Invalid Credentials !");
            window.location.href = "http://localhost/THE%20NIRMOHI/login.php";
        }
    </script>
</html>
