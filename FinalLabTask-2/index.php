<?php session_start(); ?>

<h1>Welcome</h1>

<a href="registration.php">Registration</a><br>
<a href="login.php">Login</a><br>
<a href="forgot.php">Forgot Password</a><br>

<?php
if(isset($_COOKIE['user'])){
    echo "Remembered User: " . $_COOKIE['user'];
}
?>