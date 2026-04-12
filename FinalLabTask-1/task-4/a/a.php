<?php
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    echo "<p>Your gender is: " . $gender . "</p>";
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>task4-a</title>
</head>
<body>

<form action="handler.php" method="post">
    <label> Gender :</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other

    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>