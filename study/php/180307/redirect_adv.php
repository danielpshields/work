<?php
  function redirect_to($newLocation) {
    header("Location: " . $newLocation);
    exit;
  }

  $loggedIn = $_GET['member'];

  if ($loggedIn == "1") {
    redirect_to("shell.php");
  } else if ($loggedIn == "0") {
    redirect_to("index.php");
  } else {
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Advanced Redirect</title>
  </head>
  <body>
    <h1>Advanced Redirect</h1>
    <?php echo $loggedIn; ?>
  </body>
</html>
<?php } ?>
