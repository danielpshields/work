<?php include("../include/header.php"); ?>
<h2>First</h2>
<ul>
  <?php
    $page = "second.php";
    $i = 1;
    $links = array("Members", "Guests", "Sign Up");

    foreach ($links as $text) {
      echo "<li><a href=\"{$page}?id={$i}\">{$text}</a></li>";
      $i++;
    }
  ?>
</ul>

<?php include("../include/footer.php"); ?>
