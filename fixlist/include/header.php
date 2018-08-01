<?php
  require_once("{$path}include/functions.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
    <title>Work | <?php echo ucfirst($title); ?></title>
    <link rel="icon" type="image/png" href="<?php echo $path; ?>ln/image/picon.png">
    <link rel="stylesheet" href="<?php echo $path; ?>css/master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
    <script src="scripts/dropdown.js"></script>
  </head>
  <body>
    <div class="container">

      <header>

        <div class="holdShortHeader">
          <div id="navShortHeader">
            <h1><a href="<?php echo $shortpath . $ln; ?>index.php"><?php echo $h1 ; ?></a></h1>
            <ul>
              <li><a href="<?php echo $path; ?>tree.html">Tree</a></li>
            </ul>
          </div>
          <ul id="eert">
            <li><a href="#">eerT</a></li>
          </ul>
          <div class="clear"></div>
        </div><!-- hold left header -->

        <div class="holdLinksHeader">

          <ul id="navLindex">
            <li><a href="<?php echo $path; ?>ln/meeting/index.php">Meeting</a></li>
            <li>|</li>
            <li><a href="<?php echo $path; ?>ln/report/index.php">Report</a></li>
            <li>|</li>
            <li><a href="<?php echo $path; ?>ln/index.php">Lindex</a></li>
            <li>|</li>
            <li><a href="<?php echo $path; ?>index.php">index</a></li>
            <li>|</li>
            <li><a href="../<?php echo $path; ?>home/fixlist/transactions.php">Transactions</a></li>
          </ul>

          <ul id="navAdminLinks">
            <li><a href="http://www.clas.ufl.edu/prehealthpostbac/">PHPB</a></li>
            <li>|</li>
            <li><a href="https://www.advising.ufl.edu/uf-online/">UFO</a></li>
            <li>|</li>
            <li><a href="https://www.advising.ufl.edu/">Advising</a></li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </header>
