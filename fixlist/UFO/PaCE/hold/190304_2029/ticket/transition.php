<?php
  $root = "../";
  $page = "ticket";
  $pageName = "Transition Ticket";
  require("{$root}include/header/header.php");
  require("{$root}include/db.php");
  if (isset($_POST['submit'])) {
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
    // $formCreated = $_POST['formCreated'];
    $query  = "INSERT INTO transition ";
    $query .= "(studentID,name,email,stipulation,course,grade,course2,grade2,course3,grade3,course4,grade4,gpaMajor,gpaUF,paceMajor,semester,phone, formCreated) VALUES ('{$studentID}', '{$name}', '{$email}','{$stipulation}','{$course}','{$grade}','{$course2}','{$grade2}','{$course3}','{$grade3}','{$course4}','{$grade4}','{$gpaMajor}','{$gpaUF}', '{$paceMajor}', '{$semster}', '{$phone}', '{$timeStamp}')";
    $spitResults = mysqli_query($connection, $query);
    if (!$spitResults) { die ("query failed"); }
    include("{$root}email/ticket/transition/email.php");
    redirectTo("{$root}records/transition.php");
  }
  include("{$root}include/header/admin_nav.php");
?>
  <form class="" action="transition.php" method="post">
    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
      <input type="text" name="firstName" value="" placeholder="Student's first name">
      <label for="student_email">Student's first name</label>
      <input required type="text" name="email" value="" placeholder="***@ufl.edu">
      <label for="student_email">Student's gatorlink email</label>
      <input id="UFID_transition" type="text" name="UFID_transition" value="" placeholder="Student's UF ID">
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
        <textarea name="stipulation" rows="8" placeholder="requirement statement"></textarea>
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
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>


<?php
  require("{$root}include/footer.php");

  if (isset($_POST['submit'])) {
    mysqli_close($connection);
  }

?>
