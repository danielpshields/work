<?php
  $path = "../";
  $page = "docs";
  require_once("{$path}include/header.php");
?>

  <h2>Anderson Scholars</h2>
  <ul>
    <li>Calendar Proposal</li>
    <li>Award and Faculty Nomination email</li>
    <li>Reminder Email</li>
  </ul>


  <?php
    $role = "tim";
    $frequency = "1";
    include("{$path}/include/table.php");
  ?>

<?php include_once("{$path}include/footer.php"); ?>
