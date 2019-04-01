<?php
// agavrios @ufl.edu | nraymond@ufl.edu
// agavrilos@ufl.edu | nraymond@advising.uf

//$HTTP_UFSHIB_EPPN     = nraymond@ufl.edu
//$REDIRECT_UFShib_eppn = nraymond@ufl.edu
//$HTTP_UFSHIB_MAIL     = nraymond@advising.ufl.edu
//$REDIRECT_UFShib_mail = nraymond@advising.ufl.edu

// $REDIRECT_UFShib_eppn   = "agavrios@ufl.edu";
// $REDIRECT_UFShib_mail   = "agavrilos@ufl.edu";

$gatorlink = "acatalano2@ufl.edu";
$mailRedir = "acatalano@advising.edu";
$studentID = "40811353";

    $MAIL       = $_SERVER['HTTP_UFSHIB_MAIL'];
    $EPPN       = $_SERVER['HTTP_UFSHIB_EPPN'];

    $EPPN       = "agavrios@ufl.edu";
    $MAIL       = "agavrilos@ufl.edu";

    $email = $_SERVER['HTTP_UFSHIB_MAIL'];

    $emails = array(
      "$EPPN"     => "$MAIL",
      "$RE_mail"  => "$RE_eppn"
    );

    foreach ($emails as $key => $value) {
      if ($email == $key || $email == $value) {
        $email = $HTTP_UFSHIB_EPPN;
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
  </body>
</html>
