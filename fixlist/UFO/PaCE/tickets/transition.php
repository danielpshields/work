<?php
  $root = "../";
  $page = "ticket";
  require("{$root}include/header.php");
  require("{$root}include/db.php");

  if (isset($_POST['submit'])) {
    ob_start();
    $studentID   = $_POST['studentID'];
    $email       = $_POST['email'];
    $stipulation = $_POST['stipulation'];
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


    $query       = "INSERT INTO transition (studentID,email,stipulation,course,grade,course2,grade2,course3,grade3,course4,grade4,gpaMajor,gpaUF,paceMajor,semester,phone) VALUES ('{$studentID}','{$email}','{$stipulation}','{$course}','{$grade}','{$course2}','{$grade2}','{$course3}','{$grade3}','{$course4}','{$grade4}','{$gpaMajor}','{$gpaUF}', '{$paceMajor}', '{$semster}', '{$phone}')";
    $spitResults = mysqli_query($connection, $query);
    if (!$spitResults) { die ("query failed"); } else {
    }

    // $email
    // include("test/email.php");
    // emailstudent($theresALinkWaiting);

    header("Location: ../records/transition.php");
    exit;
}

?>

  <h2>Transition Ticket</h2>

  <h3>Create a <b>transition</b> ticket for the student:</h3>

  <form class="" action="transition.php" method="post">

    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
      <input required type="text" name="firstName" value="" placeholder="Student's first name">
      <label for="student_email">Add student's first name</label>
      <input required type="text" name="email" value="" placeholder="***@ufl.edu">
      <label for="student_email">Add student's gatorlink email</label>
    </div>

    <div class="inputShell">
      <h3 class="blue">Stipulation</h3>
      <div class="text inputShell">
        <h3 class="black">Written Stipulation</h3>
        <textarea name="stipulation" rows="8" placeholder="requirement statement"></textarea>
      </div>
    </div><!-- input shell -->

    <div class="text inputShell">
      <h3 class="black">Course Requirements</h3>

      <input type="text" name="course" value="" placeholder="add course">

      <select class="course" name="grade">
        <option value="input" selected disabled>grade needed</option>
        <option value="A">A</option>
        <option value="Aminus">A-</option>
        <option value="Bplus">B+</option>
        <option value="B">B</option>
        <option value="Bminus">B-</option>
        <option value="Cplus">C+</option>
        <option value="C">C</option>
      </select>

      <?php
        $course = 2;
        $grade  = 2;
      ?>

      <div class="hideTheKids">
        <div id="newOptions" class="newOptions">
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
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
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
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
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
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
      <h3 class="black">GPA Requirements</h3>

      <p>Select needed GPAs:</p>

      <select class="" name="gpaMajor">
        <option value="input" selected disabled>Major GPA</option>
        <option value="2.0">2.0</option>
        <option value="2.5">2.5</option>
        <option value="2.75">2.75</option>
        <option value="3.0">3.0</option>
      </select>

      

      <label for="">Major GPA</label>

      <select class="" name="gpaUF">
        <option value="input" selected disabled>UF GPA</option>
        <option value="2.0">2.0</option>
        <option value="2.5">2.5</option>
        <option value="2.75">2.75</option>
        <option value="3.0">3.0</option>
      </select>
      <label for="">UF GPA</label>

    </div><!-- input shell -->


    <input hidden type="text" name="submitted" value="0">
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>


<?php
  require("{$root}include/footer.php");

  if (isset($_POST['submit'])) {
    mysqli_close($connection);
  }

?>
