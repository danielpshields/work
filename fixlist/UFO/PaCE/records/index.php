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



    <table>
      <?php
      while($row = mysqli_fetch_assoc($spitResults)) { ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['date']; ?></td>
        </tr>
      <?php } ?>
    </table>
    
  </body>
</html>
<?php

  mysqli_close($connection);
?>
