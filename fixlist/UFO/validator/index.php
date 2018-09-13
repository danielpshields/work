<?php
 	$thisPage = "0";
  $submitted = 0;
  $page = "index";
	require_once("include/header.php");
?>

  <p>Welcome, <?php echo $nameGivenShort; ?>.</p>

	<form class="" action="1.php" method="post">
		<input class="mainSelect" id="homeMainSelect" type="submit" name="formZero" value="Start Form">
	</form>

<?php require_once("include/footer.php"); ?>
