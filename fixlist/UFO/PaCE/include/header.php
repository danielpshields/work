<?php
  // $date_auto    = date("Y-m-d H:i:s");
  // $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  // $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  // $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
  // $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
  // $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  include("glid_local.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaCE Transition Form</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/<?php echo $page; ?>.css">
    <link rel="stylesheet" href="css/resize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <h1><a href="index.php">PaCE Transition Form</a></h1>
        <a href="signup.php">
          <img src="image/uf_logo.svg" alt="">
        </a>
      </div>
    </header>
