<?php
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    echo "<p>Your gender is: " . $gender . "</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>task4-c</title>
</head>
<body>

<form action="" method="post">
    <label> Gender :</label>
<input type="radio" name="gender" value="Male"
        <?php if ($gender == "Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
        <?php if ($gender == "Female") echo "checked"; ?>> Female

    <input type="radio" name="gender" value="Other"
        <?php if ($gender == "Other") echo "checked"; ?>> Other

    <br><br>
    <input type="submit" value="Submit">
    </form>

</body>
</html>