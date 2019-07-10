<?php
  function cmp($a, $b) {
      return strcmp($a["fruit"], $b["fruit"]);
  }

  $fruits[0]["fruit"] = "lemons";
  $fruits[0]["veggi"] = "carrot";
  $fruits[0]["id"]    = "16";
  $fruits[1]["fruit"] = "apples";
  $fruits[1]["id"]    = "5";
  $fruits[2]["fruit"] = "grapes";
  $fruits[2]["id"]    = "32";

  echo "<pre>";
    print_r($fruits);
  echo "</pre>";


  usort($fruits, "cmp");

  foreach ($fruits as $key => $value) {
      echo "\$fruits[$key]: " . $value["fruit"] . "<br>";
  }
?>
