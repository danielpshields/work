<?php

  if (isset($_SERVER['HTTP_UFSHIB_UFID'])) {

    echo $UFID             = $_SERVER['HTTP_UFSHIB_UFID'];
    echo "<br>";
    echo $HTTP_UFSHIB_MAIL = $_SERVER['HTTP_UFSHIB_MAIL'];
    echo "<br>";
    echo $HTTP_UFSHIB_EPPN = $_SERVER['HTTP_UFSHIB_EPPN'];
    echo "<br>";
    echo $firstName        = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
    echo "<br>";
    echo $nameGiven        = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
    echo "<br>";
    echo $nameBusiness     = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
    echo "<br>";

  } else {
    echo "you're on localhost";
  }
?>
