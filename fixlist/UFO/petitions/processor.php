<?php
  $root = "../";
  $path = "";

  require("{$root}include/db.php");
  require("{$root}include/functions.php");


  if (isset($_POST['signature'])) {
    $get_student_email = $_POST['studentEmail'];
    $signatureUpdate = "UPDATE ufo_petitions SET student_signature = 1 WHERE student_email = '{$get_student_email}'";
    $sendSignature   = mysqli_query($connection, $signatureUpdate);
    if (!$sendSignature) {die("could not send signature");}
    redirectTo("{$path}petition.php?studentEmail={$get_student_email}");
  }


?>
