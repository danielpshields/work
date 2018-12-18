<?php
  $root = "../";
  $page = "exploratory";
  require("{$root}include/header.php");
?>
  <h2>Exploratory Ticket</h2>
  <h3>Create an <b>exploratory</b> ticket for a student:</h3>

  <form class="" action="messages/submitted.php" method="post">

    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
      <input type="text" name="student_email" value="" placeholder="student's email address">
      <label for="student_email">Add student's gatorlink email</label>
    </div><!-- input shell -->


    <div class="inputShell">
      <h3 class="blue">Email();</h3>
      <p><?php echo $requirements = "Nicole's email..."; ?></p>
    </div>


    <input hidden type="text" name="formType" value="exploratory">
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>




<?php require("{$root}include/footer.php") ;?>
