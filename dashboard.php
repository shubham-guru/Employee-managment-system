<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DASHBOARD</title>
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
      #descp{
        margin: 3%;
        line-height: 150%;
        font-size: 1.7em;
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
    <h1 id="name">Hi <?php echo $_SESSION['name_value']  ?> ! <img src="image/flower-pot.png" width="2.8%"></h1>

    <p id="descp">
      Hey there !<br> This software helps you to calculate your employee's salary. You just have to register your employee once by clicking on<b><i> Add 
      Employee</i></b>. And then in the  <b><i>Employees</i></b> section you just have to enter "the total number of holidays" your employee took.
      And BAAAM ! You'll get the amount that you have to pay him/her.<br> Pretty simple huh !
    </p>
    </body>
</html>