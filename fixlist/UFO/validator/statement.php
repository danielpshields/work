<?php
  require("include/functions.php");

  if (!isset($_POST['formFour'])) {
    redirectTo("index.php");
  }
  $page = "statement";
 	$thisPage = "5";
  $submitted = 0;
	require_once("include/header.php");
?>
      <h2><span class="orangeNumber">5</span> Statement</h2>

      <section>

        <form class="" action="submit.php" method="post" enctype="multipart/form-data">

          <p>Please indicate your desired UF Online major:</p>
          <select required id="selectMajor" name="majorSelected">
            <option disabled selected value="">Please select a major</option>
            <option value="Anthropology">Anthropology</option>
            <option value="Biology">Biology</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Criminology">Criminology</option>
            <option value="Geography">Geography</option>
            <option value="Geology">Geology</option>
            <option value="Psychology">Psychology</option>
            <option value="Sociology">Sociology</option>
          </select>

          <!-- <input id="writtenResponse" type="textarea" wrap="hard" name="" value="" placeholder="Please explain "> -->
<!-- rows="8" cols="80" -->
          <textarea required id="writtenResponse" name="writtenResponse" placeholder="Please explain your reasoning for changing majors to UF Online"></textarea>

          <input class="mainSelect oneBox" type="submit" name="formFive" value="submit">

        </form>

<?php require_once("include/footer.php"); ?>
