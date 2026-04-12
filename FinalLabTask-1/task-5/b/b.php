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
    <title>task5-a</title>
</head>
<body>

<form action="handler.php" method="post">
    Degrees:<br>
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSC"> BSC
    <input type="checkbox" name="degree[]" value="MSC"> MSC

    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>