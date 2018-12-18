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
        <h3 class="blue">Major</h3>

        <p></p>
        <select class="" name="">
          <option value="input" selected disabled>Select a Major</option>
          <option value="math">math</option>
          <option value="science">science</option>
          <option value="history">history</option>
          <option value="social studies">social studies</option>
        </select>

    </div><!-- input shell -->


    <div class="inputShell">
        <h3 class="orange">Course</h3>

        <p></p>
        <select class="" name="">
          <option value="input" selected disabled>Select a Course</option>
          <option value="math">math</option>
          <option value="science">science</option>
          <option value="history">history</option>
          <option value="social studies">social studies</option>
        </select>

    </div><!-- input shell -->


    <div class="inputShell">
        <h3 class="blue">GPA</h3>

        <p></p>
        <select class="" name="">
          <option value="input" selected disabled>Needed</option>
          <option value="math">math</option>
          <option value="science">science</option>
          <option value="history">history</option>
          <option value="social studies">social studies</option>
        </select>

    </div><!-- input shell -->


    <p style="margin-top: 32px;">email(<br>
      <i>You have not met the transition requirements for the <a href="#">SELECTED</a> major.</i><br>
      <i>You will need a <b>$certainGPA</b>
    </p>

    <div class="inputShell">

      <ul>
        <li>UF GPA</li>
        <li>Major GPA</li>
      </ul>

    </div>

<!--
    <div class="inputShell">
      <h3 class="blue">Text Input</h3>
      <h4>Areas of Focus:</h4>
      <textarea name="name" rows="8"></textarea>
    </div> -->
    <!-- input shell -->



    <input hidden type="text" name="formType" value="requirements">
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>




<?php require("{$root}include/footer.php") ;?>
