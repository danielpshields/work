<?php $title = "validations"; $stylesheet = $title; include("../include/header.php"); ?>

<?php
  require_once("validation_functions.php");

  $errors = array();

  $username = trim("alandxer too great the kind");

  if (!hasPresence($username)) {
    $errors['presence'] = "username cannot be blank";
  }

  $min = 3;
  $max = 9;

  if(!tooShort($username, $min)) {
    $errors['minlen'] = "username is too short, homie :(";
  }

  if(!tooLong($username, $max)) {
    $errors['maxLen'] = "username <b>{$username}</b> too long";
  }

?>

<?php echo displayErrors($errors); ?>
<?php include("../include/footer.php"); ?>
