<?php

function messageContent($file) {
    ob_start();
    // $firstName = $_POST['firstName'];
    // $email     = $_POST['email'];
    // $paceMajor = $_POST['paceMajor'];
    // $semester  = $_POST['semester'];
    // $phone     = $_POST['phone'];
    $css = file_get_contents("../../email/receipt/campus/stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("engine.php");
?>
