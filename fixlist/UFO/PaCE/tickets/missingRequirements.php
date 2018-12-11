<?php
  $root = "../";
  $page = "missingRequirements";
  require("{$root}include/header.php");
?>
  <h2>Missing Requirements</h2>

  <form class="" action="ticket.php" method="post">
    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
      <input type="text" name="student_email" value="" placeholder="student's email address">
      <label for="student_email">Add student's email</label>
      <input required type="text" name="student_id" value="" placeholder="student's UF ID">
      <label for="student_id">Add student's ID</label>
    </div><!-- input shell -->

  </form>

<?php require("{$root}include/footer.php") ;?>
