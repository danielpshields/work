<?php
  //ensure the page was reached via the previous page
  require("include/functions.php");
  if (!isset($_POST['formFour'])) {
    redirectTo("index.php");
  }
 	$thisPage = "0";
  $submitted = 0;
	require_once("include/header.php");
?>

<form action="thankyou.php" method="post">

  <div class="blue hightlightSlug">
    <h2><span class="orangeNumber">S</span> Submit</h2>

    <p>This completes the acknowledgement form. Select the button below to submit and move on to the next step in the program change request.</p>

    <input class="mainSelect oneBox" id="finalSubmit" type="submit" name="submit" value="submit">

  </div>

</form>
