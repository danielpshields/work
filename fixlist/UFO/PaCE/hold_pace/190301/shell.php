<?php
  $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $date_auto    = date("Y-m-d H:i:s");
  $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
  $lastName     = $_SERVER['HTTP_UFSHIB_SN'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <pre>

    <?php echo $UFID; ?><br>
    <?php echo $date_auto; ?><br>
    <?php echo $nameBusiness; ?><br>
    <?php echo $email; ?><br>
    <?php echo $firstName; ?><br>
    <?php echo $lastName; ?><br>

    </pre>

  </body>
</html>
