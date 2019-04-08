<?php
$root = "";
include("include/env.php");
  if (isset($_POST['submit'])) {
    include("email/approve/approve_email.php");
    echo "sent!";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php $email = ""; ?>
  <body>
    <h1>mail/eppn</h1>

    <?php
    echo "mail: ";
    echo $HTTP_UFSHIB_MAIL     = $_SERVER['HTTP_UFSHIB_MAIL'];
    echo "<br><br>";
    echo "eppn: ";
    echo $HTTP_UFSHIB_EPPN     = $_SERVER['HTTP_UFSHIB_EPPN'];
    echo "<br><br>";
    ?>


  </body>
</html>
