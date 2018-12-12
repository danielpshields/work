<?php
  $page = "thankyou";
  $root = "../../";
  require("{$root}include/header.php");
  $formType = "blank";
?>

  <h2>Thank you for submitting the <b><u><?php echo $formType; ?></b></u> form!</h2>

  <p id="thankYou">Your information has been accepted, <?php echo $firstName; ?>!</p>

<?php require("{$root}include/footer.php"); ?>
