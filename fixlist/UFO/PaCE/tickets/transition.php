<?php
  $root = "../";
  $page = "ticket";
  require("{$root}include/header.php");
  if (isset($_POST['submit'])) {
    $email       = $_POST['email'];
    $stipulation = $_POST['stipulation'];

    $course      = $_POST['course'];
    $course2     = $_POST['course1'];
    $course3     = $_POST['course2'];
    $course4     = $_POST['course3'];
    $course5     = $_POST['course4'];
    $course6     = $_POST['course5'];
    $course7     = $_POST['course6'];

    $grade       = $_POST['grade'];
    $grade2      = $_POST['grade2'];
    $grade3      = $_POST['grade3'];
    $grade4      = $_POST['grade4'];
    $grade5      = $_POST['grade5'];
    $grade6      = $_POST['grade6'];
    $grade7      = $_POST['grade7'];

    $gpaMajor    = $_POST['gpaMajor'];
    $gpaUF       = $_POST['gpaUF'];
    
    require("{$root}include/db.php");

    $query       = "INSERT INTO transition (email, stipulation, course, course2, course3, course4, course5, course6, course7, grade, grade2, grade3, grade4, grade5, grade6, grade7, gpaMajor, gpaUF) VALUES ('{$email}', '{$stipulation}', '{$course}', '{$course2}', '{$course3}', '{$course4}', '{$course5}', '{$course6}', '{$course7}', '{$grade}', '{$grade2}', '{$grade3}', '{$grade4}', '{$grade5}', '{$grade6}', '{$grade7}', '{$gpaMajor}', '{$gpaUF}')";

    $spitResults = mysqli_query($connection, $query);

    if (!$spitResults) { die ("query failed"); }

}

?>

  <h2>Transition Ticket</h2>
  <h3>Create a <b>transition</b> ticket for the student:</h3>


  <form class="" action="transition.php" method="post">

    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
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
        <option value="2.5">2.5</option>
        <option value="2.8">2.8</option>
        <option value="3.0">3.0</option>
        <option value="3.3">3.3</option>
        <option value="3.5">3.5</option>
      </select>

      <?php
        $course = 1;
        $grade  = 1;
      ?>

      <div class="hideTheKids">
        <div id="newOptions" class="newOptions">
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
            <option value="2.5">2.5</option>
            <option value="2.8">2.8</option>
            <option value="3.0">3.0</option>
            <option value="3.3">3.3</option>
            <option value="3.5">3.5</option>
          </select>
        </div><!-- add course: No. 2 -->
        <div id="newOptionsTwo" class="newOptions">
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
            <option value="2.5">2.5</option>
            <option value="2.8">2.8</option>
            <option value="3.0">3.0</option>
            <option value="3.3">3.3</option>
            <option value="3.5">3.5</option>
          </select>
        </div><!-- add course: No. 3 -->
        <div id="newOptionsThree" class="newOptions">
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
            <option value="2.5">2.5</option>
            <option value="2.8">2.8</option>
            <option value="3.0">3.0</option>
            <option value="3.3">3.3</option>
            <option value="3.5">3.5</option>
          </select>
        </div><!-- add course: No. 4 -->
        <div id="newOptionsFour" class="newOptions">
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
            <option value="2.5">2.5</option>
            <option value="2.8">2.8</option>
            <option value="3.0">3.0</option>
            <option value="3.3">3.3</option>
            <option value="3.5">3.5</option>
          </select>
        </div><!-- add course: No. 5 -->
        <div id="newOptionsFive" class="newOptions">
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
            <option value="2.5">2.5</option>
            <option value="2.8">2.8</option>
            <option value="3.0">3.0</option>
            <option value="3.3">3.3</option>
            <option value="3.5">3.5</option>
          </select>
        </div><!-- add course: No. 6 -->
        <div id="newOptionsSix" class="courseRequirements newOptions">
          <input type="text" name="course<?php echo $course++; ?>" value="" placeholder="add course">
          <select class="course" name="grade<?php echo $grade++; ?>">
            <option value="input" selected disabled>grade needed</option>
            <option value="2.5">2.5</option>
            <option value="2.8">2.8</option>
            <option value="3.0">3.0</option>
            <option value="3.3">3.3</option>
            <option value="3.5">3.5</option>
          </select>
        </div><!-- add course: No. 7 -->
      </div><!-- hide the kids -->

      <p id="addCourse" class="addCourse"><i>(+) add course</i></p>
      <div class="hideTheKids">
        <p id="addCourseTwo" class="addCourse"><i>(+) add course</i></p>
        <p id="addCourseThree" class="addCourse"><i>(+) add course</i></p>
        <p id="addCourseFour" class="addCourse"><i>(+) add course</i></p>
        <p id="addCourseFive" class="addCourse"><i>(+) add course</i></p>
        <p id="addCourseSix" class="addCourse"><i>(+) add course</i></p>
      </div><!-- hide the kids -->
    </div><!-- input shell -->


  <div class="inputShell">
    <h3 class="black">GPA Requirements</h3>

    <p>Select needed GPAs:</p>

    <select class="" name="gpaMajor">
      <option value="input" selected disabled>Major GPA</option>
      <option value="2.5">2.5</option>
      <option value="2.8">2.8</option>
      <option value="3.0">3.0</option>
      <option value="3.3">3.3</option>
      <option value="3.5">3.5</option>
    </select>

    <label for="">Major GPA</label>

    <select class="" name="gpaUF">
      <option value="input" selected disabled>UF GPA</option>
      <option value="2.5">2.5</option>
      <option value="2.8">2.8</option>
      <option value="3.0">3.0</option>
      <option value="3.3">3.3</option>
      <option value="3.5">3.5</option>
    </select>
    <label for="">UF GPA</label>

    </div><!-- input shell -->



    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

<?php require("{$root}include/footer.php") ;?>
