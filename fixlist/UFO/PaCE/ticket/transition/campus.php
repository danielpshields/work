<?php
  $root        = "../../";
  $page        = "campus";
  $pageName    = "Transition: Campus";
  require("{$root}include/header/header.php");
  require("{$root}include/db.php");
  $query       = "SELECT * FROM pace_transition WHERE studentID = ";
  $query      .=  "'" . $UFID . "'";



  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  if (isset($_POST['submit'])) {
    $semester     = $_POST['semester'];
    $phone        = $_POST['phone'];
    $phone        = mysqli_real_escape_string($connection, $phone);
    $newQuery     = "UPDATE pace_transition SET ";
    $newQuery    .= " semester = ";
    $newQuery    .= "'" . $semester . "',";
    $newQuery    .= " phone = ";
    $newQuery    .= "'" . $phone . "',";
    $newQuery    .= " formSubmitted = ";
    $newQuery    .= "'" . $timeStamp . "',";
    $newQuery    .= " submitted = 1";
    $newQuery    .= " WHERE studentID = ";
    $newQuery    .= "'" . $UFID . "'";
    $spitNewQuery = mysqli_query($connection, $newQuery);
    require("../../email/receipt/campus/email.php");
    header("Location: success.php");
    exit;
  }
  //Variables FROM pace_transition Table pulled in
  include("{$root}include/stipulations/variables.php");
?>
<form action="campus.php" method="post">
  <!-- <input type="hidden" name="firstName" value="<?php //echo $firstName; ?>"> -->
  <input type="hidden" name="name" value="<?php echo $studentName; ?>">

  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="paceMajor" value="<?php echo $paceMajor; ?>">
  <div class="inputShell" id="paceMajor">
    <h3 class="orange">PaCE Major</h3>
    <p id="ledeGreeting">Hello, <u><?php echo $firstName; ?></u>!</p>
    <p>You are eligible to transition to campus! By proceeding with this form you are agreeing to the following major:</p>
    <table>
      <thead>
        <tr>
          <th>PaCE Major</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php
              if (empty($paceMajor)) {
                echo "<p>EMPTY pace major</p>";
              } else {
                echo ucfirst($paceMajor);
              }
            ?>
          </td>
        </tr>
      </tbody>
    </table>
    <input required class="checkBox" type="checkbox" name="majorPermission" value="majorPermission">
    <p id="changeMajorMessage"><i>If you no longer want to transition to campus in this major, please do not complete this form, and instead contact your <a href="mailto:nraymond@advising.ufl.edu">academic advisor</a>.</i></p>
  </div><!-- input shell -->
  <div class="inputShell">
    <h3 class="blue">Transition Semester</h3>
    <p>I give permission for my advisor to transition me to campus enrollment in the PaCE major listed above for the Summer 2019 term</p>
    <input class="checkBox" type="checkbox" name="semester" value="summer19">
    <p><i>Please note that you can take fully online classes as a campus student once you have transitioned to campus</i>.</p>
    <p><i>Classes taken online through UF will count towards the 9 hour Summer enrollment requirement</i>.</p>
  </div><!-- permission input shell -->
  <?php
  // dont print if there's no conditions set -- PaCE Major ABOVE
  if ($aConditionExists) {  //close bottom bracket
  ?>
  <div id="stipulations" class="inputShell">
    <h3 class="orange">Conditions</h3>
    <div id="stipulation_message">
    <p><b><?php echo ucfirst($firstName); ?></b>, you must meet the following conditions in order to transition to campus:</p>
    <?php if (!empty($stipulation)) { ?>
      <input type="hidden" name="condition_general" value="<?php echo $stipulation; ?>">
    <p id="stipulationStatement"><?php echo ucfirst($stipulation); ?></p>
    <?php } ?>
    </div><!-- stipulation message -->
    <div id="stipulation_table">
    <?php if ($courseExists) { ?>
    <table id="courseGradeTable">
      <thead>
        <tr>
          <th>Course</th>
          <th>Minimum Grade</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($course)) { ?>
          <input type="hidden" name="course" value="<?php echo $course; ?>">
          <input type="hidden" name="grade" value="<?php echo $grade; ?>">
        <tr>
          <td><?php echo $course; ?></td>
          <td><?php echo $grade; ?></td>
        </tr>
        <?php
        } //course grade 1
        if (!empty($course2)) { ?>
          <input type="hidden" name="course_two" value="<?php echo $course2; ?>">
          <input type="hidden" name="grade_two" value="<?php echo $grade2; ?>">
        <tr>
        <td><?php echo $course2; ?></td>
        <td><?php echo $grade2; ?></td>
        </tr>
        <?php
        } // course grade 2
        if (!empty($course3)) { ?>
          <input type="hidden" name="course_three" value="<?php echo $course3; ?>">
          <input type="hidden" name="grade_three" value="<?php echo $grade3; ?>">
        <tr>
        <td><?php echo $course3; ?></td>
        <td><?php echo $grade3; ?></td>
        </tr>
        <?php
        } // course grade 3
        if (!empty($course4)) { ?>
          <input type="hidden" name="course_four" value="<?php echo $course4; ?>">
          <input type="hidden" name="grade_four" value="<?php echo $grade4; ?>">
        <tr>
        <td><?php echo $course4; ?></td>
        <td><?php echo $grade4; ?></td>
        </tr>
        <?php } // course grade 4 ?>
        </tbody>
        </table>
        <?php
        } // if course grade exists

        if ($gpasExist) {
        ?>
      <table>
        <thead>
          <tr>
            <th colspan="2">Overall GPAs</th>
          </tr>
        </thead>
        <tbody>
        <?php if (!empty($gpaMajor)) { ?>
        <tr>
          <td>Major</td>
          <td><?php echo $gpaMajor; ?></td>
          <input type="hidden" name="gpa_Major" value="<?php echo $gpaMajor; ?>">
        </tr>
        <?php
        }
        if (!empty($gpaUF)) { ?>
        <tr>
          <td>UF</td>
          <td><?php echo $gpaUF; ?></td>
          <input type="hidden" name="gpa_UF" value="<?php echo $gpaUF; ?>">
        </tr>
        <?php } ?>
      </tbody>
    </table><!-- GPAs table -->
    <?php } ?>
    </div><!-- stipulation tables -->
    <p>If I do not meet these conditions, my transition to campus will be rescinded.</p>
    <input class="checkBox" type="checkbox" name="rescind_transition" value="rescind_transition" required>
  </div><!-- stipulation input shell -->
  <?php } ?>

  <div class="inputShell">
    <h3 class="blue">UF Online</h3>
    <p><b>1.</b> Please check the box to indicate that I understand that, if I want to return to UF Online in the future, I understand that I must reapply to UF Online.</p>
    <input class="checkBox" type="checkbox" name="ufo_future" value="ufo_future" required>
    <div class="divider"></div>
    <p><b>2.</b> Please check the box to acknowledge that I understand that, if I am currently enrolled in any UF Online courses for upcoming semesters, I will drop those courses before I submit this contract to my advisor.</p>
    <input class="checkBox" type="checkbox" name="ufo_dropCourses" value="ufo_dropCourses" required>
    <div class="divider"></div>
    <p><b>3.</b> Please check the box to acknowledge that I understand that, if I do not drop the UF Online courses before I transition to campus, I will be held financially responsible for these classes, since I will not be able to take UF Online classes once I have transitioned to campus.</p>
    <input class="checkBox" type="checkbox" name="ufo_finances" value="ufo_finances" required>
  </div><!-- input shell -->
  <div class="inputShell">
    <h3 class="orange">PaCE</h3>
    <p>Please check the box to acknowledge that, if I want to start on campus in a non-PaCE major, I understand that I must apply to campus as a transfer student in that major by the published transfer deadline, and be accepted into that major.</p>
    <p>The PaCE program guarantees a seat on campus in my selected PaCE major by meeting the general and major specific transition requirements, and there is no guarantee that I'll be able to change to a different major (PaCE or non-PaCE) after I transition to campus.</p>
    <input class="checkBox" type="checkbox" name="major_nonPace" value="major_nonPace" required>
  </div><!-- input shell -->
  <div class="inputShell">
    <h3 class="blue">Terms of Transition</h3>
    <p>In order to transition to campus, you must meet all conditions of the Pathway to Campus Enrollment (PaCE) Contract:</p>
    <ul>
    <li>Earn a total of 60 credits (up to 45 credits may come from previous college credits earned through AP, IB, Dual Enrollment, or other accelerated methods)</li>
    <li>Enroll in UF Online for at least two semesters and earn at least 15 credit hours through UF Online</li>
    <li>Complete all transition requirements with grades for your selected PaCE major</li>
    <li>The University of Florida reserves the right to ask for additional information and the right to deny the request for transition to campus.</li>
    <li>If you have any questions about your eligibility or the transition process, please contact your academic advisor.</li>
    </ul>
    <p>I understand the terms of transition:</p>
    <input class="checkBox" type="checkbox" name="transitionTerms" value="transitionTerms" required>
  </div><!-- input shell -->
  <div class="inputShell">
    <h3 class="orange">Failure Notice</h3>
    <p>If do not pass my current classes (including failing a class or withdrawing from a class), or fail to meet the transition requirements in any way, I will inform my advisor: <a href="mailto:nraymond@advising.ufl.edu">Nicole Raymond</a>. This may impact my transition eligibility, so I will discuss the implications with my advisor.</p>
    <input class="checkBox" type="checkbox" name="failure_notice" value="failure_notice" required>
  </div><!-- input shell -->
  <div class="inputShell">
    <h3 class="blue">Contact Information</h3>
    <p>If your advisor needs to reach out to you regarding this form, please provide a preferred phone number.</p>
    <p><i>Your advisor will reach out to your UF email address as well if there are any updates regarding your transition to campus.</i></p>
    <input type="text" name="phone" value="" placeholder="( *** ) *** - ****" required>
    <label for="phoneNumber">Phone Number</label>
  </div><!-- input shell -->

  <input class="submitButton" type="submit" name="submit" value="Submit">
</form>
<?php include("{$root}include/footer.php"); ?>
