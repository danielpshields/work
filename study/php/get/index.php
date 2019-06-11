<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><a href="index.php?setsomething">send here</a></li>
    </ul>

    <?php

    if (isset($_GET['setsomething'])) {
      echo "<pre>";
        print_r($_GET);
      echo "</pre>";
    }

    if (empty($_GET['setsomething'])) {
      echo "<pre>";
        print_r($_GET);
      echo "</pre>";
    }

    echo "<pre>";
      print_r($_GET);
    echo "</pre>";


    ?>

  </body>
</html>
