<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LN &#124; <?php echo $date; ?></title>
    <link rel="icon" type="image/png" href="../../image/picon.png">
    <link rel="stylesheet" href="<?php echo $root; ?>css/master.css">
  </head>
  <body>
    <div class="container">

      <header>
        <p>[ln]</p>
        <h2 id="date"><?php echo $date; ?></h2>
        <p><?php

        $bank = array();
        while ($row = mysqli_fetch_assoc($read)) {
            $credit = $row['credit'];
            $bank[] = $credit;
        }

        $total = array_sum($bank);
        echo "$" . $total;

       ?></p>


       </header>
