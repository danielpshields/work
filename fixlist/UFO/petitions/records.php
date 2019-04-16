<?php
  $root       = "../";
  $path       = "";
  $title      = "Petition Records";
  $page       = "petitions";
  $style      = "records";
  $footerName = "CLAS UF Online Petition";
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
      <?php while ($row = mysqli_fetch_assoc($checkResultsDB)) {
        include("{$path}include/variables.php"); ?>
        <div class="record">
          <?php
            if (isset($db_student_name)) {
              echo $db_student_name;
            } else {
              echo "STUDENT RECORD NOT FOUND";
            }
          ?> created by <?php echo $db_advisor_name; ?>
        </div><!-- record -->
      <?php } ?>
    <?php } else { ?>
      <p>there are zero records</p>
    <?php } ?>
  </div><!-- page -->


<?php require("{$root}include/footer.php") ;?>
