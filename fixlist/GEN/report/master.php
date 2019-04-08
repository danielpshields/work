
<h3>Redirects</h3>
<ul>
  <li>PHP redirects work</li>
</ul>

<h3>TabIndex</h3>
<input type="" tabindex="<?php echo $tabIndex++; ?>">


<h3>Icons</h3>
flaticon</a>


<h3> pregmatch vs. strpos</h3>
<?php
//  get email
if (preg_match('/@.*./', $value) == true) {
  $student_email = $value;
}
?>


<h3>Print Between Two Function:</h3>
<?php

  function getName($post, $start, $end){
    $post = " " . $post;
    $initial   = strpos($post,"Name:");
    if ($initial == 0) return '';
    $initial   = $initial + strlen("Name:");
    $inbetween = strpos($post,"Major:",$initial) - $initial;
    return substr($post,$initial,$inbetween);
  }

?>


<h3>PrintEnv Email();</h3>
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


  foreach ($variables as $key => $value) {
    echo $key . " : " . $value . "<br>";
  }

?>
