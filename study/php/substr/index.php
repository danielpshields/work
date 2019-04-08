<?php

    if ($_SERVER['HTTP_HOST'] === "localhost") {

      $url    = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

      $remove = strlen("localhost/~alex/home/lonesomenote/");

      echo substr($url, 0, $remove);

    }
    
?>
