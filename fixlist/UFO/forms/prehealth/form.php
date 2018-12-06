<?php
  $page = "form";
  require("include/functions.php");
	require_once("include/header.php");
  $thanks = "";
  if (isset($_POST['submit'])) {
    $thanks = "Thank you for submitting the form, " . $firstName . "!";
  }
?>
		<section>
		  <h2>UF Online Biology<br>BA Pre-Health Disclaimer</h2>

      <form action="form.php" method="post">

        <p>The Biology Bachelor of Arts degree program is intended for students that wish to pursue careers in education, the allied health professions, and interdisciplinary fields such as environmental or biotechnology law, science journalism, bioscience management, and others. The curriculum and degree are interdisciplinary in nature and offer students a broad approach to biology.</p>

        <p><b>This program is NOT designed for those interested in attending medical, dental, veterinary, or other professional health programs.</b></p>

        <p>UF Online does not offer all the prerequisites for admission to professional schools, nor will the college grant permission to take these courses at another institution while enrolled in Biology BA program since they are not a necessary part of this degree.</p>

        <p>I have read and understand the above, and accept these terms and conditions.</p>

        <?php require("include/inputTriggers.php"); ?>

        <?php if (!isset($_POST['submit'])) { ?>
          <input class="submitButton" type="submit" name="submit" value="submit">
        <?php } else { ?>
          <p id="thankYou"><?php echo $thanks; ?></p>
        <?php } ?>
      </form>
		</section>

<?php require_once("include/footer.php"); ?>
