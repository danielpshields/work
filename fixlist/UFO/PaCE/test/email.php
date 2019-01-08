<?php

// vars


function messageContent($file) {
    ob_start();
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $formType = $_POST['formType'];
    require($file);
    return ob_get_clean();
}

$message = messageContent("test/content.php");

include("test/engine.php");

?>
