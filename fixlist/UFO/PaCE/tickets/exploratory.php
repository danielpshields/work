<?php
  $root = "../";
  $page = "exploratory";
  require("{$root}include/header.php");
?>
  <h2>Exploratory</h2>

  <form class="" action="messages/submitted.php" method="post">

    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
      <input type="text" name="student_email" value="" placeholder="student's email address">
      <label for="student_email">Add student's email</label>
      <input type="text" name="student_id" value="" placeholder="student's UF ID">
      <label for="student_id">Add student's ID</label>
    </div><!-- input shell -->

    <div class="inputShell">
      <h3 class="blue">Text Input</h3>
      <h4>Areas of Focus:</h4>
      <textarea name="name" rows="8"></textarea>
    </div><!-- input shell -->
    <input hidden type="text" name="formType" value="exploratory">
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>




<?php require("{$root}include/footer.php") ;?>
