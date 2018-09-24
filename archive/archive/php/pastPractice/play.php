<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Play</title>
  </head>
  <body>
    <?php

      $a = 2;
      echo $a . "\n";
      $b = $a++;
      echo $b . "\n";
      echo $a . "\n";

      print var_dump($GLOBALS);
    ?>
  </body>
</html>
