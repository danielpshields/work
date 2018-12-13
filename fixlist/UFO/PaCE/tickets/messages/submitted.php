<?php
  $page = "submitted";
  $ticketPath = "../";
  $root = "../../";
  require("{$root}include/header.php");
  $formType = $_POST['formType'];
  $advisor = "Nicole";
  $student = "Alex Catalano";
?>

  <h2>You've created the <b><?php echo $formType; ?></b> form, <?php echo $firstName; ?>!</h2>

  <div class="thankYou">
    <p>The <?php echo $formType; ?> form has been emailed to the student:</p>
    <p><?php echo $student; ?><br><?php echo $email; ?></p>
    <p id="ticketLinkSlug">
      See the form here:<br><a href="<?php echo $ticketPath . $formType; ?>"><?php echo $student . " " . $formType; ?></a></p>
  </div>

  <p>A record of the transaction can be found on the <a href="<?php echo $root; ?>records.php">records page</a></p>

<?php require("{$root}include/footer.php"); ?>
