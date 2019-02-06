<?php
  $rain = "alex"; $water = "blue"; $boat = "crash";
  $list = array(
    "hope" => $rain,
    "pray" => $water,
    "love" => $boat
  );


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    foreach($list as $key => $value) {

      echo $key . " " . $value . "<br>";

    }

    ?>

  </body>
</html>
