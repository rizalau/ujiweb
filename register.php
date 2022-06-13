<?php
require 'function.php';


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login page</title>
        <link rel="stylesheet" href="navbar/style2.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    </head>
    <body>
        <form method="post">
        <div class="login">
            <div class="avatar">
                <i class="fa fa-user"></i>

            </div>
            <h2>Register</h2>
            <div class="box-login">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Email">
            </div>
            <div class="box-login">
                <i class="fas fa-lock"></i>
                <input type="Password" name="password"  placeholder="Password">
            </div>
            <button type="submit" name="register" class="btn-login">login</button>
        </form>
            <div class="bottom">
                <a href="login.php" class="text-reset">Back</a>
            </div>

        </div>
    </body>
</html>