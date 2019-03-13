<?php
// $eppn = "gatorbec@ufl.edu";
// $mail = "bsandbac@advising.ufl.edu";
// $email = "nraymond@advising.ufl.edu";
// $eppn = "nraymond@ufl.edu";
// $mail = "nraymond@advising.ufl.edu";
// $HTTP_UFSHIB_MAIL     = "nraymond@advising.ufl.edu";
// $HTTP_UFSHIB_EPPN     = "nraymond@ufl.edu";
// $REDIRECT_UFShib_eppn = "nraymond@ufl.edu";
// $REDIRECT_UFShib_mail = "nraymond@advising.ufl.edu";

  $email                = $_SERVER['HTTP_UFSHIB_MAIL'];
  $HTTP_UFSHIB_MAIL     = $_SERVER['HTTP_UFSHIB_MAIL'];
  $HTTP_UFSHIB_EPPN     = $_SERVER['HTTP_UFSHIB_EPPN'];
  $REDIRECT_UFShib_eppn = $_SERVER['REDIRECT_UFShib_eppn'];
  $REDIRECT_UFShib_mail = $_SERVER['REDIRECT_UFShib_mail'];

  $emails = array(
    "$HTTP_UFSHIB_EPPN"     => "$HTTP_UFSHIB_MAIL",
    "$REDIRECT_UFShib_mail" => "$REDIRECT_UFShib_eppn"
  );
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="shell.css">
  </head>
  <body>



    <?php



      foreach ($emails as $key => $value) {
        if ($email == $key || $email == $value) {
          $email = $HTTP_UFSHIB_EPPN;
          $loggedIn = true;
        }
      }
    ?>

    <?php if ($loggedIn) { ?>
      <h1><u>root email:</u> <?php echo $email; ?></h1>
      <img src="image/kitty_10.jpg" alt="">
    <?php } ?>


    <table>
      <tr>
        <td>original</td>
        <td>converted</td>
      </tr>
      <tr>
        <td><b><?php echo $HTTP_UFSHIB_MAIL; ?></b></td>
        <td><b><?php echo $email; ?></b></td>
      </tr>
    </table>
  </body>
</html>
