<?php
function messageContent($file) {
    ob_start();
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $css = file_get_contents("../email/thankyou/thankyou_stylesheet.css");
    require($file);
    return ob_get_clean();
}
include("thankyou_engine.php");
?>
