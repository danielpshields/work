<?php
  $page = "success";
  $pageName = "Thank You!";
  $root = "../../";
  require("{$root}include/header/header.php");
  include("{$root}include/admin_navCreds.php");
?>

  <?php if ($canStay) {
    //include("{$root}include/header/admin_nav.php");
  } ?>

  <div class="thankYou">
    <h3>Thank You, <?php echo $firstName; ?>!</h3>
    <p>Your information has been accepted!</p>
    <p>A receipt of the transition requirements has been sent to: <u><i><?php echo $email; ?></i></u></p>
    <p>Please let us know if you have any questions!</p>
    <p id="thankYouSignature"><a href="mailto:claspace@advising.ufl.edu"><b>PaCE Contract Team</b></a></p>
  </div>
  <!-- thank you, <?php echo $firstName; ?>! -->


<?php require("{$root}include/footer.php"); ?>
