<?php
  require_once("include/email.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Email</title>
	<link rel="stylesheet" href="css/master.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Email</h1>
		</header>
		<div class="content">


  <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

    <select required name="major">
      <option disabled selected value="">Please select a major</option>
      <option value="anthropology">Anthropology</option>
      <option value="biology">Biology</option>
      <option value="computerScience">Computer science</option>
      <option value="criminology">Criminology</option>
      <option value="geography">Geography</option>
      <option value="geology">Geology</option>
      <option value="psychology">Psychology</option>
      <option value="sociology">Sociology</option>
    </select>

    <br>
    <br>

    <input type="text" name="name" tabindex="2">
    <p>name</p>
    <input type="password" name="password" tabindex="3">
    <p>password</p>
    <input type="text" name="email" tabindex="4">
    <p>email</p>
    <input type="text" name="song" tabindex="4">
    <p>song</p>
    <!-- add a file as an attachment -->
    <input style="margin-bottom: 20px;" type="file" name='photo' id='photo' tabindex="6">
    <!-- "inputTriggers.php": needed to submit / email the form but dont affect the form fields / content" -->
    <?php require("include/inputTriggers.php"); ?>
    <input type='submit' name='Submit' value='submit this information' tabindex="10">
  </form><!-- form -->

<?php require_once("include/footer.php"); ?>
