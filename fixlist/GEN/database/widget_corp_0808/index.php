<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "supratt";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  die("error");
} else {
  echo "it works";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Widget Corp</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <h1>Widget Corp</h1>
    </header>

  </body>
</html>

<?php mysqli_close($connection); ?>
