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
	<div class="container">
		<header>
			<h1>UFO Acknowledgement Form</h1>
			<nav>
				<ul <?php
				if ($submitted == true) {
					echo "style=\"display: none;\"";
				}?>>
					<?php
						$onPage = array("1", "2", "3", "4");
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
