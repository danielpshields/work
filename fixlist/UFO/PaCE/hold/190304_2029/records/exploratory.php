<?php
require("../include/db.php");
$root = "../";
$page = "exploratory";
$pageName = "Records: Exploratory";
require("{$root}include/header/header.php");


  if (isset($_POST['exploratorySubmit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    require("{$root}include/db.php");
    $query = "INSERT INTO exploratory (name, email) VALUES ('{$name}', '{$email}')";
    $spitResults = mysqli_query($connection, $query);
    if (!$spitResults) { die ("query failed"); }
    include("{$root}email/ticket/exploratory/exploratory_email.php");
  }

  $query = "SELECT * FROM exploratory";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }

  include("{$root}include/header/admin_nav.php");

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
            <td><?php echo $row['datime']; ?></td>
          </tr>
        <?php } ?>
      </table>
      <div id="exploratoryShell" class="ticketShell">
        <h4>Exploratory Students</h4>
        <form class="" action="<?php echo $root; ?>records/exploratory.php" method="post">
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
