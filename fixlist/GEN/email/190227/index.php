<?php
// for submitting a standard message passing in variables set from a form
function messageContent($file) {
    ob_start();
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $css = file_get_contents("test/stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("test/engine.php");

?>
