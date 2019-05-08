<?php

  function messageContent($file) {
      ob_start();
      $name  = $_POST['firstName'];
      $email = $_POST['email'];
      $css = file_get_contents("email/stylesheet.css");
      require($file);
      return ob_get_clean();
  }

  include("engine.php");

?>
