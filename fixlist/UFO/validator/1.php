<?php
  require("include/functions.php");
  if (!isset($_POST['formZero'])) {redirectTo("index.php");}
  $thisPage = "1";
  $submitted = 0;
  $page = "professions";
?>
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

		<section>
		  <h2><span class="bigOrange">1</span> Health Professions Disclosure</h2>
      <form class="" action="2.php" method="post">
  		  <p>UF Online Majors in the College of Liberal Arts and Sciences (CLAS) <b>were not</b> designed to accommodate students interested in pursuing a career in a health profession such as: pre-med, pre-dent, pre-vet, PA, or Pharmacy.</p>
  		  <p>It is <b>not advisable</b> for CLAS UF Online students to complete pre-professional courses through UF Online or as a transient student; UF Online does not offer all of these courses, and professional schools may not accept these courses, or may view them with diminished competitiveness.</p>
  		  <p class="tempBorder">Changing to UF Online in CLAS would result in being unable to pursue pre-professional health tracks.</p>

        <label id="hope" class="blue"  for="professions">
          <p>I acknowledge this:</p>
          <input class="checkbox" required id="professions" type="checkbox" name="professions" value="professions">
        </label>

        <div class="clear"></div>

        <input id="randy" class="mainSelect" type="submit" name="formOne" value="Next Page">

      </form>
		</section>

<?php require_once("include/footer.php"); ?>


<script src="scripts/back.js"></script>
