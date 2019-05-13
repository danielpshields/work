<?php
  $root = "";
  $page = "index";
  include("{$root}include/header.php");
?>

  <ul>
    <li><a href="<?php echo $root; ?>minutes/index.php">minutes</a></li>
    <li><a href="<?php echo $root; ?>people/index.php">people</a></li>
  </ul>


  <div id="actionSection">
    <h3>Action Items</h3>
    <p>There are currently <i>zero</i> action items</p>
  </div><!-- action section -->



<?php include("{$root}include/footer.php"); ?>
