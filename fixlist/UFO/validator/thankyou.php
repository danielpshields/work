<?php

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpassword = "";
  $dbname = "ufovalidator";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

  //check if the database is able to connect
  if (mysqli_connect_error()) {
    die("Database connection failed" . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
  }

  //ensure the page was reached via the previous page
  require("include/functions.php");

  if (!isset($_POST['submit'])) {
    redirectTo("index.php");
  }

 	$thisPage = "0";
  $submitted = 1;
	require_once("include/header.php");


  //temporary hard coded values to submit to database:
  $glid = "4081-1353";
  $name = "acatalano2";
  $now = date("ymdGis");
  
  //insert the variables into the database
  $query = "INSERT INTO submissions (glid, Name, now) VALUES ('{$glid}', '{$name}', '{$now}')";
  $result = mysqli_query($connection, $query);
?>


    <section>

      <p id="greenBorder"><i>Thank you for submitting the form!</i></p>

      <h2><span class="orangeNumber">C</span> Contact: <br><a href="https://www.advising.ufl.edu/uf-online/contact/" target="_blank">CLAS UF Online Advising Staff</a></h2>

      <p><a href="index.php">home</a></p>
    </section>

</body>
</html>
