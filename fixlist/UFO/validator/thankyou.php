<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UFO Validator</title>
	<link rel="stylesheet" href="css/master.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="border.js" charset="utf-8"></script>
</head>
<body>
  <h1>UFO Acknowledgement Form</h1>
	<?php if(isset($_POST['submit'])) {echo "submitted";} else {echo "not submitted";}

// professions
// expectations
// curriculum
// requirements
// submit
 echo "<pre>";
 	print_r($_POST);
	echo "</pre>";

?>
  <?php require_once("include/contact.php"); ?>

</body>
</html>
