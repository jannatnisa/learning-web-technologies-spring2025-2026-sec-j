<?php
if (isset($_POST['blood_group'])) {
$blood = $_POST['blood'];
echo "Selected Blood Group: " . $blood;
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>task6-a</title>
</head>
<body>

<form action="handler.php" method="post">
    Blood Group:
    <select name="blood">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>

    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>