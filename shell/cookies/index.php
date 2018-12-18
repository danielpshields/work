<?php
  $advisor = 40811353;
  $name = "c_user";
  $value = $advisor;
  $expire = time() + (60*60*24*7);
  setcookie($name, $value, $expire);


  $password = "alex";
  $pswd = "secret";
  setcookie($password, $pswd, $expire);

  // unsetting a cookie
  // setcookie($name, null, time() - 4600);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>
    <h1>cookies.php | <a href="cookie.php">$advisor</a> = 40811353;</p>
      <?php echo 60 * 60 * 24; ?>

      <?php

        $test = isset($_COOKIE['c_user']) ? $_COOKIE['c_user'] : "test failed";

      ?>
      <p><?php echo $test; ?></p>

  </body>
</html>
