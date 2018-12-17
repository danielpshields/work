<?php
  $page = "ticket";
  $root = "../";
  require("{$root}include/header.php");
?>

  <h2>Transition Ticket</h2>
  <h3>Create a <b>transition</b> ticket for the student:</h3>

  <form class="" action="messages/submitted.php" method="post">
    <div class="inputShell">
      <h3 class="orange">Student / Recipient</h3>
      <input required type="text" name="student_email" value="" placeholder="***@ufl.edu">
      <label for="student_email">Add student's gatorlink email</label>
    </div>

    <div class="inputShell">
      <?php $number = "One"; ?>
      <?php include("{$root}include/stipulation.php") ;?>
    </div><!-- input shell -->


    <div id="stipulation">
      <div class="inputShell">
        <?php $number = "Two"; ?>
        <?php include("{$root}include/stipulation.php") ;?>
      </div><!-- input shell -->
    </div><!-- stipulation -->
    <h3 id="clickTicket">add area 2</h3>


    <div id="stipulationTwo">
      <div class="inputShell">
        <?php $number = "Three"; ?>
        <?php include("{$root}include/stipulation.php") ;?>
      </div><!-- input shell -->
    </div><!-- orange -->
    <h3 id="clickTicketTwo">add area 3</h3>


    <div id="stipulationThree">
      <div class="inputShell">
        <?php $number = "Four"; ?>
        <?php include("{$root}include/stipulation.php") ;?>
      </div><!-- input shell -->
    </div><!-- orange -->
    <h3 id="clickTicketThree">add area 4</h3>


    <div id="stipulationFour">
      <div class="inputShell">
        <?php $number = "Five"; ?>
        <?php include("{$root}include/stipulation.php") ;?>
      </div><!-- input shell -->
    </div><!-- orange -->
    <h3 id="clickTicketFour">add area 5</h3>

    <input hidden type="text" name="formType" value="transition">

    <input class="submitButton" type="submit" name="submit" value="email ticket">
  </form>

</div><!-- display: none; -->


<?php require("{$root}include/footer.php") ;?>
