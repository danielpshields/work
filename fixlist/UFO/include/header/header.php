<?php
include("{$root}include/env.php");
include("{$root}include/functions.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaCE Transition | <?php echo ucfirst($pageName); ?></title>
    <link rel="shortcut icon" type="image/x-ico" href="<?php echo $root; ?>image/favicon.ico"/>
    <link rel="stylesheet" href="<?php echo $root; ?>css/master.css">
    <link rel="stylesheet" href="<?php echo $root; ?>css/<?php echo $page; ?>.css">
    <link rel="stylesheet" href="<?php echo $root; ?>css/<?php echo $style; ?>.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="secondaryNav">
      <div class="container">
        <h2><?php echo $pageName; ?></h2>
      <!--  <span><a id="sampleTicket" href="<?php //echo $root; ?>ticket/transition/">Sample Ticket</a></span>-->
      </div><!-- container -->
    </div>
    <header>
      <div class="container">
        <a href="<?php echo $root; ?>records/transition.php">
          <img src="<?php echo $root; ?>image/uf_logo.svg" alt="">
        </a>
        <?php if ($page != "login") { ?>
          <h1>Welcome, <?php echo $firstName; ?></h1>
        <?php } ?>

      </div>
    </header>

    <?php
  //   $test = $_COOKIE['test'];
//     echo $test;
    ?>
