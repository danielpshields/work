<?php
  $root = "../../";
  require("{$root}include/db.php");
  $page = "records";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $scriptName = $page;
  $query = "SELECT * FROM pace_transition WHERE submitted = 0 ORDER BY formCreated DESC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  include("{$root}include/header/admin_nav.php");
?>


  <div id="records_container">
    <div id="tickets_container">
      <h2>Pending Tickets</h2>
      <?php
      $contacted      = "SELECT * FROM pace_transition WHERE submitted = 0 AND contacted = 0";
      $contactedQuery = mysqli_query($connection, $contacted);
      if (mysqli_num_rows($contactedQuery)) { ?>
        <div id="emailPendingLink">
          <p><a href="<?php echo $root; ?>records/pending.php">Email Pending Students Page</a></p>
        </div><!-- email pending students link -->
      <?php } ?>
    <?php
    // rows
    while($row = mysqli_fetch_assoc($spitResults)) {
      $conditionsExist = true;
      // columns
      require("{$root}records/record_variables.php");
      $breakCreated = explode("|", $formCreated);
      $monthDay     = $breakCreated[0];
      $hourTime     = $breakCreated[1];
      ?>
        <div class="barrier">
          <!-- <dl>
            <dt> -->
              <div class="barrierHeader">
                <?php
                  if ($submitted == 0) { $formUpdated = false; ?>
                  <p class="pending">pending</p>
                <?php }  else if ($submitted == 1) { $formUpdated = true;  ?>
                  <p class="submitted">submitted</p>
                <?php } else if ($submitted == 2)  { $formUpdated = true; ?>
                  <p class="approved">approved</p>
                <?php } else if ($submitted == 3) { $formUpdated = true;  ?>
                  <p class="ufoSelected">UF Online</p>
                <?php }?>
                <div class="studentIdentification">
                  <p><?php echo $studentID; ?></a></p>
                  <h3><?php echo $student_email; ?></h3>
                </div><!-- student Identification -->
                <p class="timeCreated"><?php echo $monthDay; ?></p>
              </div><!-- barrier header -->
              <?php
                if ($formUpdated) {
                  $break_submitted = explode("|", $formSubmitted);
                  $monthDay     = $break_submitted[0];
                  $hourTime     = $break_submitted[1];
                  ?>
                  <div class="formCreated">
                    <p>student submitted: <b><?php echo $monthDay . "</b> at <b>" . $hourTime; ?></i></b></p>
                  </div><!-- form created -->
              <?php } ?>
            <div class="notes">
              <?php
              $loopNotes    = "SELECT * FROM pace_student_notes WHERE email = ";
              $loopNotes   .= "'" . $student_email . "'";
              $getNoteCountQuery = mysqli_query($connection, $loopNotes);
              ?>
              <p class="note_theConstant"><a href="<?php echo $root; ?>records/notes.php?id=<?php echo $studentID; ?>&email=<?php echo htmlentities($student_email); ?>"><?php
              $i = 0;
              while ($thisRow = mysqli_fetch_assoc($getNoteCountQuery)) {
                 $i++;
              }
              if ($i > 0) {
                echo "notes (" . $i . ")";
              } else {
                echo "new note";
              }
              ?>
            </a></p>
              <div class="note_variants">
                <div class="variantsContainer">
                  <p>null</p>
                  <p>
                    <?php
                      if ($submitted == 0) {
                        echo "pending";
                      } else if ($submitted == 1) {
                        echo "<a href=\"approve.php?id=" . $studentID . "&email=" . htmlentities($student_email) . "\"><span class=\"approved\"><b>approve</b></span></a>";
                      } else if ($submitted == 2 || $submitted == 3)  {
                        echo "approved";
                      }
                    ?>
                  </p>
                </div><!-- variants container -->
              </div><!-- note variants -->
            </div>
          <!-- </dl> -->
        </div><!-- master result Barrier -->

        <?php if (empty($row)) { echo "empty row"; } ?>
        <?php } ?><!-- end Grande while $row assoc -->
        <?php if (!$conditionsExist) { ?>
          <div class="inputShell">
            <h3 class="black">Pending Tickets</h3>
            <p class="bigNumber">0</p>
            <p>Zero tickets are pending</p>
          </div>
      <?php } ?>

    </div><!-- tickets Container -->

    <?php include("{$root}records/sortNav.php"); ?>


  </div><!-- records Container -->


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
