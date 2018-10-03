<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="css/stylesheet.css" />
  </head>
  <body>
    <?php

      $greeting = "hello";
      $target = "world";
      $phrase = $greeting . " " . $target;


    //  echo '\{$phrase}how are you <br />';
    //  echo '\\{$phrase}how are you <br />';

      echo "{$phrase}how are you <br />";
      echo "\"{$phrase}how are you?\" <br />";
      echo "{\"$phrase\"}how are you <br />";
      echo "\"{$phrase}\"how are you <br />";
      echo "\"{\$phrase}\"how are you <br />";


    //  echo "\\{$phrase}how are you <br />";
    //  echo "\\{$phrase}how are you <br />";

    ?>


  </body>
</html>
