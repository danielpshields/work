<?php
  $root  = "../";
  $path  = "";
  $title = "Petition Records";
  $page  = "petitions";
  $style = "";
  require("{$root}include/header.php");
  $checkResults   = "SELECT * FROM ufo_petitions";
  $checkResultsDB = mysqli_query($connection, $checkResults);
  if (!$checkResultsDB) {
    die("Failed to read database");
  }
 ?>


  <div class="page">
    <?php include("{$path}include/nav.php"); ?>

    <?php if (mysqli_num_rows($checkResultsDB)) { ?>
      <ul>

      <?php while ($row = mysqli_fetch_assoc($checkResultsDB)) {
        include("{$path}include/variables.php"); ?>
        <li><?php echo $db_advisor_name; ?></li>
      <?php } ?>

      </ul>


    <?php } else { ?>
      <p>there are zero records</p>
    <?php } ?>
  </div><!-- page -->


<?php require("{$root}include/footer.php") ;?>
