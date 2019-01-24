<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  require("{$root}include/header.php");
?>
  <h2>Records: Exploratory</h2>
<?php
  $query = "SELECT * FROM transition";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>


    <h3>Sping 2019</h3>
    <table>
      <?php
      while($row = mysqli_fetch_assoc($spitResults)) { ?>
        <tr>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['stipulation']; ?></td>
          <td><?php echo $row['course']; ?></td>
          <td><?php echo $row['course2']; ?></td>
          <td><?php echo $row['course3']; ?></td>
          <td><?php echo $row['course4']; ?></td>
          <td><?php echo $row['course5']; ?></td>
          <td><?php echo $row['course6']; ?></td>
          <td><?php echo $row['course7']; ?></td>
          <td><?php echo $row['grade']; ?></td>
          <td><?php echo $row['grade2']; ?></td>
          <td><?php echo $row['grade3']; ?></td>
          <td><?php echo $row['grade4']; ?></td>
          <td><?php echo $row['grade5']; ?></td>
          <td><?php echo $row['grade6']; ?></td>
          <td><?php echo $row['grade7']; ?></td>
          <td><?php echo $row['gpaMajor']; ?></td>
          <td><?php echo $row['gpaUF']; ?></td>
        </tr>
        <?php $foo = $row['stipulation']; ?>
      <?php } ?>
    </table>

    <p><?php echo $foo; ?></p>


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
