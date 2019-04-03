<?php
  $page = "success";
  $pageName = "Thank You!";
  $root = "../../";
  require("{$root}include/header/header.php");
?>

  <h2>Thank you for submitting the <?php echo "Transition to Campus"; ?> form!</h2>

  <div class="thankYou">
    <h3>Thank You, <?php echo $firstName; ?>!</h3>
    <p>Your information has been accepted!</p>
    <p>A receipt of the transition requirements has been sent to: <u><i><?php echo $email; ?></i></u></p>
    <p>Please let us know if you have any questions!</p>
    <p id="thankYouSignature"><a href="#"><b>PaCE Contract Team</b></a></p>
  </div>
  <!-- thank you, <?php echo $firstName; ?>! -->


<?php require("{$root}include/footer.php"); ?>
