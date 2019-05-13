<?php
  $root = "../../";
  $page = "requirements";
  require("{$root}include/header.php");
?>

  <h2>Requirements Form:</h2>
  <p>Please fill out the fields below to acknowledge certain outstanding requirements.</p>


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


    <div id="stipulations" class="inputShell">
      <h3 class="orange">Requirements</h3>
      <ol>
        <li><i>[<?php echo "INSERT * \$STIPULATION"; ?>]</i></li>
        <li><i>[<?php echo "INSERT * \$STIPULATION"; ?>]</i></li>
        <li><i>[<?php echo "INSERT * \$STIPULATION"; ?>]</i></li>
      </ol>
      <p>If I do not meet these stipulations, my transition to campus will be rescinded.</p>
      <input class="checkBox" type="checkbox" name="" value="">
    </div><!-- input shell -->


    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

<?php require("{$root}include/footer.php") ;?>
