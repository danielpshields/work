<?php
  require("../include/db.php");
  $root = "../";
  $page = "exploratory";
  $pageName = "Records: Exploratory";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $query = "SELECT * FROM pace_exploratory";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>

  <div id="exploratory_container" class="container">
      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($spitResults)) { ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
          </tr>
        <?php } ?>
      </table>
      <div id="exploratoryShell" class="ticketShell">
        <h4>Exploratory Students</h4>
        <form class="" action="<?php echo $root; ?>processor.php" method="post">
          <input  type="text" name="name" value="" placeholder="student's first name" required>
          <label for="name">Add student's first name</label>
          <input type="email" name="email" value="" placeholder="student's email address" required>
          <label for="email">Add student's gatorlink email</label>
          <input tabindex="1" class="submitButton" type="submit" name="exploratorySubmit" value="send email">
        </form>
      </div><!-- exploratory ticket shell -->
    </div><!-- container -->


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
