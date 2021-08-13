<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
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
                        <h2>Log In</h2>
                        <form action="checkdata.php" method="post">
                            <div class="inputBox">
                                <input type="text" placeholder="Email" name="email" required/> 
                            </div>
                            <div class="inputBox">
                                <input type="password" placeholder="Password" id="password" name="pass" required/> 
                            </div>
                            <div class="inputBox">
                                <input type="submit" value="Log In" /> 
                            </div>
                            Don't have an account
                            <a href="index.php" id="link"> Sign Up!</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script>
        
    </script>
    
</html>