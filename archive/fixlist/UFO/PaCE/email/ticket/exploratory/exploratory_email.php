<?php
function messageContent($file) {
    global $root;
    ob_start();
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $css = file_get_contents("{$root}email/ticket/exploratory/exploratory_stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("exploratory_engine.php");
?>
