<?php
  $name = "test";
  $value = 45;
  $expire = time() + (60*60*24*7*10);
  setcookie($name, $value, $expire);
?>
<?php $title = "cookies"; $stylesheet = $title; include("../include/header.php"); ?>

  <?php
    $test = isset($_COOKIE['test']) ? $test = $_COOKIE['test'] : $test = "";
    echo $test;
  ?>


<?php include("../include/footer.php"); ?>
