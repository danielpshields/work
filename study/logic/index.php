<?php
    // $createdFor = "nraymond@ufl.edu";
    // $createdFor = "nraymond@advising.ufl.edu";
    $createdFor = "acatalano2@ufl.edu";

    $loggedIn = false;

    $HTTP_UFSHIB_MAIL     = $_SERVER['HTTP_UFSHIB_MAIL'];
    $HTTP_UFSHIB_EPPN     = $_SERVER['HTTP_UFSHIB_EPPN'];

    $emails = array(
      "$HTTP_UFSHIB_MAIL" => "$HTTP_UFSHIB_EPPN"
    );

    foreach ($emails as $key => $value) {
      if ($createdFor == $key || $createdFor == $value) {
        $loggedIn = true;
      }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <h1>Login Logic</h1>

    <?php if ($loggedIn) { ?>

    <div class="window">
      <p><?php echo "login successful"; ?></p>
      <img src="image/kitty.jpg" alt="">
      <img src="image/kitty.png" alt="">
    </div><!-- window -->

  <?php } ?>



    <table>
      <tr>
        <td>HTTP_UFSHIB_EPPN</td>
        <td>agavrios@ufl.edu </td>
      </tr>
      <tr>
        <td>HTTP_UFSHIB_MAIL</td>
        <td>agavrilos@ufl.edu</td>
      </tr>
      <!-- <tr>
        <td>REDIRECT_UFShib_eppn</td>
        <td>agavrios@ufl.edu </td>
      </tr>
      <tr>
        <td>REDIRECT_UFShib_mail</td>
        <td>agavrilos@ufl.edu</td>
      </tr> -->
    </table>

    <ul>
      <li>contacted agavrilos@ufl.edu <i>People Soft: $key = studentID, $value = mail != eppn</i></li>
      <li>agavrios@ufl.edu</li>
      <li>agavrilos@ufl.edu</li>
    </ul>




  </body>
</html>
