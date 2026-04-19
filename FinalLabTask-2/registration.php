<?php
session_start();

if(isset($_POST['submit'])){
    $_SESSION['user'] = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "gender" => $_POST['gender']
    ];

    echo "Registration Successful!";
}
?>

<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female<br>

<input type="submit" name="submit" value="Register">
</form>