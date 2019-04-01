<?php

function messageContent($file) {
    ob_start();

    $email    = $_POST['email'];
    $name     = $_POST['name'];

    $ufoMajor = $_POST['ufoMajor'];
    $phone    = $_POST['phone'];

    $majors = array(
      "anthropology"    => "Anthropology",
      "biology"         => "Biology",
      "computerScience" => "Computer Science",
      "criminology"     => "Criminology",
      "geography"       => "Geography",
      "geology"         => "Geology",
      "psychology"      => "Psychology",
      "sociology"       => "Sociology"
    );

    foreach ($majors as $key => $value) {
      if ($ufoMajor == $key) {
        $ufoMajor = $value;
      }
    }
    // this echo will send within the email
    //echo "email makes it out!";

    $css = file_get_contents("../../email/receipt/online/online_stylesheet.css");
    require($file);
    return ob_get_clean();
}

// this echo prints to the page
//echo "outside function";
include("online_engine.php");

?>
