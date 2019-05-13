<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <h1>Only Print name</h1>

    <?php $email = array("a.collado@ufl.edu", "acatalano2@ufl.edu"); ?>

    <?php
    function truncation($email) {
     $length   = strlen($email) . "<br>";
     $position = strpos($email, "@") . "<br>";
     $truncate = $length - $position . "<br>";
     echo substr($email, 0, -$truncate);
   }

   foreach ($email as $key) {
     truncation($key);
   }
    ?>



  </body>
</html>
