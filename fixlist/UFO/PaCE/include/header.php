<?php
  include("env.php");
  $user = strstr($email, "@", true);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaCE Transition Form | <?php echo ucfirst($page); ?></title>
    <link rel="stylesheet" href="<?php echo $root; ?>css/master.css">
    <link rel="stylesheet" href="<?php echo $root; ?>css/<?php echo $page; ?>.css">
    <link rel="stylesheet" href="<?php echo $root; ?>css/resize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Welcome, <a href="<?php echo $root; ?>dashboard.php"><?php echo ucfirst($user); ?></a></h1>
        <a href="<?php echo $root; ?>index.php">
          <img src="<?php echo $root; ?>image/uf_logo.svg" alt="">
        </a>
      </div>
    </header>
