<!-- <?php
  // $dbhost = "localhost";
  // $dbuser = "root";
  // $dbpass = "";
  // $dbname = "pace";
  // $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // if(mysqli_connect_errno()) { die("connection failed" . mysqli_connect_error() . mysqli_connect_errno()); }
?> -->

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "PodWVF06s4cfU156p1Bb";
$dbname = "test";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()) { die("connection failed " . mysqli_connect_error() . mysqli_connect_errno()); }
?>
