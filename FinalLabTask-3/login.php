<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple hardcoded user (same style as your repo)
    if ($username == "admin" && $password == "1234") {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="post">
    <h2>Login</h2>
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>