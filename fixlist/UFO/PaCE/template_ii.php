<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  $dataPage = "all";
  $pageName = "Records: Search Results";
  require("{$root}include/header/header.php");
  // why are there two script names?
  include("{$root}include/credentials.php");
?>
<?php
if (isset($_POST['submitSearchFor'])) {
  $searchTerm = $_POST['searchFor'];
}
?>

<div id="records_container">
  <div id="tickets_container">
    <h2><?php echo $searchTerm; ?></h2>


  </div><!-- tickets container -->
  <?php include("{$root}records/sortNav.php"); ?>
</div><!-- records container -->
