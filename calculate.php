<?php
 session_start();
 $conn = new mysqli("localhost", "root", "", "the_nirmohi");
    // Check connection
    $employee = $_GET['id'];

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $result = mysqli_query($conn,"SELECT Salary FROM employee_data WHERE Name = '" . $employee . "'");
    $array = (array) $result;
 
    print_r($result);
  $conn->close();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>CALCULATE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/main.js" defer></script>
        <link rel="stylesheet" href="css/header_style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    </head>
    <style>
      #name{
        text-align: center;
        font-size: 1.5em;
        padding: 2%;
        font-family: 'Montserrat', sans-serif;      
      }
      p{
          font-size: 1.1em;
          text-transform: capitalize;
          margin-top: 3%;
          margin-bottom: 3%;
      }
      .input_box{
        margin: 1.5%;
        padding: 0.5%;
        border: none;
        border-bottom: solid 1px black;
        font-size: 1.3em;
        outline: none;
        width: 40%;
     }
     #button{
         width: 30%;
         border: none;
         border-radius: 20px;
         background: mediumseagreen; 
         cursor: pointer;
         color: #fff;
         font-size: 1.1em;
     }
     #button:hover{
         transition: 0.4s;
         box-shadow: 2px 2px 15px #444;
         width: 25%;
     }
     #note{
         font-size: 0.8em;
     }
    </style>
    <body>
    <header class="header">
      <a href="http://localhost/THE%20NIRMOHI/dashboard.php">
        <img src="image/logo.png" width="28%" />
      </a>
      <div class="menu-btn">
        <div class="menu-btn__lines"></div>
      </div>
      <ul class="menu-items">
        <li><a href="add_employee.php" class="menu-item">Add Employee</a></li>
        <li><a href="employee.php" class="menu-item">Employees</a></li>
        <li><a href="logout.php" class="menu-item">Logout</a></li>
      </ul>
    </header>
    <h1 id="name">Hi <?php echo $_SESSION['name_value']  ?> ! <img src="image/flower-pot.png" alt="icon" width="2.8%"></h1>
    <div align="center">
    <p><u>Calculating the salary of <?php echo $employee ?></u></p>
    <form action="calculate_sal.php" method="POST" onsubmit="return validate()" autocomplete="off">
       <input type="text" class="input_box" name="holidays" placeholder="Enter the no. of days<?php echo $employee ?> took holidays" id="sal" required /><br>
       <input type="submit" value="Calculate" class="input_box" id="button" />
    </form>
    <p id="note"><b>NOTE:</b> This will calculate the salary of 1 month, so make sure you enter the number of holidays less than 30.</p>
    </body>
    <script>
        var x = true;
        function validate(){
            var a = document.getElementById('sal').value;
            if(isNaN(a)){
                alert("No. of days should be in digits");
                x = false;
            }
            else if(a>30){
                alert("This will calculate the salary of 1 month, so please enter the number of holidays less than 30.");
                x = false;
            }
            else {
                x = true;
            }
             return x;   
        }
    </script>
</html>