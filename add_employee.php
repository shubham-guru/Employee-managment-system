<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ADD EMPLOYEE</title>
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
     .input_box{
        margin: 1.5%;
        padding: 0.5%;
        border: none;
        border-bottom: solid 1px black;
        font-size: 1.3em;
        outline: none;
        width: 60%;
     }
     #add{
         width: 40%;
         border: none;
         border-radius: 20px;
         background: mediumseagreen; 
         cursor: pointer;
         color: #fff;
     }
     #add:hover{
         transition: 0.4s;
         box-shadow: 2px 2px 15px #444;
         width: 35%;
     }
    </style>
    <body>
    <header class="header">
      <a href="http://localhost/THE%20NIRMOHI/dashboard.php">
        <img src="image/logo.png" alt="icon" width="28%" />
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
    <div align="center">
    <form action="store_emp_data.php" method="POST" autocomplete="off" onsubmit="return validate()">
      <input type="text" placeholder="Employee Name" class="input_box" id="na" name="employee_name" style="text-transform: capitalize;" required /><br>
      <input type="text" placeholder="Salary per month" class="input_box" id="sal" name="salary" required /><br>
      <input type="submit" class="input_box" id="add" value="Add" />
    </div>
    </form>
    </body>
    <script>
        var x = true;
        function validate(){
            var a = document.getElementById('na').value;
            var b = document.getElementById('sal').value;
            if (!isNaN(a)){
                alert("Employee name should be in charaters");
                x = false;
            }
            else if(isNaN(b)){
                alert("Salary should be in digits");
                x = false;
            }
            else {
                x = true;
            }
             return x;   
        }
    </script>
</html>