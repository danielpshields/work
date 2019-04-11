<?php
  $root = "../../";
  require("{$root}include/db.php");
  $page = "layout";
  $style = "record";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $scriptName = "majors";
  $query = "SELECT * FROM pace_transition WHERE submitted = 0 ORDER BY formCreated DESC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>

  <div id="page_container">
    <div id="content_container">
      <h2>Pending Tickets</h2>
      <?php require("{$root}records/loop_db.php"); ?>
    </div><!-- tickets Container -->

    <?php include("{$root}records/sortNav.php"); ?>


  </div><!-- records Container -->


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
