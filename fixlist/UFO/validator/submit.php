<?php
    // GLID user information


    //allows no file to be uploaded
    $yourDocument = "";

    //ensure the page was reached via the previous page
    //pulls in redirect
    require("include/functions.php");
    if (!isset($_POST['formFive'])) {
      redirectTo("index.php");
    }

    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbpassword = "";
    // $dbname = "ufovalidator";
    // $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    //
    // //check if the database is able to connect
    // if (mysqli_connect_error()) {
    //   die("Database connection failed" . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    // }
    //
    // //temporary hard coded values to submit to database:
    // $glid = "4081-1353";
    // $name = "acatalano2";
    // $now = date("ymd G:i");
    //
    // //insert the variables into the database
    // $query = "INSERT INTO submissions (glid, Name, now) VALUES ('{$glid}', '{$name}', '{$now}')";
    // $result = mysqli_query($connection, $query);


   	$thisPage = "0";
    $submitted = 0;
    $page = "submit";
  	require_once("include/header.php");
    $majorSelected = $_POST['majorSelected'];
?>

<form action="thankyou.php" method="post">

  <div class="blue hightlightSlug">
    <h2><span class="orangeNumber">S</span> Submit</h2>

    <p>This completes the acknowledgement form. Select the button below to submit and move on to the next step in the program change request.</p>

    <p>You selected: <b><?php echo $majorSelected; ?></b> as your intended UF Online major.</p>


    <p>If you would like to upload any supporting documentation, please do so here:</p>

    <p>Select file to upload:</p>
    <input type="file" name="file" id="fileToUpload">


    <!-- <p>You submitted:     <?php

        foreach ($_FILES as $key => $value) {
          foreach ($value as $foo => $bar) {
              if ($foo === "name") { ?>
                <?php echo $bar; ?>
        <?php }
          }
        }
        ?></p> -->
    <input class="mainSelect oneBox" id="finalSubmit" type="submit" name="submit" value="submit">

  </div>

</form>
