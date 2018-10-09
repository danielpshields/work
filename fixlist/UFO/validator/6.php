<?php
    // GLID user information


    //allows no file to be uploaded and the form to continue
    $yourDocument = "";

    //ensure the page was reached via the previous page
    //pulls in redirect
    require("include/functions.php");
    // if (!isset($_POST['formFive'])) {
    //   redirectTo("index.php");
    // }
    //
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


   	$thisPage = "6";
    $submitted = 0;
    $page = "submit";
  	require_once("include/header.php");
    $majorSelected = $_POST['majorSelected'];
?>

  <form action="7.php" method="post">
    <h2>Submit</h2>
    <p>This completes the acknowledgement form. Select the button below to submit and move on to the next step in the program change request.</p>

    <ul>
      <li>You selected:<br><b><?php echo $majorSelected; ?></b> as your intended UF Online major.</li>

      <?php
          foreach ($_FILES as $file => $secondArray) {
            foreach ($secondArray as $key => $value) {
              if ($key === "name" && $value !== "") {
                if ($key === "name") { ?>


                <li>You submitted:<br><b><?php echo "\"" . $value . "\""; ?></b> for review</li>
          <?php }
              }
            }
          }
      ?>
    </ul>
    <input type="submit" name="submit" value="submit this information">
</form>


<?php require_once("include/footer.php"); ?>
