<?php
  $path = "../";
  $page = "docs";
  require_once("{$path}include/header.php");
?>

  <h2>Dean's Medal</h2>

  <h3>Fall</h3>
  <ul>
    <li>Proposal</li>
  </ul>

  <?php
    $role = "joe";
    $frequency = "1";
    include("{$path}/include/table.php");
  ?>

<?php include_once("{$path}include/footer.php"); ?>
