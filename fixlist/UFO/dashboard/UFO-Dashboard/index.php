<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>UF Online Dashboard | Academic Advising Center | UF</title>
	<link rel="stylesheet" href="css/master.css">
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

	<div id="mobileNavigation">
		<ul>
			<li><a href="minutes.php">minutes</a></li>
			<li><a href="articles.php">articles</a></li>
			<li><a href="resources.php">resources</a></li>
			<div class="clear"></div>
		</ul>
	</div>


	<div id="sideColumn">
		<!-- members -->
		<?php include("include/members.php"); ?>
	</div><!-- side Column -->


	<div id="bodyContent">
		<!-- body content -->
		<h2>UF Online Information and Reporting</h2>
		<ul>
			<li><a href="docs/MajorsbyStartDate.xlsx">Majors by Start Date</a> (XLSX, 14KB)</li>
			<li><a href="https://uflorida.sharepoint.com/sites/ufonline/Shared Documents/Forms/AllItems.aspx?viewpath=%2Fsites%2Fufonline%2FShared%20Documents%2FForms%2FAllItems%2Easpx&id=%2Fsites%2Fufonline%2FShared%20Documents%2FFile%20Sharing%2FExternal%2FUFO_Student_Demographics%2F2018">Spring 2018 UF Online Student Demographics</a></li>
			<li><a href="https://cns-sql-reports.ad.ufl.edu/APIT_ReportMgr/Pages/Folder.aspx?ItemPath=%2fUFOnlineReports&ViewMode=Detail" target="_blank">UF Online Self-Service Reports</a>: Best viewed in Firefox or Internet Explorer.</li>
			<li><a href="http://handbook.ufonline.ufl.edu/advising/" target="_blank">UF Online Handbook</a></li>
			<li><a href="docs/MajorsbyTerm.xlsx" target="_blank">UF Online Majors by Term</a> (XLSX, 14KB)</li>
		</ul>

		<h2>Previous Demographics Reports</h2>
		<ul>
			<li><a href="docs/20161StudentDemographics.xlsx">Spring 2016 Demographics</a> (XLSX, 28KB)</li>
			<li><a href="docs/UFODemographic201508.pdf" target="_blank">UF Online Demographics Fall 2015</a></li>
			<li><a href="docs/StudentDemographics201501.pdf" target="_blank">UF Online Demographics Spring 2015</a></li>
		</ul>

		<h2>UF Policies for UFO Students</h2>
		<ul>
			<li><a href="docs/distanceguidelines.pdf" target="_blank">AAC Guidelines for Working With Students at a Distance</a> (PDF, 241 KB)</li>
			<li><a href="docs/CombinedDegreeEligibility.pdf" target="_blank">Combined Degree Eligibility & Processing for UF Online Students</a> (PDF, 81 KB)</li>
			<li><a href="docs/tuition.pdf" target="_blank">Tuition, Repeat Surcharge, and Excess Hours</a> (PDF, 89 KB)</li>
		</ul>
	</div><!-- bodyContent -->


	<!-- far right column -->
	<div id="rightColumn">
		<h2>The UF Online Team</h2>
		<ul>
			<li>Meet the <a href="http://ufonline.ufl.edu/about-us" target="_blank">UF Online Team!</a></li>
		</ul>

		<h2>Listserv Members</h2>
		<ul>
			<li><a href="http://lists.ufl.edu/listserv-basics.html" target="_blank">Listserv Basic Instructions</a></li>
			<p><i>Follow these instructions to be added to the listserv or contact <a href="mailto:gkepic@advising.ufl.edu">Glenn Kepic</a>.</i></p>
			<li><a href="mailto:ufoadvising-L@lists.ufl.edu">Email the list</a></li>
		</ul>

		<h2>PaCE</h2>
		<ul>
			<li><a href="docs/PaCEContactsbyCollege.pdf" target="_blank">Contact names, email addresses, and majors by UF college</a></li>
			<li><a href="http://www.admissions.ufl.edu/ugrad/pacefaq.html" target="_blank">FAQ</a></li>
			<li><a href="http://ufonline.ufl.edu/pace/" target="_blank">General Info.</a></li>
		</ul>

		<h2>Beyond120</h2>
		<ul>
			<li><a href="/beyond120/internships">Internships</a></li>
			<li><a href="/beyond120/exchange-programs">Exchanges</a></li>
			<li><a href="/beyond120/events">Events</a></li>
			<li><a href="/beyond120/contact">Contact</a></li>
		</ul>

		<!-- calendar  -->
		<h2>Calendar</h2>
		<iframe src="https://calendar.google.com/calendar/embed?height=580&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=clasufonline%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" frameborder="0" scrolling="no"></iframe>
	</div><!-- right column -->

	<!-- <div id="mobileNavigation"> -->

	figure out the name for how this should behave
	it should behave the same way as the mobile navigation menu


		<?php include("include/members_dropdown.php"); ?>
	</div>

	<div class="clear"></div>

	<footer>
		<p>University of Florida<br>Gainesville, FL 32611<br>(352) 392-3261</p>
	</footer>
</body>
<script type="text/javascript" src="scripts/dropdown.js"></script>
</html>
