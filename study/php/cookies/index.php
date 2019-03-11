<!-- Cookie Scope: Set at the directory root ~/ and below -->
<!-- unsetting a cookie: setcookie($name, null, time() - 4600); -->
<?php
require("db.php");

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cookie   = $_POST['cookie'];
    $query = "INSERT INTO login (username, password, cookie) VALUES ('{$username}', '{$password}', '{$cookie}')";
    $write = mysqli_query($connection, $query);

    $name   = "key";
    $value  = "user" . $username;
    $expire = time() + (60*60*24*7);
    setcookie($name, $value, $expire);

    header("Location: processor.php");
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
    <h1>login</h1>

    <form action="index.php" method="post">
      <input type="text" name="username" value="" placeholder="username"><br>
      <input type="text" name="password" value="" placeholder="password"><br>
      <input type="text" name="cookie" value="" placeholder="cookie"><br>
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
