<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
         #link{
            color: mediumseagreen;
        }
    </style>
    <body>
        <section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="box">
                <div class="square" style="--i:0;"></div>
                <div class="square" style="--i:1;"></div>
                <div class="square" style="--i:2;"></div>
                <div class="square" style="--i:3;"></div>
                <div class="square" style="--i:4;"></div>
                <div class="container">
                    <div class="form">
                        <h2>Sign Up</h2>
                        <form action="storedata.php" method="post" onsubmit="return validate()">
                            <div class="inputBox">
                                <input type="text" placeholder="Name" id="name" name="name" style="text-transform: capitalize;" required/> 
                            </div>
                            <div class="inputBox">
                                <input type="text" placeholder="Email" name="email" required/> 
                            </div>
                            <div class="inputBox">
                                <input type="text" placeholder="Mobile no." id="number" name="number" required/> 
                            </div>
                            <div class="inputBox">
                                <input type="password" placeholder="Password" id="password" name="pass" required/> 
                            </div>
                            <div class="inputBox">
                                <input type="password" placeholder="Confirm Password" id="con_password" name="con_pass" required/> 
                            </div>
                            <div class="inputBox">
                                <input type="submit" value="Sign up" /> 
                            </div>
                            Already have an account
                            <a href="login.php" id="link"> Log in!</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script>
        var x = true;
        var phoneno = /^\d{10}$/;
        function validate(){
            var a = document.getElementById('name').value;
            var b = document.getElementById('number').value;
            var c = document.getElementById('password').value;
            var d = document.getElementById('con_password').value;
            if (!isNaN(a)){
                alert("Name should be in charaters");
                x = false;
            }
            else if(isNaN(b)){
                alert("Mobile no. should be in digits");
                x = false;
            }
            else {
                x = true;
            }
             return x;   
        }

        if(<?php echo $_SESSION["signal"] ?>){
            alert("DONE !");
            window.location.href = "http://localhost/THE%20NIRMOHI/login.php";
        }
        else{
            alert("ERROR ! Please try again.");
        }
    </script>
    
</html>