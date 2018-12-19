<?php
  $root = "../";
  $page = "requirements";
  require("{$root}include/header.php");
?>
  <h2>Missing Requirements Ticket</h2>

  <h3>Create a missing requirements ticket for the student:</h3>


  <form class="" action="messages/submitted.php" method="post">

    <?php include("{$root}include/recipient.php"); ?>


    <div class="inputShell">
      <h3 class="blue">Needed Requirements</h3>
      <?php include("{$root}include/stipulations/statement.php"); ?>
      <?php include("{$root}include/stipulations/courses.php"); ?>
      <?php include("{$root}include/stipulations/gpa_requirement.php"); ?>
    </div><!-- input shell -->

    <input hidden type="text" name="formType" value="requirements">
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>




<?php require("{$root}include/footer.php") ;?>
