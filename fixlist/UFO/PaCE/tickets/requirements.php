<?php
  $root = "../";
  $page = "missingRequirements";
  require("{$root}include/header.php");
?>
  <h2>Missing Requirements Ticket</h2>

  <h3>Create a missing requirements ticket for the student:</h3>


  <form class="" action="messages/submitted.php" method="post">

    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
      <input type="text" name="student_email" value="" placeholder="student's email address">
      <label for="student_email">Add student's email</label>
    </div><!-- input shell -->

    <div class="inputShell">
        <h3 class="blue">Course &amp; Grade</h3>

        <p></p>
        <select class="" name="">
          <option value="input" selected disabled>Select a Course</option>
          <option value="math">math</option>
          <option value="science">science</option>
          <option value="history">history</option>
          <option value="social studies">social studies</option>
          <option value="gym">gym</option>
        </select>

        <p></p>

        <select class="" name="">
          <option value="input" selected disabled>Select a Grade</option>
          <option value="grade_a">a</option>
          <option value="grade_b">b</option>
          <option value="grade_c">c</option>
          <option value="grade_d">d</option>
          <option value="grade_f">f</option>
        </select>
    </div><!-- input shell -->



    <div class="inputShell">
      <h3 class="blue">Text Input</h3>
      <h4>Areas of Focus:</h4>
      <textarea name="name" rows="8"></textarea>
    </div><!-- input shell -->



    <input hidden type="text" name="formType" value="requirements">
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>




<?php require("{$root}include/footer.php") ;?>
