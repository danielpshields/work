<?php
  // include("include/env.php");
  $thanks = "Thank you for applying to the Pre-Health Post-Baccalaureate Program (PHPB)!";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UF CLAS Pre-Health Postbac</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.ico"/>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/thankyou.css">
  </head>
  <body>
    <header>
      <div class="container">
        <h1>UF CLAS Pre-Health Postbac</h1>
      </div>
    </header>

    <p id="thankYou"><?php echo $thanks; ?></p>

<?php require_once("include/footer.php"); ?>
