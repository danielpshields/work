<?php
  $page = "thankyou";
  $root = "../../";
  require("{$root}include/header.php");
?>

  <h2>Thank you for submitting the <?php echo "Transition to Campus"; ?> form!</h2>

  <p id="thankYou">Your information has been accepted, <?php echo $firstName; ?>!</p>

<?php require("{$root}include/footer.php"); ?>
