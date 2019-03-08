<?php

  require("db.php");
  $readDB = "SELECT * FROM resubmission";
  $read = mysqli_query($connection, $readDB);
  if (!$read) { die ("query failed"); }

  if (isset($_POST['delete'])) {
    $deleteItem = "DELETE FROM resubmission WHERE id = ";
    $deleteItem .= "'" . $id . "'";
    $delete = mysqli_query($connection, $deleteItem);
  }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Resubmission</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <h1>Form Resubmission</h1>

    <form action="catch.php" method="post">
      <input type="text" name="item" value="">
      <input type="submit" name="submit" value="submit">
    </form>

    <ul>
      <?php
      while ($row = mysqli_fetch_assoc($read)) { ?>
        <li><?php echo $row['item']; ?></li>
      <?php }
      ?>
    </ul>
  </body>
</html>
