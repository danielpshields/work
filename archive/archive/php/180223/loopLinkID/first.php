<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>First Page</title>
    <link rel="stylesheet" href="../../../css/stylesheet.css">
  </head>
  <body>
  <h2>First</h2>

  <?php
    $link = "second.php";
    $text = "second page";
    $i = 1;

    while ($i <= 3) {
      echo "<a href=\"{$link}?id={$i}\">{$text}</a>" . "<br>";
      $i++;
    }
  ?>


  </body>
</html>
