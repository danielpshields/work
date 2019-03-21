<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $timeStamp    = date('n/j/y|g:i a'); // 2/27/2019 11:31 am

      echo $timeStamp . "<br><br>";

      $arg = explode("|", $timeStamp);

      echo $arg[0];
      echo "<br>";
      echo $arg[1];
      echo "<br>";
      print_r($arg);


    ?>
  </body>
</html>
