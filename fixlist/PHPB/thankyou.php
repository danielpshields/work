<?php
  $date_auto    = date("Y-m-d H:i:s");
  $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
  $nameGiven    = $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'];
  $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  $thanks = "Thank you for submitting the form!";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UF CLAS Pre-Health Postbac</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.ico"/>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>UF CLAS Pre-Health Postbac</h1>
        <img src="image/uf_logo.svg" alt="">
      </div>
    </header>

		<section>

      <p id="thankYou"><?php echo $thanks; ?></p>
<!--
		  <h2>UF Online Biology<br>BA Pre-Health Disclaimer</h2>


      <p>The Biology Bachelor of Arts degree program is intended for students that wish to pursue careers in education, the allied health professions, and interdisciplinary fields such as environmental or biotechnology law, science journalism, bioscience management, and others. The curriculum and degree are interdisciplinary in nature and offer students a broad approach to biology.</p>

      <p><b>This program is NOT designed for those interested in attending medical, dental, veterinary, or other professional health programs.</b></p>

      <p>UF Online does not offer all the prerequisites for admission to professional schools, nor will the college grant permission to take these courses at another institution while enrolled in Biology BA program since they are not a necessary part of this degree.</p>

      <p>I have read and understand the above, and accept these terms and conditions.</p>


		</section>
-->
<?php require_once("include/footer.php"); ?>
