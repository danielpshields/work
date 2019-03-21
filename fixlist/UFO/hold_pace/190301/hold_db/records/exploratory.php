<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  require("{$root}include/header.php");
  $query = "SELECT * FROM exploratory";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  require("{$root}include/recordsHeader.php");
?>
  <h2>Records: Exploratory</h2>
<?php
?>


    <h3>Sping 2019</h3>
    <table>
      <?php
      while($row = mysqli_fetch_assoc($spitResults)) { ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['datime']; ?></td>
        </tr>
      <?php } ?>
    </table>

    <p class="marginTop"><a href="../dashboard.php">Back to dashboard</a></p>


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
