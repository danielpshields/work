<?php
  require("../include/db.php");
  $root = "../";
  $page = "record";
  $dataPage = "all";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $scriptName = "records";
  $query = "SELECT * FROM pace_transition";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  include("{$root}include/header/admin_nav.php");

  if (isset($_POST['approveFromNotes'])) {
    $studentEmail = $_POST['studentEmail'];
    // $student = $student;
    $updateSubmitted = "UPDATE pace_transition SET submitted = 2 WHERE email = '{$studentEmail}'";
    $update = mysqli_query($connection, $updateSubmitted);
    if (!$update) {die("update query failed"); }
    // $getRecord = "SELECT * FROM pace_transition WHERE email = '{$student}'";
    // $spitRecord = mysqli_query($connection, $getRecord);
    include("{$root}email/approve/approve_email.php");
    header("Location: {$root}records/record.php?studentEmail={$student}");
    exit;
  }

  if (isset($_POST['callRecord']) || $_POST['searchFor']) {

    $searchFor = $_POST['searchFor'];

    if (is_numeric($searchFor)) {
      $UID = $searchFor;
      $searchForID = true;
    } else {
      $student = $searchFor;
      $givenName = cleanEmail($searchFor);
      $searchForName = true;
    }

    $getRecord = "SELECT * FROM pace_transition WHERE email = '{$student}'";
    $spitRecord = mysqli_query($connection, $getRecord);

  } else if (isset($_POST['createTicket'])) {
    ob_start();
    $studentID   = $_POST['UFID_transition'];
    $name        = $_POST['firstName'];
    $email       = $_POST['email'];
    $stipulation = $_POST['stipulation'];
    $stipulation = mysqli_real_escape_string($connection, $stipulation);
    //test this as htmlentities or htmlspecialchars $stipulation = htmlentities($stipulation);
    $course      = $_POST['course'];
    $grade       = $_POST['grade'];
    $course2     = $_POST['course2'];
    $grade2      = $_POST['grade2'];
    $course3     = $_POST['course3'];
    $grade3      = $_POST['grade3'];
    $course4     = $_POST['course4'];
    $grade4      = $_POST['grade4'];
    $gpaMajor    = $_POST['gpaMajor'];
    $gpaUF       = $_POST['gpaUF'];
    $paceMajor   = $_POST['paceMajor'];
    $semester    = $_POST['semester'];
    $phone       = $_POST['phone'];
    //$formCreated = $_POST['formCreated'];
    $writeTicket  = "INSERT INTO pace_transition ";
    $writeTicket .= "(studentID,name,email,stipulation,course,grade,course2,grade2,course3,grade3,course4,grade4,gpaMajor,gpaUF,paceMajor,semester,phone,submitted,formCreated) VALUES ('{$studentID}', '{$name}', '{$email}','{$stipulation}','{$course}','{$grade}','{$course2}','{$grade2}','{$course3}','{$grade3}','{$course4}','{$grade4}','{$gpaMajor}','{$gpaUF}', '{$paceMajor}', '{$semster}', '{$phone}', '0','{$timeStamp}')";
    $newTicket = mysqli_query($connection, $writeTicket);
    if (!$newTicket) { die ("query failed"); }
    include("{$root}email/ticket/transition/transition_email.php");
    redirectTo("{$root}records/transition.php?major=" . $paceMajor . "&condition=" . $stipulation . "&gpaUF=" . $gpaUF . "&gpaMajor=" . $gpaMajor);
  } else {
    redirectTo("{$root}records/transition.php");
  }

?>

<script type="text/javascript" src="<?php echo $root; ?>scripts/showHideRecord.js"></script>

  <!-- no records and whoIS -->
  <div id="records_container">
    <div id="tickets_container">
      <?php if (!mysqli_num_rows($spitRecord) ) { ?>
        <div class="inputShell" id="noRecordMessage">
          <?php if ($searchFor == "whoIS") { ?>
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
          <?php } else { ?>
          <h3 class="black">No Record Found</h3>
          <?php if ($searchForName) { ?>
            <p class="lightSlugGraph">The UFID, <i><?php echo $student; ?></i>, does not have a ticket</p>
            <p>Create a ticket for <b id="createStudentTicket"><?php echo $student; ?></b>?</p>
          <?php } ?>
          <?php if ($searchForID) { ?>
            <p class="lightSlugGraph">The address, <i><?php echo $UID; ?></i>, does not have a ticket</p>
            <p>Create a ticket for UF ID No. <b id="createStudentTicket"><?php echo $UID; ?></b>?</p>
          <?php } ?>

          <?php } ?>

        </div><!-- input shell IN !found -->

        <div id="newTicketDropdown">
          <form action="record.php" method="post">
            <div class="inputShell">
              <?php include("ldap.php"); ?>
              <h3 class="orange">Ticket: <b><?php

              if ($searchForName) {
                echo $student;
              }

              if ($searchForID) {
                echo $ldap_email;
              }

               ?></b></h3>
              <input type="hidden" name="email" value="<?php echo $student; ?>">
              <input type="text" name="firstName" value="<?php echo $ldap_givenName; ?>" placeholder="Student's first name">
              <label for="student_email">Student's first name</label>
              <input id="UFID_transition" type="text" name="UFID_transition" value="<?php echo $ldap_UID; ?>" placeholder="Student's UF ID">
              <label required for="UFID_transition">Student's UF ID</label>
            </div>
            <div class="inputShell">
              <h3 class="blue">PaCE Major</h3>
              <p>Select a PaCE Major</p>
              <select required class="" name="paceMajor">
                <option selected value disabled>Select a major</option>
                <option value="africanAmericanStudies">African American Studies</option>
                <option value="anthropology">Anthropology</option>
                <option value="computerScience">Computer Science</option>
                <option value="english">English</option>
                <option value="geography">Geography</option>
                <option value="geology">Geology</option>
                <option value="history">History</option>
                <option value="linguistics">Linguistics</option>
                <option value="mathematics">Mathematics</option>
                <option value="philosophy">Philosophy</option>
                <option value="religion">Religion</option>
                <option value="sociology">Sociology</option>
                <option value="spanish">Spanish</option>
                <option value="statistics">Statistics</option>
                <option value="sustainabilityStudies">Sustainability Studies</option>
                <option value="womensStudies">Women's Studies</option>
              </select>
            </div><!-- select major input shell -->
            <div class="inputShell">
              <h3 class="orange">Conditions</h3>
              <div class="text inputShell">
                <h3 class="black">General Conditions</h3>
                <textarea name="stipulation" rows="8" placeholder="requirement statement">Complete current classes with Cs or better</textarea>
              </div>
            </div><!-- input shell -->
            <div class="text inputShell">
              <h3 class="blue">Course Conditions</h3>
              <input type="text" name="course" value="" placeholder="add course">
              <select class="course" name="grade">
                <option value="input" selected>grade needed</option>
                <option value="A">A</option>
                <option value="Aminus">A-</option>
                <option value="Bplus">B+</option>
                <option value="B">B</option>
                <option value="Bminus">B-</option>
                <option value="Cplus">C+</option>
                <option value="C">C</option>
              </select>
              <?php
                $courseIncrementVar = 2;
                $gradeIncrementVar  = 2;
              ?>
              <div class="hideTheKids">
                <div id="newOptions" class="newOptions">
                  <input type="text" name="course<?php echo $courseIncrementVar++; ?>" value="" placeholder="add course">
                  <select class="course" name="grade<?php echo $gradeIncrementVar++; ?>">
                    <option value="input" selected>grade needed</option>
                    <option value="A">A</option>
                    <option value="Aminus">A-</option>
                    <option value="Bplus">B+</option>
                    <option value="B">B</option>
                    <option value="Bminus">B-</option>
                    <option value="Cplus">C+</option>
                    <option value="C">C</option>
                  </select>
                </div><!-- add course: No. 2 -->
                <div id="newOptionsTwo" class="newOptions">
                  <input type="text" name="course<?php echo $courseIncrementVar++; ?>" value="" placeholder="add course">
                  <select class="course" name="grade<?php echo $gradeIncrementVar++; ?>">
                    <option value="input" selected >grade needed</option>
                    <option value="A">A</option>
                    <option value="Aminus">A-</option>
                    <option value="Bplus">B+</option>
                    <option value="B">B</option>
                    <option value="Bminus">B-</option>
                    <option value="Cplus">C+</option>
                    <option value="C">C</option>
                  </select>
                </div><!-- add course: No. 3 -->
                <div id="newOptionsThree" class="newOptions">
                  <input type="text" name="course<?php echo $courseIncrementVar++; ?>" value="" placeholder="add course">
                  <select class="course" name="grade<?php echo $gradeIncrementVar++; ?>">
                    <option value="input" selected >grade needed</option>
                    <option value="A">A</option>
                    <option value="Aminus">A-</option>
                    <option value="Bplus">B+</option>
                    <option value="B">B</option>
                    <option value="Bminus">B-</option>
                    <option value="Cplus">C+</option>
                    <option value="C">C</option>
                  </select>
                </div><!-- add course: No. 4 -->

              </div><!-- hide the kids -->

              <p id="addCourse" class="addCourse"><i>(+) add course</i></p>
              <div class="hideTheKids">
                <p id="addCourseTwo" class="addCourse"><i>(+) add course</i></p>
                <p id="addCourseThree" class="addCourse"><i>(+) add course</i></p>
              </div><!-- hide the kids -->
            </div><!-- input shell -->


            <div class="inputShell">
              <h3 class="orange">GPA Conditions</h3>

              <p>Select needed GPAs:</p>

              <select class="" name="gpaMajor">
                <option value="" selected>Major GPA</option>
                <option value="2.0">2.0</option>
                <option value="2.5">2.5</option>
                <option value="2.75">2.75</option>
                <option value="3.0">3.0</option>
              </select>



              <label for="">Major GPA</label>

              <select class="" name="gpaUF">
                <option value="" selected>UF GPA</option>
                <option value="2.0">2.0</option>
                <option value="2.5">2.5</option>
                <option value="2.75">2.75</option>
                <option value="3.0">3.0</option>
              </select>
              <label for="">UF GPA</label>

            </div><!-- input shell -->


            <input hidden type="text" name="submitted" value="0">
            <!-- <input hidden type="text" name="fromWhere" value="transitionTo"> -->
            <input class="submitButton" type="submit" name="createTicket" value="submit">
          </form>



        </div><!-- wrap -->


        <?php
      }

      while ($row = mysqli_fetch_assoc($spitRecord)) { ?>

      <h2>Record: <u><?php echo $searchedEmail = $row['email']; ?></u></h2>

      <div class="barrier">
        <div class="barrierHeader">
          <?php

              require("{$root}records/record_variables.php");
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
            <?php } else if ($submitted == 3) { ?>
              <p class="ufoSelected">UF Online</p>
            <?php }
            $breakCreated = explode("|", $formCreated);
            $monthDay     = $breakCreated[0];
            $hourTime     = $breakCreated[1];

            ?>
            <p class="timeCreated"><?php echo $monthDay; ?></p>
          </div><!-- barrier header -->
          <div class="identifyVariables">
            <p id="ledeName">"<?php echo ucfirst($row['name']); ?>"</p>
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


        <!-- approve from notes  -->

          <?php if ($studentSubmitted) { ?>
            <div id="approveFromNotes">
              <h3 class="blue">Approve Transition?</h3>


              <form action="<?php echo $root; ?>records/record.php?studentEmail=<?php echo $student_email; ?>" method="post">
                <?php include("{$root}include/stipulations/variables.php");?>
                  <?php require("{$root}include/approvalForm.php"); ?>
                  <input type="hidden" name="studentEmail" value="<?php echo $student_email; ?>">
                  <p>Would you like to approve <b><?php echo $student_email; ?></b> for transition?</p>
                  <input id="approveStatement" class="checkBox" type="checkbox" name="approve" value="" required>
                <input class="submitButton" type="submit" name="approveFromNotes" value="submit">
              </form>
            </div>
            <!-- approve from notes -->
          <?php } ?>
        </div><!-- barrier End left side -->


         <?php } ?>


      </div><!-- tickets Container -->

      <?php include("{$root}records/sortNav.php"); ?>

    </div><!-- records Container -->

<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
