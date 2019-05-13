<?php
  $date_auto    = date("Y-m-d H:i:s");
  $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
  $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
  $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  include("include/email.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pre-Health Disclaimer</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.ico"/>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Pre-Health Disclaimer</h1>
        <img src="image/uf_logo.svg" alt="">
      </div>
    </header>


		<section>
		  <h2>UF Online Biology<br>BA Pre-Health Disclaimer</h2>

      <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
        <p>The Biology Bachelor of Arts degree program is intended for students that wish to pursue careers in education, the allied health professions, and interdisciplinary fields such as environmental or biotechnology law, science journalism, bioscience management, and others. The curriculum and degree are interdisciplinary in nature and offer students a broad approach to biology.</p>
        <p><b>This program is NOT designed for those interested in attending medical, dental, veterinary, or other professional health programs.</b></p>
        <p>UF Online does not offer all the prerequisites for admission to professional schools, nor will the college grant permission to take these courses at another institution while enrolled in Biology BA program since they are not a necessary part of this degree.</p>
        <p>I have read and understand the above, and accept these terms and conditions.</p>

        <input hidden type="text" name="name" value="<?php echo $nameBusiness; ?>">
        <input hidden type="text" name="email" value="<?php echo $email; ?>">
        <input hidden type="text" name="UF_ID" value="<?php echo $UFID; ?>">

        <!-- "inputTriggers.php": needed to submit / email the form but dont affect the form fields / content" -->
        <?php require("include/inputTriggers.php"); ?>
        <input class="submitButton" type="submit" name="submit" value="submit">

      </form>
		</section>

<?php require_once("include/footer.php"); ?>
