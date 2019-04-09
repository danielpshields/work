<?php

  $timeStamp    = date('n/j/y|g:i a'); // 2/27/2019|11:31 am
  $breakCreated = explode("|", $timeStamp);
  $monthDay     = $breakCreated[0];
  $hourTime     = $breakCreated[1];

  $currentMonthDay = $breakCreated[0];
  $currentHourTime = $breakCreated[1];

  //this is designed to be exploded | what?
  $scriptName = "";

  if (isset($_SERVER['HTTP_UFSHIB_UFID'])) {
    $date_auto        = date("Y-m-d H:i:s");
    $UFID             = $_SERVER['HTTP_UFSHIB_UFID'];
    $HTTP_UFSHIB_MAIL = $_SERVER['HTTP_UFSHIB_MAIL'];
    $HTTP_UFSHIB_EPPN = $_SERVER['HTTP_UFSHIB_EPPN'];

    $shib = $_SERVER['HTTP_UFSHIB_MAIL'];
    $eppn = $_SERVER['HTTP_UFSHIB_EPPN'];

    $emails = array(
      "$HTTP_UFSHIB_EPPN" => "$HTTP_UFSHIB_MAIL"
    );

    // foreach ($emails as $eppn => $shib) {
    //   if ($email == $eppn || $email == $shib) {
    //     $email = $HTTP_UFSHIB_EPPN;
    //   }
    // }

    //check the database to see if either email exists
    $setEmailDB = "SELECT email FROM pace_transition";
    $checkEmail = mysqli_query($connection, $setEmailDB);
    while ($row = mysqli_fetch_assoc($checkEmail)) {

      $db_mail = $row['email'];

      if ($db_mail === $eppn) {
        $email = $eppn;
        $whoIS = "<b>whoIS</b> eppn: " . $email;
        break;
      } else if ($db_mail === $shib) {
        $email = $shib;
        $whoIS = "<b>whoIS</b> shib: " . $email;
        break;
      } else {
        include("{$root}include/admin_navCreds.php");
        if (!$canStay) {
          header("Location: https://www.advising.ufl.edu/uf-online/");
          exit;
        }
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
    // $UFID         = "40811353";
    // $firstName    = "Alex";
    // $nameGiven    = "Alex Catalano";
    // $nameBusiness = "Catalano,Alex";
    // $to           = "";
    // $to           = "alex@alexcatalano.com";
    // $to           = "acatalano@advising.ufl.ed";
    // $to           = "dshields@ufl.edu";
    // $to           = "acatalano2@ufl.edu";
    // $to           = "alexpicatalano@gmail.com";
    //$email = $to;

    $date_auto    = "2018-12-20 09:27:49";
    $UFID         = "59023365";
    $firstName    = "Nicole";
    $nameGiven    = "Nicole Raymond";
    $nameBusiness = "Raymond,Nicole";
    $to    = "nraymond@advising.ufl.edu";
    $email = $to;


  } ?>
