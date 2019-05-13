<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  $dataPage = "all";
  $pageName = "Records: Search Results";
  require("{$root}include/header/header.php");
  // why are there two script names?
  include("{$root}include/credentials.php");
  $searchForRecord = "SELECT * FROM pace_transition WHERE email = 'acatalano2@ufl.edu'";
  $checkRecords    = mysqli_query($connection, $searchForRecord);
  if (!$checkRecords) {die("Query Failed: search for records");}
  while ($row = mysqli_fetch_assoc($checkRecords)) {
    $db_email = $row['email'];
    if (true) {
      include("{$root}include/variables.php");
    }
  }
?>


<div id="records_container">
  <div id="tickets_container">
    <h2>Shell</h2>

  </div><!-- tickets container -->
  <?php include("{$root}records/sortNav.php"); ?>
</div><!-- records container -->
