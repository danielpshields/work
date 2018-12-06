<?php
  $page = "online";
  require("include/header.php");
?>

  <h2>Transition Form:<br><b>UF Online</b></h2>
  <p>Please fill out the fields below to proceed with your transition to UF Online.</p>


  <form action="thankyou.php" method="post">

    <div class="inputShell">
      <h3 class="blue">Current Information</h3>

      <p>Please indicate your current PaCE major:</p>

      <select required class="" name="">
        <option disabled selected value>Select a major</option>


        <option value="africanAmericanStudies">African American Studies</option>
        <option value="anthropology">Anthropology</option>
        <option value="computerScience">Computer Science</option>
        <option value="english">English</option>
        <option value="geography">Geography</option>
        <option value="geology">Geology</option>
        <option value="history">History</option>
        <option value="linguistics">Linguistics</option>
        <option value="mathematics">Mathematics</option>
        <option value="philosophy">Philosophy</option>
        <option value="religion">Religion</option>
        <option value="sociology">Sociology</option>
        <option value="spanish">Spanish</option>
        <option value="statistics">Statistics</option>
        <option value="sustainabilityStudies">Sustainability Studies</option>
        <option value="womensStudies">Women's Studies</option>

      </select>

    </div><!-- input shell -->

    <div class="inputShell">

      <h3 class="orange">Remain in UF Online</h3>

      <p>I would like to remain in UF Online in the <a href="https://ufonline.ufl.edu/degrees/undergraduate/" target="_blank">UF Online degree program</a>.</p>

      <p>If I want to enroll in a campus degree program, I understand that I will need to reapply as a campus transfer.</p>

      <input required class="checkBox" type="checkbox" name="checkBox" value="">

    </div><!-- input shell -->


    <input class="submitButton" type="submit" name="submit" value="submit">

  </form>
<?php require("include/footer.php"); ?>
