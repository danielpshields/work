<?php
require("db.php");
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "INSERT INTO users (user, password) VALUES ('{$username}', '{$password}')";
  $write = mysqli_query($connection, $query);
  if (!$write) {die("query failed");}
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="create.php" method="post">
      <input type="text" name="username" value=""><br>
      <input type="text" name="password" value=""><br>
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
