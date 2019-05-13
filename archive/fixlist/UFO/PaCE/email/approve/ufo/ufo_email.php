<?php

  function messageContent($file) {
    global $root;
      ob_start();
      $email        = $_POST['email'];
      $studentName  = $_POST['name'];
      $student_ID   = $_POST['id'];
      $ufoMajor     = $_POST['major'];
      $css = file_get_contents("../email/approve/ufo/ufo_stylesheet.css");
      require($file);
      return ob_get_clean();
  }

  include("ufo_engine.php");

?>
