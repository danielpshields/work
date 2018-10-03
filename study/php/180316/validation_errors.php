<?php $title = "validation tests"; include("../include/header.php"); ?>

<?php
  require_once("validation_functions.php");
  $errors = array();
  $username = trim("ac");

  if (!hasPresence($username)) {
    $errors['username'] = "username must be set";
  }

  if (hasMaxLength($username, 2)) {
    $errors['maxLength'] = "username not long enough";
  }

?>


<?php echo errorsFound($errors); ?>
<?php include("../include/footer.php"); ?>
