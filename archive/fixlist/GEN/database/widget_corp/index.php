<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "supratt";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {die("connection died" . mysqli_connect_error() . mysqli_connect_errno());}
$query = "SELECT * FROM subjects WHERE visible = 1";
$result = mysqli_query($connection, $query);
if (!$result) {die("query failed");}
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
      <ul>
        <?php while ($subject = mysqli_fetch_assoc($result)) { ?>
        <li><?php echo $subject["menu_name"] . "(" . $subject["id"] . ")"; ?> </li>
        <?php } ?>
      </ul>
      <div class="clear"></div>
    </header>
    <ul>
      <li><a href="index.php">index.php</a></li>
      <li><a href="update.php">update.php</a></li>
      <li><a href="insert.php">insert.php</a></li>
      <li><a href="delete.php">delete.php</a></li>
    </ul>
  </body>
</html>
<?php

mysqli_free_result($result);
mysqli_close($connection);

?>
