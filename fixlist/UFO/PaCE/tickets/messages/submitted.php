<?php
  $page = "submitted";
  $root = "../../";
  require("{$root}include/header.php");
  $formType = $_POST['formType'];
  $advisor = "Nicole";
  $student = "Alex Catalano";
?>

  <h2>You've created the <b><?php echo $formType; ?></b> form, <?php echo $firstName; ?>!</h2>

  <p class="thankYou">The <?php echo $formType; ?> form has been emailed to the student:<br><br><?php echo $student; ?><br><?php echo $email; ?><br><br></p>

  <p>A record of the transaction can be found on the <a href="<?php echo $root; ?>records.php">records page</a></p>

<?php require("{$root}include/footer.php"); ?>
