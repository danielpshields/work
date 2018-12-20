<?php

  $date_auto    = date("Y-m-d H:i:s");
  $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
  $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
  $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];

?>
