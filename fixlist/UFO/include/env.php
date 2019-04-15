<?php

  if (isset($_SERVER['HTTP_UFSHIB_UFID'])) {

    $employee_ID          = $_SERVER['HTTP_UFSHIB_UFID'];
    $MAIL                 = $_SERVER['HTTP_UFSHIB_MAIL'];
    $EPPN                 = $_SERVER['HTTP_UFSHIB_EPPN'];
    $name_first           = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
    $name_firstLast       = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
    $name_lastFirstMiddle = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];


    $varsList = array(
      $employee_ID,
      $MAIL,
      $EPPN,
      $name_first,
      $name_firstLast,
      $name_lastFirstMiddle
    );



  } else {
    echo "you're on localhost";
  }
?>
