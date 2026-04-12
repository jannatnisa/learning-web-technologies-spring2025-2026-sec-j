<?php
if (isset($_POST['ssc']) || isset($_POST['hsc']) || isset($_POST['bsc']) || isset($_POST['msc'])) {
    $degrees = [];
    
    if (isset($_POST['ssc'])) {
        $degrees[] = $_POST['ssc'];
    }
    if (isset($_POST['hsc'])) {
        $degrees[] = $_POST['hsc'];
    }
    if (isset($_POST['bsc'])) {
        $degrees[] = $_POST['bsc'];
    }
    if (isset($_POST['msc'])) {
        $degrees[] = $_POST['msc'];
      }
    
    echo "<p>Your selected degrees are: " . implode(", ", $degrees) . "</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>task5-c</title>
</head>
<body>

<form action="" method="post">
    Degrees:<br>
    <input type="checkbox" name="degree[]" value="SSC"
        <?php if (in_array("SSC", $degree)) echo "checked"; ?>> SSC

    <input type="checkbox" name="degree[]" value="HSC"
        <?php if (in_array("HSC", $degree)) echo "checked"; ?>> HSC

    <input type="checkbox" name="degree[]" value="BSC"
        <?php if (in_array("BSC", $degree)) echo "checked"; ?>> BSC

    <input type="checkbox" name="degree[]" value="MSC"
        <?php if (in_array("MSC", $degree)) echo "checked"; ?>> MSC

    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>