<h3>$root vs. $path</h3>
<ul>
  <li>the rarity of path -- stylesheet -- probably images</li>
  <li>literally just contridicted myself -- path for includes variables </li>
</ul>

<h3>Save State while building GET string</h3>
<?php
  $string  = "?get=true";
  $string .= "&name=alex";
  $resetGet = $string;
  $string .= "&selection=mathematics";
 ?>
<li><a href="create.php?getSet=true<?php echo $resetGET; ?>">reset get</a></li>

<h3>Display only unchosen:</h3>
<?php
  $menuOptions = array();
  foreach ($selectedOptions as $n => $option) {
    foreach ($petitionOptions as $petition => $d) {
      if (!in_array($petition, $selectedOptions)) {
        array_push($menuOptions, $petition);
      }
    }
    break;
  }

  //had to use the old school way:
  $fruit['grape'] = 'fruit';

  $menuOptions[$petition] = $description;
?>


<h3>Foreach Naming Consistency && other logic names</h3>
<ul>
  <li>petition options = petition => description</li>
  <li>selected options = number   => option</li>
  <li>menu options     = name     => menu</li>
</ul>
<ul>
  <li>$db_advisor_name       = $row['advisor_name'];</li>
  <li>UFO/petitions/include/env.php -- and vars.php -- VARS.PHP!</li>
</ul>


<p>REF: petitions/create.php</p>
<h3>Naming: class and id</h3>
<ul>
  <li>leading with feature_name</li>
  <li>image_dualEnrollment</li>
  <li>button_addToDualForm</li>
</ul>

<h3>Turnary Operator to save submitted information</h3>
<ul>
  <li><input type="text" value="<?php echo isset($getRely) ? $get_name : $student_name; ?>"></li>
</ul>

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
<ul>
  <li>strpos, substr(1,2,3) is another way to do this -- link from lnote?</li>
</ul>

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

<h3>printenv added to search | UFO/PaCE/records/record.php search: "whoIS"</h3>
