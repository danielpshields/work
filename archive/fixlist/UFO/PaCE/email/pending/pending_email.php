<?php
$emailType = "pending_";
function messageContent($file) {
    global $root;
    global $emailType;
    ob_start();
    global $recipeintName;
    $css = file_get_contents("{$root}email/pending/{$emailType}stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("{$emailType}engine.php");
?>
