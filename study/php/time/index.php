<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $date = new DateTime("2019-06-02");
      $date->modify("+7 day");
      echo $date->format("Y-m-d");
      echo "<br>";
    ?>


    <?php
    echo "<br>";
      // This is what you need for future date from now.
      echo date('Y-m-d H:i:s', strtotime("+7 day"));
    echo "<br>";

      // This is what you need for future date from specific date.
      echo date('Y-m-d H:i:s', strtotime('06/02/2019 +7 day'));

     ?>
  </body>
</html>
