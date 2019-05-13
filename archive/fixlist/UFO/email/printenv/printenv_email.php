<?php
function messageContent($file, $variables) {
    global $root;
    ob_start();
    foreach ($variables as $key => $value) { ?>
      <p><?php echo $key . " " . $value . "\n" . "\n"; ?></p>
      <?php
    }
    $css = file_get_contents("{$root}email/printenv/printenv_stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("printenv_engine.php");
?>
