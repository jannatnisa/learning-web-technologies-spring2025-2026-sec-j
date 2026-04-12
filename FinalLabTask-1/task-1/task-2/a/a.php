<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "<p>Your email is: " . $email . "</p>";
}else{
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>task2-b</title>
</head>
<body>

<form action="handler.php" method="post">
    <label>Email:</label>
    <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>