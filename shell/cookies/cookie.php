<?php
  $alex = "40811353";
  $cookie = $_COOKIE['c_user'];

  if ($cookie !== $alex) {
    $equal = "";
    header("Location: reject.php");
    exit;
  } else {
    $equal = "equal and proceed!";
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cookie.php</title>
  </head>
  <body>
    <h1>$_COOKIE</h1>
    <pre>
      <?php print_r($_COOKIE); ?>
    </pre>

    <!-- <img src="color_palette.jpg" alt=""> -->
  </body>
</html>
