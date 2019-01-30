<?php
  $page = "thankyou";
  $root = "../../";
  require("{$root}include/header.php");
  require("{$root}include/db.php");
  $query  = "UPDATE transition SET studentID = ";
  $query .= "'" . $UFID . "'";
  $query .= " WHERE email = ";
  $query .= "'" . $email . "'";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die("error connecting"); }
?>

  <h2>Thank you for submitting the Transition to Campus form!</h2>

  <p id="thankYou">Your information has been accepted, <?php echo $firstName; ?>!</p>

<?php require("{$root}include/footer.php"); ?>
