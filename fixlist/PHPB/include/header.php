<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<meta name="keywords" content="Liberal Arts and Sciences, University, Humanities, Liberal Education, College, University of Florida, Gainesville, African and Asian Languages, Anthropology, Astronomy, Botany, Biology, Chemistry, Communication Sciences and Disorders, Criminology Law and Society, English, Geography, Geological Sciences, History, Mathematics, Philosophy, Physics, Political Science, Psychology, Religion, Romance Languages and Literatures, Sociology, Statistics, Zoology, African Studies, Bob Graham Center, European Studies, France Florida Research Institute, Greek Studies, Hindu Traditions, Jewish Studies, LUECI, Latin-American Studies, Medieval and Early Modern Studies, Paris Research Center, Women's Studies and Gender Research, Linguistics, African American Studies, Asian Studies, Linguistics, Oral History Program, Quantum Theory Project, Upward Bound Program, Academic Advising" />
		<meta name="description" content="The UF College of Liberal Arts and Sciences constitutes the intellectual core of the university. Its principal mission is to lead the academic quest to understand our place in the universe, and to help shape our society and environment.">
		<link rel="stylesheet" href="css/master.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="css/<?php echo $page; ?>.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
		<script src="scripts/dropdown.js"></script>
	</head>
	<body>
		<header>
			<div id="logos">
				<div id="dept"><a href="index.php"> PHPB vs CLAS <!-- <img src="images/unitHeader2.gif" alt="College of Liberal Arts and Sciences"> --></a></div>
				<div id="uf"><a href="shell.php">UF Logo Here<!-- <img src="images/UF-logo.png"> --></a></div>
				<div class="clear"></div>
			</div><!-- end unofficial NAV (uf and CLAS bar) -->
			<dl>
				<dt>Menu</dt>
				<dd>
				    <ul>
<?php if ($page !== "index") { ?>
				      <li><a href="index.php">Home</a></li>
<?php } ?>
				      <li><a href="admission.php">Admission</a></li>
				      <li><a href="courses.php">Course Information</a></li>
				      <li><a href="features.php">Program Features</a></li>
				      <li><a href="finances.php">Financial Information</a></li>
				      <li><a href="faq.php">FAQ</a></li>
				      <li><a href="advising.php">Advising</a></li>
				      <li><a href="alumnisuccess.php">Alumni Success</a></li>
				      <li><a href="contact.php">Contact Us</a></li>
				      <li id="newlyAdmittedLink"><a href="newstudents.php">Newly Admitted Students</a></li>
				    </ul>
				</dd>
			</dl>
			<div class="clear"></div>
		</header>

		<nav class="sidebar">
			<ul>
				<!-- <li><a href="index.php">Home</a></li> -->
				<li><a href="admission.php">Admission</a></li>
				<li><a href="courses.php">Course Information</a></li>
				<li><a href="features.php">Program Features</a></li>
				<li><a href="finances.php">Financial Information</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="advising.php">Advising</a></li>
				<li><a href="alumnisuccess.php">Alumni Success</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="newstudents.php">Newly Admitted Students</a></li>
				<div class="clear"></div>
			</ul>
		</nav>

		<div id="container">
