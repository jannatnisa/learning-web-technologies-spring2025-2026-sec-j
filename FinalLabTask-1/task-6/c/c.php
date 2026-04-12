<?php
if (isset($_POST['blood_group'])) {
$blood = $_POST['blood'];
echo "Selected Blood Group: " . $blood;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>task6-c</title>
</head>
<body>

<form action="" method="post">
    Blood Group:
    <select name="blood">
        <option value="A+" <?php if ($blood == "A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if ($blood == "A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if ($blood == "B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if ($blood == "B-") echo "selected"; ?>>B-</option>
        <option value="O+" <?php if ($blood == "O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if ($blood == "O-") echo "selected"; ?>>O-</option>
        <option value="AB+" <?php if ($blood == "AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if ($blood == "AB-") echo "selected"; ?>>AB-</option>

    </select>

    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>