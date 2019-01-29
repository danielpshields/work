<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "pace";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()) { die("connection failed" . mysqli_connect_error() . mysqli_connect_errno()); }
  $email = "kiki@deliveries.com";
?>
