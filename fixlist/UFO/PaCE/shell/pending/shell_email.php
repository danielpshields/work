<?php
$emailType = "shell_";
function messageContent($file) {
    global $root;
    ob_start();
    global $name;
    $css = file_get_contents("{$root}shell/pending/{$emailType}stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("{$emailType}engine.php");
?>
