<?php
  $page = "campus";
  require("include/header.php");

?>

  <h2>Transition Form:<br><b>Campus</b></h2>
  <p>Please fill out the fields below to proceed with your transition to campus.</p>

  <form action="thankyou.php" method="post">

      <div class="inputShell">
        <h3>Current Information</h3>

        <p>Please indicate your current college and PaCE major:</p>

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
        <h3>When</h3>
        <p>I give permission for my advisor to transition me to campus enrollment in the PaCE major I listed above for the following term:</p>
       <select required class="" name="">
         <option disabled selected value>select a semester</option>
         <option value="spring">Spring</option>
         <option value="summer">Summer</option>
         <option value="fall">Fall</option>
       </select>
     </div><!-- input shell -->

     <div id="stipulations" class="inputShell">
       <h3>Stipulations</h3>
       <ol>
         <li><i>[<?php echo "INSERT * \$STIPULATION"; ?>]</i></li>
         <li><i>[<?php echo "INSERT * \$STIPULATION"; ?>]</i></li>
         <li><i>[<?php echo "INSERT * \$STIPULATION"; ?>]</i></li>
       </ol>
       <p>If I do not meet these stipulations, my transition to campus will be rescinded.</p>
       <input required class="checkBox" type="checkbox" name="" value="">
     </div><!-- input shell -->

     <div class="inputShell">
       <h3>UF Online</h3>
       <p>Please check the box to indicate that I understand that if I want to return to UF Online in the future, I understand that I must reapply to UF Online.</p>
       <input required class="checkBox" type="checkbox" name="" value="">
       <div class="divider"></div>
       <p>Please check the box to acknowledge that I understand that if I am currently enrolled in any UF Online courses for upcoming semesters, I will drop those courses before I submit this contract to my advisor.</p>
       <input required class="checkBox" type="checkbox" name="" value="">
    </div><!-- input shell -->


    <div class="inputShell">

      <h3>PaCE</h3>
      <p>Please check the box to acknowledge that if I want to start on campus in a non-PaCE major, I understand that I must apply to campus as a transfer student in that major by the published transfer deadline, and be accepted into that major.</p>
      <input required class="checkBox" type="checkbox" name="" value="">

    </div><!-- input shell -->

    <div class="inputShell">

      <h3>Terms of Transition</h3>

      <p>In order to transition to campus, you must meet all conditions of the Pathway to Campus Enrollment (PaCE) Contract:</p>

      <ul>
        <li>Earn a total of 60 credits (up to 45 credits may come from previous college credits earned through AP, IB, Dual Enrollment, or other accelerated methods)</li>
        <li>Enroll in UF Online for at least two semesters and earn at least 15 credit hours through UF Online</li>
        <li>Complete all transition requirements with required grades for your selected PaCE major</li>
        <li>The University of Florida reserves the right to ask for additional information and the right to deny the request for transition to campus.</li>
        <li>If you have any questions about your eligibility or the transition process, please contact your academic advisor.</li>
      </ul>

    </div><!-- input shell -->

    <input class="submitButton" type="submit" name="submit" value="Submit">

   </form>


<?php include("include/footer.php"); ?>
