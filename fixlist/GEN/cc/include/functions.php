<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";

 $EPPN  = $_SERVER['HTTP_UFSHIB_EPPN'];
 $MAIL  = $_SERVER['HTTP_UFSHIB_MAIL'];

 $committee = array(
    "danshields@advising.ufl.edu",
    "dsking@advising.ufl.edu",
    "shannon.kelly@advising.ufl.edu",
    "acatalano2@ufl.edu",
    "brittanygrubbs@advising.ufl.edu"
 );

  foreach ($committee as $key) {
    if ($key === $EPPN || $key === $MAIL) {
      $canStay = true;
      break;
    } else {
      $canStay = false;
    }
  }

  if (!$canStay) {
    header("Location: https://www.advising.ufl.edu/");
    exit;
  }


?>
