<?php
  echo $date_auto    = date("Y-m-d H:i:s");
  echo $UFID         = $_SERVER['HTTP_UFSHIB_UFID'] . "<br>";
  echo $email        = $_SERVER['HTTP_UFSHIB_eppn'] . "<br>";
  echo $shibmail     = $_SERVER['HTTP_UFSHIB_MAIL'] . "<br>";
  echo $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'] . "<br>";
  echo $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'] . "<br>";
  echo $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'] . "<br>";
  // echo $UFID . "<br>";
  // echo $email . "<br>";
  // echo $firstName . "<br>";
  // echo $nameGiven . "<br>";
  // echo $nameBusiness . "<br>";
?>
