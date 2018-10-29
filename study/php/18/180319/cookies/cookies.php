<?php
$name = "test";
$value = 45;
$expire = time() + (60 * 60 * 24 * 7); // add seconds
//setcookie($name, $value, $expire);
?>
<?php $title = "Cookies"; $stylesheet = ""; include("../include/header.php"); ?>
<pre>
  <?php
    $test = $_COOKIE['test'];
    echo $test;
  ?>
</pre>
<?php include("../include/footer.php"); ?>
