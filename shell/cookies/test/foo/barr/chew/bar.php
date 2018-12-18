<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>[HOME] / test / bar.php</p>

    <pre>
      <?php print_r($_COOKIE); ?>
    </pre>

    <?php

    $test = isset($_COOKIE['c_user']) ? $_COOKIE['c_user'] : "foo chew bar barr";

    echo $test;
    ?>

  </body>
</html>
