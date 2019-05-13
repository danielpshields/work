<?php
  $root = "../";
  $pageName = "requirements";
  $page = "requirements";
  require("{$root}include/header/header.php");
?>
  <h2><b>Missing Requirements</b> Ticket</h2>

  <h3>Create a <u>missing requirements</u> ticket for the student:</h3>


  <form class="" action="messages/submitted.php" method="post">

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

      <div class="text inputShell" style="padding-bottom: 2rem;">
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

    </div><!-- Text input shell -->

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




    <input hidden type="text" name="formType" value="requirements">
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>




<?php require("{$root}include/footer.php") ;?>
