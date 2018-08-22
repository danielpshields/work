<?php
 	$thisPage = "0";
  $submitted = 0;
	require_once("include/header.php");
?>

<form action="thankyou.php" method="post">


  <?php //require("include/submit.php"); ?>

  <div class="blue hightlightSlug">
    <h2><span class="orangeNumber">S</span> Submit</h2>
    <p>This completes the acknowledgement form. Select the button below to submit and move on to the next step in the program change request.</p>
    <input class="submit" id="submit" type="submit" name="submit" value="submit">
  </div>

</form>
