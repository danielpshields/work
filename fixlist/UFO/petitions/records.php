<?php
  $root  = "../";
  $path  = "";
  $title = "Petition Records";
  $page  = "petitions";
  $style = "";
  require("{$root}include/header.php");
 ?>


  <div class="page">
    <?php include("{$path}include/nav.php"); ?>
    <?php if (true) { ?>
      <p>there are zero records</p>
    <?php } ?>
  </div><!-- page -->


<?php require("{$root}include/footer.php") ;?>
