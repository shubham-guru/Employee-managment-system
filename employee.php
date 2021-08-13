<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>EMPLOYEE</title>
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
      table {
            margin: 0 auto;
            font-size: 0.9em;
            border: 1px solid black;
            border: none;
        }
  
        td {
            background-color: #20455e;
            color: #fff;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: left;
            padding-left: 5%;
            text-decoration: underline;
        }
  
        td {
            font-weight: lighter;
            cursor: pointer;
            text-decoration: none;
            border-radius: 20px;
            text-transform: capitalize;
        }
        td a{
            float: right;
            margin-right: 3%;
            color: gold;
            text-decoration: none; 
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
    <?php    
       $conn = new mysqli("localhost", "root", "", "the_nirmohi");
       // Check connection
       if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
       }
       $query = "SELECT * FROM employee_data";

if ($result = $conn->query($query)) {

?>
     <table width="100%">
            <tr>
                <th>Employee Name</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while ($row = $result->fetch_assoc()) {
                        $field1name = $row["Name"];
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td>
                    <ul>
                        <li><?php echo $field1name; ?>
                            <a href="delete.php ?id=<?php echo $field1name; ?>">Delete</a>
                          <!--  <a href="edit.php ?id= <?php // echo $field1name; ?>" onclick="delete_fun()">Edit</a> -->
                          <a href="calculate.php ?id= <?php  echo $field1name; ?>">Calculate</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <?php
                }
             ?>
     </table>
        
  <?php  
  
$result->free();
}
       else{
           echo "error";
       }
    ?>
    </body>
    <script>
  
    </script>
</html>