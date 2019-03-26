<?php
  $root  = "../";
  $path  = "";
  $title = "Petitions";
  $page  = "petitions";
  $style = "index";
  require("{$root}include/header.php");
 ?>

  <div class="page">
    <?php include("{$path}include/nav.php"); ?>

    <div class="shell">
      <ul>
        <li><a href="<?php echo $path; ?>create.php">Create Petition</a></li>
      </ul>
    </div>


  </div><!-- page -->


<?php require("{$root}include/footer.php") ;?>
