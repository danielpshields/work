<?php
  $page = "ticket";
  $root = "../";
  require("{$root}include/header.php");
?>

  <h2>Transition Ticket</h2>
  <h3>Create a <b>transition</b> ticket for the student:</h3>

  <form class="" action="messages/submitted.php" method="post">

    <?php include("{$root}include/recipient.php"); ?>

    <div class="inputShell">
      <h3 class="blue">Stipulation</h3>
      <?php include("{$root}include/stipulations/statement.php"); ?>
      <?php include("{$root}include/stipulations/courses.php"); ?>
      <?php include("{$root}include/stipulations/gpa_requirement.php"); ?>
    </div><!-- input shell -->


    <input hidden type="text" name="formType" value="transition">
    <input class="submitButton" type="submit" name="submit" value="email ticket">
  </form>

</div><!-- display: none; -->


<?php require("{$root}include/footer.php") ;?>
