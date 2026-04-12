<?php
if (isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yyyy'])) {
    $dd = $_POST['dd'];
    $mm = $_POST['mm'];
    $yyyy = $_POST['yyyy'];
    echo "<p>Your date of birth is: " . $dd . "/" . $mm . "/" . $yyyy . "</p>";
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>DOB Form</title>
</head>
<body>

<form action="handler.php" method="post">
    <label>Date of Birth:</label>
    <input type="date" name="dob">
    <button type="submit">Submit</button>
</form>

</body>
</html>