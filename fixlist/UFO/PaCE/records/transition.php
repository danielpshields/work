<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  require("{$root}include/header.php");
?>
  <h2>Records: <?php echo "Transition"; ?></h2>
<?php
  $query = "SELECT * FROM transition";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>


    <h3>Sping 2019</h3>
    <table>
      <thead>
        <tr>
          <th>email</th>
          <th>stipulation</th>
          <th>course</th>
          <th>course2</th>
          <th>course3</th>
          <th>course4</th>
          <th>course5</th>
          <th>course6</th>
          <th>course7</th>
          <th>grade</th>
          <th>grade2</th>
          <th>grade3</th>
          <th>grade4</th>
          <th>grade5</th>
          <th>grade6</th>
          <th>grade7</th>
          <th>gpaMajor</th>
          <th>gpaUF</th>
        </tr>
      </thead>
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
