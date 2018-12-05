<?php require("include/header.php"); ?>

  <h2>Transition Form:<br>UF Online</h2>


  <form action="thankYou.php" method="post">

    <div class="inputShell">
      <h3>Current Information</h3>

      <p>Please indicate your current college and PaCE major:</p>
      <input type="text" name="college" value="" placeholder="Agriculture, Arts, Business...">
      <label for="college">College</label>

      <input id="marginTop" type="text" name="paceMajor" value="" placeholder="Accounting, Music, Zoology">
      <label for="paceMajor">PaCE Major</label>
    </div><!-- input shell -->

    <div class="inputShell">

    <ul>
      <li>Anthropology</li>
      <li>Biology</li>
      <li>Computer Science</li>
      <li>Criminology</li>
      <li>Geography</li>
      <li>Geology</li>
      <li>Psychology</li>
      <li>Sociology</li>
    </ul>



    </div><!-- input shell -->



    <div class="inputShell">

      <h3>Remain in UF Online</h3>

      <p>I would like to remain in UF Online in the UF Online degree program.

      <p>If I want to enroll in a campus degree program, I understand that I will need to reapply as a campus transfer.</p>

    </div><!-- input shell -->

    <input class="submitButton" type="submit" name="submit" value="submit">

  </form>
<?php require("include/footer.php"); ?>
