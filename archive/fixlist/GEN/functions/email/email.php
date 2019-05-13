<?php
//the entire function is essentially an INCLUDES, notably: require($file) through engine.php;

function messageContent($file) {
    ob_start();

    $name     = $_POST['name'];
    $paceMajor = $_POST['paceMajor'];
    $semester  = $_POST['semester'];
    $phone     = $_POST['phone'];

    //file get contents has to come from the master calling document root
    $css = file_get_contents("../../email/stylesheet.css");
    // $css = file_get_contents("../../test/hope.html");
    $set = "set.php setting in the email";
    //includes in sent content
    echo $set;
    //pulls in the content.php file through
    require($file);
    return ob_get_clean();
}

// includes in where email is being called from
echo "hello world";
//names matter, can't be same as other in entire structure -- reference PHP manual
include("engine.php");
?>
