<?php
 	$thisPage = "3";
  $submitted = 0;
	require_once("include/header.php");
?>

  <form action="requirements.php" method="post">

		<section>

		  <h2><span class="orangeNumber">3</span> Curriculum:</h2>

		  <p>Please note the degree options available in UF Online compared to UF Residential</p>

		  <table>
		    <tr>
		      <th colspan="5" class="center">CLAS Major Comparisons</th>
		    </tr>
		    <tr>
		      <th>Major</th>
		      <th id="majorBlue">UF Residential</th>
		      <th id="majorOrange">UF Online</th>
		    </tr>
		    <tr>
		      <td>Anthropology</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/APY_BA_BS/" target="_blank">BS or BA</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/APY_BA_UFO/" target="_blank">BA</a></td>
		    </tr>
		    <tr>
		      <td>Biology</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/BIO_BA_BS/" target="_blank">BS or BA</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/BIO_BA_UFO/" target="_blank">BA</a></td>
		    </tr>
		    <tr>
		      <td>Computer Science</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CSC_BS/" target="_blank">BS</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CSC_BS_UFO/" target="_blank">BS</a></td>
		    </tr>
		    <tr>
		      <td>Criminology</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CRI_BA/" target="_blank">BA</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CRI_BA_UFO/" target="_blank">BA</a></td>
		    </tr>
		    <tr>
		      <td>Geography</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GPY_BA_BS/" target="_blank">BA or BS</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GPY_BA_UFO/" target="_blank">BA</a></td>
		    </tr>
		    <tr>
		      <td>Geology</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GLY_BA_BS/" target="_blank">BS or BA</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GLY_BA_UFO/" target="_blank">BA</a></td>
		    </tr>
		    <tr>
		      <td>Psychology</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/PSY_BS_BS01/" target="_blank">BS</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/PSY_BA_UFO/" target="_blank">BA</a></td>
		    </tr>
		    <tr>
		      <td>Sociology</td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/SOC_BA/" target="_blank">BA</a></td>
		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/SOC_BA_UFO/" target="_blank">BA</a></td>
		    </tr>
		  </table>


		    <table>
		      <tr>
		        <td><p class="orangeFont"><b>3</b></p></td>
		        <td>I acknowledge this:</td>
		        <td class="check oneBox">
              <input id="green" required type="checkbox" name="curriculum" value=""></td>
		      </tr>
		    </table>

        <input class="mainSelect oneBox" type="submit" name="curriculum" value="next form">
		</section>

  </form>

  <?php require_once("include/footer.php"); ?>
