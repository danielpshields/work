<?php
  $root = "../";
  $page = "ticket";
  require("{$root}include/header.php");
  require("{$root}include/db.php");
  if (isset($_POST['submit'])) {
    echo "<pre>";
      print_r($_POST);
    echo "</pre>";
  }
?>

  <h2>Transition Ticket</h2>
  <h3>Create a <b>transition</b> ticket for the student:</h3>

  <!-- <form class="" action="messages/submitted.php" method="post"> -->
  <form class="" action="transition.php" method="post">
    <!-- 1 -->
    <?php include("{$root}include/recipient.php"); ?>

    <!-- 2 -->
    <div class="inputShell">
      <h3 class="blue">Stipulation</h3>
      <?php include("{$root}include/stipulations/statement.php"); ?>
      <?php include("{$root}include/stipulations/courses.php"); ?>

    </div>

    <!-- 3 -->
    <div class="inputShell">
      <input type="text" name="text" value="" placeholder="text values">
      <input type="submit" name="submit" value="submit">
    </div><!-- input shell -->
  </form>

</div><!-- display: none; -->


<?php require("{$root}include/footer.php") ;?>
