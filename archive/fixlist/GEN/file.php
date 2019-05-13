<?php

  $site = file('http://alexcatalano.com');

  foreach($site as $key => $value) {
    // echo $key . " " . htmlspecialchars($value) . "<br>";
    $image = ".jpg";
    if(strpos($value, $image)) {
      echo "found\n\n";
      if(strpos($value, 'src')) {
        echo strstr($value, "src");
      } else {
        echo "nope";
      }
    }
  }


  $html = implode('', file("http://alexcatalano.com"));

  ?>
