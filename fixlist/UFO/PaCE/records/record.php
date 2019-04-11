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
  $searchForRecord = "SELECT * FROM pace_transition WHERE email = '{$searchTerm}' OR studentID = '{$searchTerm}'";
  $checkRecords    = mysqli_query($connection, $searchForRecord);
  if (!$checkRecords) {die("Query Failed: search for records");}
  // check the records for a match of email or student id
  while ($row = mysqli_fetch_assoc($checkRecords)) {
    $db_email = $row['email'];
    $db_ID    = $row['studentID'];
    if ($searchTerm === $db_email || $searchTerm == $db_ID) {
      $recordMatchExists = true;
      include("{$root}include/variables.php");
    }
  }
?>
    <div id="page_container">
      <div id="content_container">

        <h2 id="recordSlug">Record: <?php if (!$recordMatchExists) { echo "\"" . $searchTerm . "\""; } else { ?> <a href="<?php echo $root . 'records/notes.php?id='. $db_ID . '&email=' . $db_email; ?>"><u><?php echo $db_email; ?></u></a><?php } ?></h2>

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

        <?php } else if ($searchTerm == "whoIS") { ?>
          <div class="inputShell">

          <h3 class="black"><?php
            if (isset($whoIS)) {
              echo $whoIS;
            } else {
              echo "print_env";
            }
          ?></h3>
          <p style="font-family: monospace;">
            <?php
              echo $_SERVER['HTTP_UFSHIB_BUSINESSNAME'] . "<br>";
              echo $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'] . "<br>";
              echo $_SERVER['HTTP_UFSHIB_GIVENNAME'] . "<br>";
              echo $_SERVER['HTTP_UFSHIB_UFID'] . "<br>";
              echo "(EPPN) " . $_SERVER['HTTP_UFSHIB_EPPN'] . "<br>";
              echo "(MAIL) " . $_SERVER['HTTP_UFSHIB_MAIL'] . "<br>";
            ?>
          </p>
        </div><!-- who is input shell -->
        <?php } else { ?>

          <div class="inputShell">
            <h3 class="black">No Ticket Found</h3>
            <p>Would you like to create a ticket for <?php echo $searchTerm; ?>?</p>
            <form action="<?php echo $root; ?>ticket/transition.php" method="post">
              <input type="hidden" name="record" value="<?php echo $searchTerm; ?>">
              <input class="submit_button" type="submit" name="createTicketFromRecord" value="Create Ticket">
            </form>
          </div><!-- input shell for no record found -->


        <?php } // if record exists ?>
      </div><!-- tickets container -->
    </div><!-- content container -->
    <?php include("{$root}records/sortNav.php"); ?>
  </div><!-- page container -->


<?php require("{$root}include/footer.php") ;?>
