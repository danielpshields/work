<?php

  $timeStamp    = date('n/j/y|g:i a'); // 2/27/2019|11:31 am
  //this is designed to be exploded
  $scriptName = "";

  if (isset($_SERVER['HTTP_UFSHIB_UFID'])) {
    $date_auto    = date("Y-m-d H:i:s");
    $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
    $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
    $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
    $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
    $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  } else { ?>
    <!-- <p id="localHost">non UF host</p> -->
    <?php
    // $email        = "marthagator@ufl.edu";

    $date_auto    = "2018-12-20 09:27:49";
    $UFID         = "40811353";
    $firstName    = "Alex";
    $nameGiven    = "Alex Catalano";
    $nameBusiness = "Catalano,Alex";
    $to    = "";
    // $to    = "alex@alexcatalano.com";
    // $to    = "acatalano2@ufl.edu";
    $email = $to;

    // $date_auto    = "2018-12-20 09:27:49";
    // $UFID         = "59023365";
    // $firstName    = "Nicole";
    // $nameGiven    = "Nicole Raymond";
    // $nameBusiness = "Raymond,Nicole";
    // $to    = "nraymond@advising.ufl.edu";
    // $email = $to;

  } ?>
