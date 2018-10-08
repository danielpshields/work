<?php
// $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
// $date_auto    = date("Y-m-d H:i:s");
// $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
// $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
// $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
// $nameGivenShort    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
$UFID              = "Alex";
$date_auto         = "Alex";
$nameBusiness      = "Alex";
$email             = "Alex";
$nameGiven         = "Alex";
$nameGivenShort    = "Alex";
	$acknowledge = "I acknowledge this";
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
</head>
<body>
	<div class="container">
		<header>
			<h1>UF Online Acknowledgement Form</h1>
			<nav>
				<ul<?php if ($submitted == true) {echo " style=\"display: none;\"";	}?>>
					<?php

						$pages = array("1", "2", "3", "4", "5");

						foreach ($pages as $page) {
							echo "<li>";
							if ($page <= $thisPage) {
								echo "<a ";
								if ($page === $thisPage) {
									echo "class=\"thisPage\" ";
								}
								echo "href=\"{$page}.php\">";
							}
							if ($page < $thisPage) {
								echo "<img src=\"image/check.png\">";
							} else {echo $page;}
								echo "</a></li>";
						}
						?>
					<div class="clear"></div>
				</ul>
			</nav>
		</header>
		<div class="content">
