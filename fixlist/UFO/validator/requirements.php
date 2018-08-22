<?php
 	$thisPage = "4";
  $submitted = 0;
	require_once("include/header.php");
?>

      <section>

        <form class="" action="submit.php" method="post">

    				<h2><span class="orangeNumber">4</span> Requirements</h2>

          	<p>Changing from UF residential to UF Online requires:</p>

    				<ol>
    					<li>Applying through the UF Online website (<a href="https://ufonline.ufl.edu/admissions/how-to-apply/#readmit" target="_blank">ufonline.ufl.edu</a>)</li>
    					<li>Petitioning CLAS to document the reasons you are no longer able to complete your degree residentially</li>
    				</ol>

  	  		<table>
  	  			<tr>
  	  				<td><p class="orange">4</td>
  	  				<td>I acknowledge this:</td>
  	  				<td class="check oneBox">
                <input id="green" required type="checkbox" name="requirements" value=""></td>
  	  			</tr>
  	  		</table>

          <input class="mainSelect oneBox" type="submit" name="requirements" value="submit">
        </form>
      </select>

<?php require_once("include/footer.php"); ?>
