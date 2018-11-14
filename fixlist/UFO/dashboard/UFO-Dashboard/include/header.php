<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php echo ucfirst($title); ?> | UF Online Dashboard | Academic Advising Center | UF</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/<?php echo $stylesheet; ?>.css">
	<link rel="icon" href="image/favicon.png" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<h1><a href="index.php">UF Online Dashboard</a></h1>

		<!-- nav hides on mobile -->
		<nav>
			<ul>
				<li><a href="minutes.php">minutes</a></li>
				<li><a href="articles.php">articles</a></li>
				<li><a href="resources.php">resources</a></li>
				<div class="clear"></div>
			</ul>
		</nav>

		<div id="headerImg">
			<a href="">
				<?php include("image/uf_signature.svg"); ?>
			</a>
		</div>
	</header>

	<dl id="mobileNavigation">
		<dt>
			<img src="image/arrow.jpg" class="arrow" alt="">
			<span>menu</span>
		</dt>
		<dd>
			<ul>
				<?php
				if ($title !== "index") { ?>
					<li><a href="index.php">home</a></li>
				<?php } ?>
				<li><a href="minutes.php">minutes</a></li>
				<li><a href="articles.php">articles</a></li>
				<li><a href="resources.php">resources</a></li>
				<li><a href="members.php">members</a></li>
			</ul>
		</dd>
	</dl>
	<div class="clear"></div>


	<!-- hides on mobile -->
	<div id="sideColumn">
		<!-- members -->
		<?php include("include/members.php"); ?>
	</div><!-- side Column -->

	<!-- body content -->
	<div id="content">
