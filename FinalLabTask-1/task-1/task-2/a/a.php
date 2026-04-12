<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "<p>Your email is: " . $email . "</p>";
}else{
 ?>
 <!doctype html>
<html>
  <head>
    <title>task2-a</title>
  </head>
  <body>
    <form action="" method="post">
      Email: <input type="email" name="email"
    value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
    <input type="submit">
    </form>
  </body>
</html>
<?php
}