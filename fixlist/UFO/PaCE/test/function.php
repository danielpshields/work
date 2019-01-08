<?php


  function grabFile($file) {
      ob_start();
      require($file);
      return ob_get_clean();
  }

  $message = grabFile("test/content.php");



?>
