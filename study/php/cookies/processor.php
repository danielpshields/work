<?php
  require("db.php");
  if (!isset($_COOKIE['key'])) {
    if ($username && $password) {
      echo "IM CONFUSED ABOUT THIS";
    }
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
    <h1>Processor</h1>

    <pre>
      <?php print_r($_COOKIE); ?>
    </pre>
    <p><?php echo $_COOKIE['key']; ?></p>

  </body>
</html>
