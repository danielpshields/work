<?php

function messageContent($file) {
    ob_start();

    $email    = $_POST['email'];
    $name     = $_POST['name'];

    $ufoMajor = $_POST['ufoMajor'];
    $phone    = $_POST['phone'];

    // this echo will send within the email
    echo "email makes it out!";

    $css = file_get_contents("../../email/receipt/online/stylesheet.css");
    require($file);
    return ob_get_clean();
}

// this echo prints to the page
echo "outside function";
include("engine_online.php");

?>
