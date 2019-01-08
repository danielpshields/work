<?php

function messageContent($file) {
    ob_start();
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $formType = $_POST['formType'];
    $css = file_get_contents("test/stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("test/engine.php");

?>
