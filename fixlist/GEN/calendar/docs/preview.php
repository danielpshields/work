<?php
  $path = "../";
  $page = "docs";
  require_once("{$path}include/header.php");
?>

  <h2>Preview</h2>
  <ul>
    <li>Preview Team</li>
    <li>Preview Advisor Application</li>
  </ul>

  <?php
    $role = "sara";
    $frequency = "1";
    include("{$path}/include/table.php");
  ?>


<?php include_once("{$path}include/footer.php"); ?>
