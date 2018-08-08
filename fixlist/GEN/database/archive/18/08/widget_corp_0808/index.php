<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {die("error" . mysqli_connect_error() . " no: " . mysqli_connect_errno());}

  $query = "SELECT *";
  $query .= " FROM subjects";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("query failure");
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
      <ul>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <li><a href=""><?php echo $row["menu_name"]; ?></a></li>
        <?php } ?>
      </ul>
      <div class="clear"></div>
    </header>


  <?php mysqli_free_result($result); ?>
  </body>
</html>

<?php mysqli_close($connection); ?>
