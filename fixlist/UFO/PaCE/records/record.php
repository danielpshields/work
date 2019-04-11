<?php
  require("../include/db.php");
  $root  = "../";
  $page  = "layout";
  $style = "record";
  $dataPage = "all";
  $pageName = "Records: Search Results";
  require("{$root}include/header/header.php");
  $scriptName = "majors";
?>
<?php
  if (isset($_POST['submitSearchFor'])) {
    $searchTerm = $_POST['searchFor'];
  } else if (isset($_GET['getFromMajors'])) {
    $searchTerm = $_GET['email'];
  } else {
    header("Location: {$root}records/transition.php");
    exit;
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

        <h2 id="recordSlug">Record: <a href="<?php echo $root . 'records/notes.php?id='. $db_ID . '&email=' . $db_email; ?>"><u><?php echo $db_email; ?></u></a></h2>

        <div id="tickets_container">

        <?php if ($recordMatchExists) { ?>

          <div class="barrier" id="individualRecord">
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
                <p class="studentEmail"><?php echo $db_email; ?></p>
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
                  <?php } else if ($submitted == 2 || $submitted == 4) { ?>
                    <div class="formCreated">
                      <p>Advisor Approved: <?php echo $approvedStamp; ?></p>
                    </div>
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
    </div><!-- content container -->
    <?php include("{$root}records/sortNav.php"); ?>
  </div><!-- page container -->


<?php require("{$root}include/footer.php") ;?>
