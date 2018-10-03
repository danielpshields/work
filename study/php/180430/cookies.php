<?php
  $name = "test";
  $value = "hello";
  $expire = time() + (60*60*24*16);
  //kevin's recommendation for best removal of set name
  //setcookie($name, null, time() - 3600);
  setcookie($name, $value, $expire);
?>
<?php $title = "cookies"; $stylesheet = $title; include("../include/header.php"); ?>


  <?php
  $test = isset($_COOKIE['test']) ? $_COOKIE['test'] : "";
  echo $test;
  ?>


<?php include("../include/footer.php"); ?>
