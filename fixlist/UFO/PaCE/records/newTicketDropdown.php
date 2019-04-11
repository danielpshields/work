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

</div><!-- new ticket dropdown -->
