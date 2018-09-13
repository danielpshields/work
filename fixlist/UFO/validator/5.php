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

        <form class="" action="6.php" method="post" enctype="multipart/form-data">

          <p>Please indicate your desired UF College of Liberal Arts and Sciences Online major:</p>
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
          <textarea required id="writtenResponse" name="writtenResponse" placeholder="Please explain why you are unable to remain in our current residential program."></textarea>


              <p>If you would like to upload any supporting documentation to email to an advisor:</p>
              <input type="file" name="file" id="fileToUpload">
              <p class="tiny">file types: PNG, JPG, DOC</p>

          <input class="mainSelect oneBox" type="submit" name="formFive" value="submit">

        </form>

<?php require_once("include/footer.php"); ?>
