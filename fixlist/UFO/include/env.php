<?php

  $timeStamp    = date('n/j/y|g:i a'); // 2/27/2019|11:31 am
  $breakCreated = explode("|", $timeStamp);
  $monthDay     = $breakCreated[0];
  $hourTime     = $breakCreated[1];

  $currentMonthDay = $breakCreated[0];
  $currentHourTime = $breakCreated[1];

  //this is designed to be exploded
  $scriptName = "";

  if (isset($_SERVER['HTTP_UFSHIB_UFID'])) {
    $date_auto    = date("Y-m-d H:i:s");
    $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
    $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
    $HTTP_UFSHIB_MAIL     = $_SERVER['HTTP_UFSHIB_MAIL'];
    $HTTP_UFSHIB_EPPN     = $_SERVER['HTTP_UFSHIB_EPPN'];
    $REDIRECT_UFShib_eppn = $_SERVER['REDIRECT_UFShib_eppn'];
    $REDIRECT_UFShib_mail = $_SERVER['REDIRECT_UFShib_mail'];

    $emails = array(
      "$HTTP_UFSHIB_EPPN"     => "$HTTP_UFSHIB_MAIL",
      "$REDIRECT_UFShib_mail" => "$REDIRECT_UFShib_eppn"
    );

    // absolutely ensures $email is root EPPN @ufl.edu
    foreach ($emails as $key => $value) {
      if ($email == $key || $email == $value) {
        $email = $HTTP_UFSHIB_EPPN;
      }
    }

    $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
    $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
    $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];

  } else { ?>
    <!-- <p id="localHost">non UF host</p> -->
    <?php
    // $email        = "marthagator@ufl.edu";

    $date_auto    = "2018-12-20 09:27:49";
    $date_auto    = date("Y-m-d g:i");
    $UFID         = "40811353";
    $firstName    = "Alex";
    $nameGiven    = "Alex Catalano";
    $nameBusiness = "Catalano,Alex";
    $to           = "acatalano2@ufl.edu";
    $email        = "acatalano2@ufl.edu";
    // $to           = "";
    // $to           = "alex@alexcatalano.com";
    // $to           = "acatalano@advising.ufl.ed";
    // $to           = "dshields@ufl.edu";
    // $to           = "alexpicatalano@gmail.com";
    //$email = $to;

    // $date_auto    = "2018-12-20 09:27:49";
    // $UFID         = "59023365";
    // $firstName    = "Nicole";
    // $nameGiven    = "Nicole Raymond";
    // $nameBusiness = "Raymond,Nicole";
    // $to    = "nraymond@advising.ufl.edu";
    $email = $to;


  } ?>
