<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo "<p>Your name is: " . $name . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 1 - c</title>
</head>
<body>

<form action="" method="post">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">>
    <input type="submit" value="Submit">
</form>

</body>
</html>