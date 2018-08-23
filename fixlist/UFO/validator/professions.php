<?php
  require("include/functions.php");

  if (!isset($_POST['formZero'])) {
    redirectTo("index.php");
  }

  $thisPage = "1";
  $submitted = 0;
	require_once("include/header.php");
?>
		<section>

      <form class="" action="expectations.php" method="post">

		  <h2><span class="orangeNumber">1</span> Health Professions Disclosure:</h2>

		  <p>UF Online Majors in the College of Liberal Arts and Sciences (CLAS) <b>were not</b> designed to accommodate students interested in pursuing a career in a health profession such as: pre-med, pre-dent, pre-vet, PA, or Pharmacy.</p>

		  <p>It is <b>not advisable</b> for CLAS UF Online students to complete pre-professional courses through UF Online or as a transient student; UF Online does not offer all of these courses, and professional schools may not accept these courses, or may view them with diminished competitiveness.</p>

		  <!-- <p>Not all pre-professional courses are offered in UF Online, and the ones that are may not be accepted or may be accepted with diminished competitiveness by professional schools.</p> -->

		  <p class="tempBorder">Changing to UF Online in CLAS would result in being unable to pursue pre-professional health tracks.</p>

		  <table>
		    <tr>
		      <td class="orange">1</td>
		      <td>I acknowledge this:</td>
		      <td class="check oneBox">
						<input required id="green" type="checkbox" name="professions" value="professions">
					</td>
		    </tr>
		  </table>

      <input class="mainSelect oneBox"  type="submit" name="formOne" value="next form">

      </form>
		</section>

<?php require_once("include/footer.php"); ?>
