<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  require("{$root}include/header.php");
?>
  <h2>Records: Exploratory</h2>
<?php
  $query = "SELECT * FROM exploratory";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>



    <ul>
      <?php
      while($row = mysqli_fetch_assoc($spitResults)) { ?>
        <li><?php echo $row['email']; ?></li>
      <?php } ?>
    </ul>
    <p><a href=".php">insertion form</a></p>
  </body>
</html>
<?php

  mysqli_close($connection);
?>
