<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  require("{$root}include/header.php");
  $query = "SELECT * FROM transition";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  require("{$root}include/recordsHeader.php");

?>

    <h2>Records: <?php echo "Transition"; ?></h2>

    <!-- <div style="width: 320px; margin: auto; margin-top: 32px; padding-top: 16px; border: 1px solid red;"> -->
      <!-- <p>This page should be the one that allows the form to be sent</p> -->
      <!-- <p>ie: submit form to "acatalano2@ufl.edu"?</p> -->
      <!-- <p>make a dropdown here</p> -->
      <!-- <input class="submitButton" type="submit" name="submit" value="submit"> -->
    <!-- </div> -->

    <h3>Sping 2019</h3>
    <table>
      <thead>
        <tr>
          <th>student ID</th>
          <th>email</th>
          <th>stipulation</th>
          <th>course</th>
          <th>grade</th>
          <th>course2</th>
          <th>grade2</th>
          <th>course3</th>
          <th>grade3</th>
          <th>course4</th>
          <th>grade4</th>
          <th>gpaMajor</th>
          <th>gpaUF</th>
          <th>paceMajor</th>
          <th>semester</th>
          <th>phone</th>
        </tr>
      </thead>
      <?php
      while($row = mysqli_fetch_assoc($spitResults)) { ?>
        <tr>
          <?php
            $studentID = $row['studentID'];
            if ($studentID) {
              echo "<td class=\"green\">";
              echo $studentID;
              echo "</td>";
            } else {
              echo "<td class=\"red\">";
              echo "&ndash;";
              echo "</td>";
            }
          ?>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['stipulation']; ?></td>
          <td><?php echo $row['course']; ?></td>
          <td><?php echo $row['grade']; ?></td>
          <td><?php echo $row['course2']; ?></td>
          <td><?php echo $row['grade2']; ?></td>
          <td><?php echo $row['course3']; ?></td>
          <td><?php echo $row['grade3']; ?></td>
          <td><?php echo $row['course4']; ?></td>
          <td><?php echo $row['grade4']; ?></td>
          <td><?php echo $row['gpaMajor']; ?></td>
          <td><?php echo $row['gpaUF']; ?></td>
          <td><?php echo $row['paceMajor']; ?></td>
          <td><?php echo $row['semester']; ?></td>
          <td><?php echo $row['phone']; ?></td>
        </tr>
      <?php } ?>
    </table>

    <p style="margin-top: 2rem;"><a href="../tickets/transition/"><b>Sample Ticket</b></a></p>

    <!-- <p><?php echo $foo; ?></p> -->

<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
