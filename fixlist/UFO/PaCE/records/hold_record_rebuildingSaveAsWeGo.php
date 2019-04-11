<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  $dataPage = "all";
  $pageName = "Records: Search Results";
  require("{$root}include/header/header.php");
?>
<?php
  if (isset($_POST['submitSearchFor'])) {
    $searchTerm = $_POST['searchFor'];
  }
  $searchForRecord = "SELECT * FROM pace_transition";
  $checkRecords    = mysqli_query($connection, $searchForRecord);
  if (!$checkRecords) {die("Query Failed: search for records");}
  while ($row = mysqli_fetch_assoc($checkRecords)) {
    $db_email = $row['email'];
    if ($searchTerm === $db_email) {
      $recordExists = true;
    }
  }
?>

    <div id="records_container">
      <div id="tickets_container">
        <?php if ($recordExists) { ?>
          <h2><?php echo $searchTerm; ?></h2>

        <?php } else { ?>
          <p>no record was found</p>

        <?php } // if record exists ?>
      </div><!-- tickets container -->
      <?php include("{$root}records/sortNav.php"); ?>
    </div><!-- records container -->


<?php require("{$root}include/footer.php") ;?>
