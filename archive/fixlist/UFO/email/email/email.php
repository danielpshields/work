<?php
function messageContent($file) {
    global $root;
    ob_start();
    //set vars / will submit to email body
    $css = file_get_contents("{$root}email/email/stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("engine.php");
?>
