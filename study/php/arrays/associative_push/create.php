<?php

$fruits = array("apple", "orange", "pear", "grape");

$colors = array("green", "orange", "yellow", "purple");

    $pairing = array_combine($fruits, $colors);

    foreach ($pairing as $key => $value) {
      echo $key . " " . $value . "<br>";
    }

    echo "<pre>";
    print_r($colors);
    echo "</pre>";



?>
