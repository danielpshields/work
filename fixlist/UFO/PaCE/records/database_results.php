<?php
  require("include/db.php");
?>

<?php
  $query = "SELECT * FROM exploratory";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Databases</title>
  </head>
  <body>
    <h1>Database:</h1>
    <ul>
      <?php
      while($row = mysqli_fetch_assoc($spitResults)) { ?>
        <li><?php echo $row['email']; ?></li>
      <?php } ?>
    </ul>
    <p><a href="form.php">insertion form</a></p>
  </body>
</html>
<?php

  mysqli_close($connection);
?>
