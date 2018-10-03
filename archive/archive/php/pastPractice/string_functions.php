<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="css/stylesheet.css" />
  </head>
  <body>

    <?php
      $first = "The quick broWn fOx";
      $second = " jumps oVer tHe laZy Dog.";
      $together = $first;
      echo "together one: " . $together . "<br />";
      $together .= $second;
      echo "together two: " . $together . "<br />";
      echo "one: " . $first . "<br />";
      echo "two: " . $second . "<br />";
    ?>

    <p>string functions</p>

    <ul>
      <li>lowercase: <?php echo strtolower($together); ?></li>
      <li>uppercase: <?php echo strtoupper($together); ?></li>
      <li>capitalize: <?php echo ucfirst($together); ?></li>
      <li>capitalize every word: <?php echo ucwords($together); ?></li>
    </ul>

    <ul>
      <li><?php echo strtoupper("ConTrol"); ?>: <?php echo ucfirst(strtolower($together)); ?></li>
    </ul>


      <?php echo strlen($length); ?>
      <!-- variable $_____ length, it counts the spaces; -->
      <?php echo "Alex" . trim(" Bad Cat Dough ") . "Eat"; ?>
      <!-- trims spaces from edges -->
      <?php echo strstr($third, "h"); ?>
      <!-- string within a string, in variable $_____ find and start from "searched" -->
      <?php echo str_replace("quick", "fast", $third); ?>
      <!-- replace the word "quick" with "fast" in the variable $______ only affect that instance-->

      <?php echo str_repeat($third, 3); ?>
      <!-- repeat the variable $______ (three) times -->
      <br />
      <?php echo substr($third, 4, 9); ?>
      <!-- echo only string positions no. 04 through no. 09 -->
      <br />
      <?php echo strpos($third, "quick"); ?>
      <!-- what is the numbered position "quick" within variable $______ -->
      <br />
      <?php echo strchr($third, "he"); ?>
      <br />
      <?php echo strstr($third, "he"); ?>
      <!-- -->
      <br />
      <?php echo strpos($third, "z"); ?>
      <br />
      <?php echo strlen($third); ?>

      <?php

        $stringLength = strlen($third);
        $stringSection = strpos($third, "z");

        $difference = $stringLength - $stringSection;

        echo "<br />";

        echo $difference;
        echo "<br />";
        echo 51 - 38;
        echo "<br />";

      ?>



  </body>
</html>
