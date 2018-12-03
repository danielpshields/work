<?php
  $date_auto    = date("m-d-Y");
  $UFID         = "40811353";
  $nameBusiness = "Catalano,Alex Hunter";
  $email        = "acatalano2@ufl.edu";
  $firstName    = "Alex";
  $lastName     = "Catalano";

  $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $date_auto    = date("Y-m-d H:i:s");
  $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
  $nameGivenShort    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaCE Transition Form</title>
    <link rel="stylesheet" href="css/master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <h1><a href="a.php">PaCE Transition Form</a></h1>
      <a href="c.php">
        <img src="image/uf_logo.png" alt="">
      </a>
      <div class="clear"></div>
    </header>
    <!-- <nav>
      <li><a href="a.php">a</a></li>
      <li><a href="b.php">b</a></li>
      <li><a href="c.php">c</a></li>
      <div class="clear"></div>
    </nav> -->
