<?php
// $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
// $date_auto    = date("Y-m-d H:i:s");
// $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
// $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
// $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
// $nameGivenShort    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
$UFID              = "alex";
$date_auto         = "alex";
$nameBusiness      = "alex";
$email             = "alex";
$nameGiven         = "alex";
$nameGivenShort    = "alex";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UFO Validator</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/<?php echo $page; ?>.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	
	<script src="scripts/back.js"></script>
	<script src="scripts/border.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>UF Online Acknowledgement Form</h1>
			<nav>
				<ul <?php
				if ($submitted == true) {
					echo "style=\"display: none;\"";
				}?>>
					<?php
						$onPage = array("1", "2", "3", "4", "5");
						foreach ($onPage as $pageNumber) {
							echo "<li";
							if ($pageNumber === $thisPage) {
								echo " class=\"thisPage\"";
							}
							echo ">{$pageNumber}</li>";
						}
					?>
					<div class="clear"></div>
				</ul>
			</nav>
		</header>
