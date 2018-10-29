<?php
 session_start();
?>
<?php $title = "sessions"; $stylesheet = $title; include("../include/header.php"); ?>

<?php

  $_SESSION['firstName'] = "alex";
  $name = $_SESSION['firstName'];
  echo $name;
?>

<pre><?php print_r($_SESSION); ?></pre>

<?php include("../include/footer.php"); ?>
