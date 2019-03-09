<?php
  require("db.php");
  $readDB = "SELECT * FROM resubmission";
  $read = mysqli_query($connection, $readDB);
  if (!$read) { die ("query failed"); }
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
      <input type="text" name="item" value="" required>
      <input type="submit" name="submit" value="submit">
    </form>


      <ul>
        <?php
        while ($row = mysqli_fetch_assoc($read)) {
        ?>
        <form class="" action="catch.php" method="post">
          <li><?php echo $row['id'] . ". " .$row['item']; ?></li>
          <input type="submit" name="delete" value="<?php echo $rid = $row['id']; ?>">
        </form>
        <?php } ?>
      </ul>



  </body>
</html>
