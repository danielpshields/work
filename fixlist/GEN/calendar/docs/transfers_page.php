<?php
  $path = "../";
  $page = "docs";
  require_once("{$path}include/header.php");
?>

  <h2>Transfers Page</h2>

  <ol>
    <li>updates</li>
    <li>Transfer chats (info)</li>
  </ol>

  <?php
    $frequency = "&nbsp;";
    $role = "lou";
    include("{$path}include/table.php");
   ?>

<?php include_once("{$path}include/footer.php"); ?>
