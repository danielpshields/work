<?php
  $root = "../../";
  require("{$root}include/db.php");
  $page = "records";
  $pageName = "Records: Transition";
  $dataPage = "submitted";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $scriptName = $page;
  $query = "SELECT * FROM pace_transition WHERE submitted = 1 ORDER BY formSubmitted DESC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  include("{$root}include/header/admin_nav.php");
?>


  <div id="records_container">
    <div id="tickets_container">
      <h2>Submitted Tickets</h2>
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
          <dl>
            <dt>
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
                  <p class="studentID"><?php echo $studentID; ?></p>
                  <h3><?php echo $student_email; ?></h3>
                </div><!-- student Identification -->
                <p class="timeCreated"><?php echo $monthDay; ?></p>
              </div><!-- barrier header -->
            </dt><!-- Barrier Header Dropdown -->
            <dd>
              <?php include("{$root}records/guts.php") ?>
              <?php
                if ($formUpdated) {
                  $break_submitted = explode("|", $formSubmitted);
                  $monthDay     = $break_submitted[0];
                  $hourTime     = $break_submitted[1];
                  ?>
                  <div class="formCreated">
                    <p>student submitted: <b><?php echo $monthDay . "</b> at <b>" . $hourTime; ?></i></b></p>
                  </div><!-- form created -->
              <?php } else { ?>
                <div class="formCreated">
                  <p>ticket is pending</p>
                </div><!-- form created -->
              <?php }?>
            </dd>
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
                  <p><?php echo $studentID; ?></p>
                  <p>
                    <?php
                      if ($submitted == 0) {
                        echo "pending";
                      } else if ($submitted == 1) {
                        echo "<a href=\"" . $root . "records/approve.php?id=" . $studentID . "&email=" . htmlentities($student_email) . "\"><span class=\"approved\"><b>approve</b></span></a>";
                      } else if ($submitted == 2 || $submitted == 3)  {
                        echo "approved";
                      }
                    ?>
                  </p>
                </div><!-- variants container -->
              </div><!-- note variants -->
            </div>
          </dl>
        </div><!-- master result Barrier -->

        <?php if (empty($row)) { echo "empty row"; } ?>
        <?php } ?><!-- end Grande while $row assoc -->
        <?php if (!$conditionsExist) { ?>
        <div class="inputShell">
          <h3 class="black">Submitted Tickets</h3>
          <p class="bigNumber">0</p>
          <p>Zero tickets are currently submitted</p>
          <ul>
            <li><b><a href="mailto:acatalano2@ufl.edu?subject=Yo, Let's make that email function&body=Yo it's time to make the email timer reminder email function.">Send a reminder email?</a></b></li>
          </ul>
          <p><i>add records</i></p>
        </div>
      <?php } ?>

    </div><!-- tickets Container -->

    <?php include("{$root}records/sortNav.php"); ?>


  </div><!-- records Container -->


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
