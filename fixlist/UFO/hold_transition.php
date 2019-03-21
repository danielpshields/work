<?php
  $root = "../";
  $page = "ticket";
  $pageName = "Transition Ticket";
  require("{$root}include/header/header.php");
  require("{$root}include/db.php");
  if (isset($_POST['submit'])) {
    $query  = "INSERT INTO pace_transition (studentID, name, email) VALUES ('alex','alex', 'acatalano2@ufl.edu')";
    $spitResults = mysqli_query($connection, $query);
    if (!$spitResults) { die ("query failed"); }
  }
  include("{$root}include/header/admin_nav.php");
?>
  <form action="transition.php" method="post">
    <input tabindex="1" class="submitButton" type="submit" name="submit" value="submit">
  </form>


<?php
  require("{$root}include/footer.php");

  if (isset($_POST['submit'])) {
    mysqli_close($connection);
  }

?>
