<?php

  $fruits = array(
    "candy" => "grape",
    "juice" => "apple",
    "pie"   => "blueberry"
  );

  $fruit = "grape";


  if (array_key_exists($fruit, $fruits)) {
    echo $fruit . " is in array";
  }

  foreach ($fruits as $key => $value) {
    if ($fruit == $value) {
      echo $fruit . " is in array";
    }
  }



 ?>
