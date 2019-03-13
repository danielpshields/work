<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  $scriptName = $page;
  $query = "SELECT * FROM pace_transition ORDER BY id ASC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  include("{$root}include/header/admin_nav.php");
?>

    <ul class="recordsView_desktop">
      <li><a href="<?php echo $root; ?>records/transition.php">all records</a></li>
      <li>advisor approved</li>
      <li>student submitted</li>
      <li>pending</li>
      <li>removed</li>
      <!-- <li style="color: #990000;">Case / PDF</li> -->
    </ul>

    <?php
    // rows
    while($row = mysqli_fetch_assoc($spitResults)) {
      $conditionsExist = true;
      // columns
      require("record_variables.php");
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
                <?php } ?>
                <div class="studentIdentification">
                  <p class="studentID"><?php echo $studentID; ?></p>
                  <h3><?php echo $student_email; ?></h3>
                </div><!-- student Identification -->
                <p class="timeCreated"><?php echo $monthDay; ?></p>
              </div><!-- barrier header -->
            </dt><!-- Barrier Header Dropdown -->
            <dd>
              <?php include("guts.php") ?>
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
                  <p><a href="<?php echo $root; ?>records/edit.php?id=<?php echo $studentID; ?>&email=<?php echo htmlentities($student_email); ?>">edit</a></p>
                  <p>
                    <?php
                      if ($submitted == 0) {
                        echo "pending";
                      } else if ($submitted == 1) {
                        echo "<a href=\"approve.php?id=" . $studentID . "&email=" . htmlentities($student_email) . "\"><span class=\"approved\"><b>approve</b></span></a>";
                      } else if ($submitted == 2)  {
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
          <h3 class="black">Records: Transition</h3>
          <p>No transition tickets have been created!</p>
          <ul>
            <li><b><a href="<?php echo $root; ?>ticket/transition.php">Make a transition ticket</a></b></li>
          </ul>
        </div>
      <?php } ?>


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
