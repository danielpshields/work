<?php
require("db.php");

  $query = "SELECT * FROM users";
  $getIt = mysqli_query($connection, $query);

  if (false) {
    $name   = "cookie";
    $value  = "user";
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
    <ul>
      <?php while ($row = mysqli_fetch_assoc($getIt)) { ?>
        <li><?php echo $row['user'] . " | " . $row['password']; ?></li>
      <?php } ?>
    </ul>

  </body>
</html>
