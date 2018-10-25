<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {width: 800px;margin: auto; padding-top: 50px;}
    </style>
  </head>
  <body>

  <ul>
    <a href="form.php">form</a></li>
  </ul>

<?php

  foreach ($_POST as $key => $value) {
    echo $key . " => " . $value . "<br>";

      $colorList = array(
        'blue'  => "#1073e3;",
        'red'   => "red;",
        'gray'  => "#a0a0a0;",
        'green' => "green;"
      );

      foreach ($colorList as $color => $hex) {

        if ($value === $color) {
          echo $retstr = ".label {color: $hex}";
        }

      }
    }
?>


  </body>
</html>
