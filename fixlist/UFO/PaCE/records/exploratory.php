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


    <h3>Sping 2019</h3>
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

    <p class="marginTop"><a href="../dashboard.php">Back to dashboard</a></p>

    <div class="inputShell">
      <div class="ticketShell">
        <h4>Exploratory Students</h4>
        <form class="" action="dashboard.php" method="post">
          <input type="text" name="name" value="" placeholder="student's name">
          <label for="name">Add student's name</label>
          <input type="email" name="email" value="" placeholder="student's email address">
          <label for="email">Add student's gatorlink email</label>
          <input type="hidden" name="formType" value="exploratory">
          <input tabindex="1" class="submitButton" type="submit" name="exploratoryEmail" value="send email">
        </form>
      </div><!-- ticket shell -->
    </div><!-- input shell -->


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
