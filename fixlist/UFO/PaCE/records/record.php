<?php
  require("../include/db.php");
  $root  = "../";
  $page  = "layout";
  $style = "record";
  $dataPage = "all";
  $pageName = "Records: Search Results";
  require("{$root}include/header/header.php");
?>
<?php
  if (isset($_POST['submitSearchFor'])) {
    $searchTerm = $_POST['searchFor'];
  }
  $searchForRecord = "SELECT * FROM pace_transition WHERE email = '{$searchTerm}'";
  $checkRecords    = mysqli_query($connection, $searchForRecord);
  if (!$checkRecords) {die("Query Failed: search for records");}
  while ($row = mysqli_fetch_assoc($checkRecords)) {
    $db_email = $row['email'];
    if ($searchTerm === $db_email) {
      $recordMatchExists = true;
      include("{$root}include/variables.php");
    }
  }
?>
    <div id="page_container">
      <div id="content_container">

        <?php if ($recordMatchExists) { ?>

          <h2>Record: <u><?php echo $db_email; ?></u></h2>

          <div class="barrier">
            <div class="barrierHeader">
              <?php
                  $approvedTime  = $row['timeApproved'];
                  $breakApproved = explode("|", $approvedTime);
                  $date_approved = $breakApproved[0];
                  $time_approved = $breakApproved[1];
                  $approved = $date_approved . " " . $time_approved;
                ?>
                <?php
                  if ($submitted == 0) {  ?>
                  <p class="pending">pending</p>
                <?php } else if ($submitted == 1) { ?>
                  <?php $studentSubmitted = true; ?>
                  <p class="submitted">submitted</p>
                <?php } else if ($submitted == 2) { ?>
                  <p class="approved">approved</p>
                <?php } else if ($submitted == 3) { ?>
                  <?php $studentSubmitted = true; ?>
                  <p class="ufoSelected">UF Online</p>
                <?php } else if ($submitted == 4) { ?>
                  <p class="ufoApproved">approved</p>
                <?php }
                $breakCreated = explode("|", $formCreated);
                $monthDay     = $breakCreated[0];
                $hourTime     = $breakCreated[1];
                ?>
                <p class="timeCreated"><?php echo $monthDay; ?></p>
              </div><!-- barrier header -->


              <div class="identifyVariables">
                <p id="ledeName">"<?php echo ucfirst($db_name); ?>"</p>
                <h3><?php echo $db_ID; ?></h3>
                <p class="studentID"><?php echo $db_email; ?></p>
              </div>
              <?php include("{$root}/include/guts.php"); ?>
              <?php
                if ($submitted == 1) {
                  $break_submitted = explode("|", $formSubmitted);
                  $monthDay_submitted = $break_submitted[0];
                  $hourTime_submitted = $break_submitted[1];
                  ?>
                  <div class="formCreated">
                    <p>Student submitted: <b><?php echo $monthDay_submitted . "</b> at <b>" . $hourTime_submitted; ?></i></b></p>
                  </div><!-- form created -->
              <?php } else { ?>
                <div class="formCreated">
                  <p>ticket is pending</p>
                </div><!-- form created -->
              <?php } ?>

          </div><!-- barrier End left side -->

        <?php } else { ?>
          <p>no record was found</p>

        <?php } // if record exists ?>
      </div><!-- tickets container -->
      <?php include("{$root}records/sortNav.php"); ?>
    </div><!-- records container -->


<?php require("{$root}include/footer.php") ;?>
