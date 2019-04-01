<?php
  require("../include/db.php");
  $root       = "../";
  $page       = "notes";
  $pageName   = "Records: " . ucfirst($page);
  require("{$root}include/header/header.php");

  $get_id    = $_GET['id'];
  $get_email = $_GET['email'];

  if (isset($_POST['approveFromNotes'])) {
    $studentID     = $_POST['studentID'];
    $student_email = $_POST['studentEmail'];
    $updateApproval  = "UPDATE pace_transition SET submitted = 2, timeApproved = '$timeStamp' WHERE email = ";
    $updateApproval .= "'" . $student_email . "'";
    $sendUpdateApproval = mysqli_query($connection, $updateApproval);
    header("Location: notes.php?id=" . $studentID . "&email=" . htmlentities($student_email));
    // header("Location: https://google.com");
    exit;
    // echo $student_email;
  }

  if (isset($_POST['note_submit'])) {
    $get_id    = $_GET['id'];
    $get_email = $_GET['email'];
    $note = $_POST['studentNote'];
    $note = mysqli_real_escape_string($connection, $note);
    $writeQuery = "INSERT INTO pace_student_notes (studentID,	email,	note) VALUES ('{$get_id}','{$get_email}','{$note}')";
    $addNotes = mysqli_query($connection, $writeQuery);
    if (!$writeQuery) { die ("write query failed"); }
  }

  // print out the student's information from the transition section
  $query     = "SELECT * FROM pace_transition WHERE email = ";
  $query    .= "'" . $get_email . "'";
  $spit      = mysqli_query($connection, $query);
  if (!$spit) { die ("query failed"); }

  $displayNotes  = "SELECT * FROM pace_student_notes WHERE email = ";
  $displayNotes .= "'" . $get_email . "' ORDER BY id DESC";
  $showTheNotes = mysqli_query($connection, $displayNotes);
  if (!$showTheNotes) { die ("show the notes query failed"); }
  $scriptName = "notes";
?>
  <div class="notes_container">
      <div class="barrier">
        <div class="barrierHeader">
          <?php while($row = mysqli_fetch_assoc($spit)) {
            require("record_variables.php");
            $approvedTime  = $row['timeApproved'];
            $breakApproved = explode("|", $approvedTime);
            $date_approved = $breakApproved[0];
            $time_approved = $breakApproved[1];
            $approved = $date_approved . " " . $time_approved;
          ?>
          <?php
            if ($submitted == 0) {  ?>
            <p class="pending">pending</p>
          <?php } else if ($submitted == 1) { $studentSubmitted = true; ?>
            <?php ?>
            <p class="submitted">submitted</p>
          <?php } else if ($submitted == 2) { ?>
            <p class="approved">approved</p>
          <?php }
          $breakCreated = explode("|", $formCreated);
          $monthDay     = $breakCreated[0];
          $hourTime     = $breakCreated[1];

          ?>
          <p class="timeCreated"><?php echo $monthDay; ?></p>
        </div><!-- barrier header -->
        <div class="identifyVariables">
          <p id="ledeName">"<?php echo $row['name']; ?>"</p>
          <h3><?php echo $studentID; ?></h3>
          <p class="studentID"><?php echo $student_email; ?></p>
        </div>
        <?php include("guts.php"); ?>
        <?php
          if ($submitted == 1 || $submitted == 2) {
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
        <?php }?>
        <?php } ?>

<!-- approve from notes  -->

        <?php if ($studentSubmitted) { ?>
          <div id="approveFromNotes">
            <h3 class="blue">Approve Transition?</h3>
            <form action="notes.php?id=<?php echo $studentID; ?>&email=<?php echo htmlentities($student_email); ?>" method="post">
                <input type="hidden" name="studentID" value="<?php echo $studentID; ?>">
                <input type="hidden" name="studentEmail" value="<?php echo $student_email; ?>">
                <p>Would you like to approve <b><?php echo $student_email; ?></b> for transition?</p>
                <input id="approveStatement" class="checkBox" type="checkbox" name="approve" value="" required>
              <input class="submitButton" type="submit" name="approveFromNotes" value="submit">
            </form>
          </div><!-- approve from notes -->
        <?php } ?>
      </div><!-- barrier End left side -->

<!-- notes  -->

      <div id="notes" class="inputShell">
        <form action="notes.php?id=<?php echo $_GET['id']; ?>&email=<?php echo $_GET['email']; ?>" method="post">
          <h3>Note: <?php echo $currentMonthDay . " " . $currentHourTime; ?></h3>
          <textarea name="studentNote" rows="8" cols="80" placeholder="insert note here..." required></textarea>
          <input class="submitButton" type="submit" name="note_submit" value="submit note">
        </form>
        <div class="notes_records">
          <h4>Notes / Records</h4>
          <ol reversed>
            <?php while($row = mysqli_fetch_assoc($showTheNotes)) { ?>
            <li>
              <dl class="">
                <dt><p><i><?php echo $row['date']; ?></i></p></dt>
                <dd><p><?php    echo $row['note']; ?></p></dd>
              </dl>
            </li>
          <?php } ?>
          </ol>


          <?php if ($submitted) {} ;?>
          <div id="history_container">

            <table id="history">
              <thead>
                <tr>
                  <th colspan="2">Ticket History</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ticket created</td>
                  <td><?php echo $monthDay . " " . $hourTime; ?></td>
                </tr>
                <tr>
                  <td>student submitted</td>
                  <td><?php echo $monthDay_submitted . " " . $hourTime_submitted; ?></td>
                </tr>
                <tr>
                  <td>advisor approved</td>
                  <td><?php echo $approved; ?></td>
                </tr>
              </tbody>
            </table>
          </div><!-- history container -->
        </div>
        <!--
        the history should track here:
          - ticket created    : $time
          - student submitted : $time
          - advisor approved  : $time
        -->
      </div> <!-- input notes -->
    </div><!-- notes Container -->



<?php require("{$root}include/footer.php") ;?>
