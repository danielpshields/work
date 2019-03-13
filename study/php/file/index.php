<?php
    $site = file('https://alexcatalano.com/');

    foreach($site as $key => $value) {
      echo $key . " " . htmlspecialchars($value) . "<br>";
    }


    //$html = implode('', file("http://alexcatalano.com"));
    // print_r($html);

  ?>
