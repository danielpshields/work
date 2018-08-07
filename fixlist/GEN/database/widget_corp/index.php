<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "supratt";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if (mysqli_connect_errno()) {
    die("Connection Failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
  }
  $query = "SELECT *";
  $query .= " FROM subjects";
  $query .= " WHERE visible = 1";
  $query .= " ORDER BY position ASC";
  $result = mysqli_query($connection, $query);
  if (!$result) { die("there was an error querying the database."); }
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
    <?php
    while($row = mysqli_fetch_row($result)) {
      var_dump($row);
      echo "<hr>";
    }
    mysqli_free_result($result);
    ?>
  </body>
</html>
<?php mysqli_close($connection); ?>
