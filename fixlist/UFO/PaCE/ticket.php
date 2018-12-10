<?php
  $page = "ticket";
  require("include/header.php");
?>

  <h2>Ticket</h2>
  <p>Hello, <?php echo $firstName; ?></p>


  <form class="" action="ticket.php" method="post">
    <div class="inputShell">
      <input type="text" name="student_id" value="" placeholder="add student ID">
      <label for="student_id">Add a Student ID</label>
    </div>


    <div class="inputShell">
      <h3 class="blue">Stipulation</h3>

      <p></p>
      <select class="" name="">
        <option value="input" selected disabled>Select a Course</option>
        <option value="grade_a">a</option>
        <option value="grade_b">b</option>
        <option value="grade_c">c</option>
        <option value="grade_d">d</option>
        <option value="grade_f">f</option>
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
      <h3><a href="">Add Stipulation (+)</a></h3>

    </div>

    <?php onSubmit: email(); ?>


    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

</div><!-- display: none; -->


<?php require("include/footer.php") ;?>
