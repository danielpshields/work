<?php

   $serverEPPN  = $_SERVER['HTTP_UFSHIB_EPPN'];
   $serverEmail = $_SERVER['HTTP_UFSHIB_MAIL'];

  $users = array(
    "nraymond@advising.ufl.edu",
    "nraymond@ufl.edu",
    "acatalano2@ufl.edu",
    "acatalano@advising.ufl.edu",
    "gkepic@advising.ufl.edu",
    "gkepic@ufl.edu",
    "danshields@advising.ufl.edu",
    "danshields@ufl.edu"
  );



    foreach ($users as $key) {
      if ($key === $serverEPPN || $key === $serverEmail) {
        echo $key . " & " . $serverEPPN . " match";
        $canStay = true;
        break;
      } else {
        $canStay = false;
      }
    }


    if ($canStay) {
      echo "<br>canStay = true";
    } else {
      echo "<br>canStay = false";
    }

?>
