<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>task1-b</title>
</head>
<body>

<form method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($name)) {
    echo "Your name is: " . $name;
}
?>

</body>
</html>