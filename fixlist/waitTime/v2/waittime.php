<?php require_once("gettime.php"); ?>
<html>
<head>
	<title>AAC Lobby Wait Time</title>
	<link rel="stylesheet" href="waittime.css">
</head>
<body>
	<h1>AAC Lobby Wait Time</h1><?php include("table.php"); ?>

	<div class="lobbyWaitShell">
		<h2>AAC Lobby Wait Time</h2>

		<?php if ($lobbyIsOpen === "closed") { ?>

			<div class="leftSide" id="closed">
				<p><img src="closed.jpg"></p>
			</div>

			<div class="rightSide">
				<h3>Walk-in Hours</h3>
				<p>mornings:</p>
				<ul>
					<li>8 a.m. - 11:30 a.m.</li>
				</ul>
				<p>afternoons:</p>
				<ul>
					<li>1:30 <span class="tinyTime">p.m.</span> - 4:30 <span class="tinyTime">p.m.</span></li>
				</ul>
			</div>
			<div class="clear"></div>

			<div class="currentTime">
				<p>Advising sessions will resume at 8 a.m.</p>
			</div>

		<?php } else { ?>
				<div class="leftSide">
					<p id="currentStudent"><span class="bigNumber"><?php echo $students; ?></span> <span style="font-weight: 600;">students</span> waiting</p>
					<p id="nextStudent">Next student has been waiting:</p>
					<p><span class="mediumNumber darkRed"><?php echo $h . $m; ?></span> <span class="tiny">minutes</span></p>
				</div>

				<div class="rightSide">
					<h3>Walk-in Hours</h3>
					<p>mornings:</p>
					<ul>
						<li>8:00 - 11:30</li>
					</ul>
					<p>afternoons:</p>
					<ul>
						<li>1:30 - 4:30</li>
					</ul>
				</div>
				<div class="clear"></div>

				<div class="currentTime">
					<p id="asOfTime"><i><span class="light">as of</span> <?php echo $time; ?></i></p>
				</div>

		<?php } ?>
		</div><!-- end shell -->


		<?php echo '<center><p><strong>AAC Lobby Wait Time</strong><br /><br />'.$display.'</p></center>'; ?>

</body>
</html>
