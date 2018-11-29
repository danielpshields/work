<?php require("include/header.php"); ?>

    <h2>Transition Decision and Statement of Understanding</h2>
    <p>Please read and initial either Option A or Option B</p>

      <p>Option A. ______ I give permission for my advisor to transition me to campus enrollment for the

      <b><?php echo "\$semester/\$term"; ?></b>

      <select class="" name="">
        <option value="spring">spring</option>
        <option value="summer">summer</option>
        <option value="fall">fall</option>

      </select>

      term in the PaCE major I listed above.
      ______ I understand that I must meet the following conditions in order to transition to campus:

  <ol>
    <li><?php echo "INSERT * \$STIPULATION"; ?></li>
    <li><?php echo "INSERT * \$STIPULATION"; ?></li>
    <li><?php echo "INSERT * \$STIPULATION"; ?></li>
  </ol>
  <input type="checkbox">
  If I want to return to UF Online in the future, I understand that I must reapply to UF Online.



  <input type="checkbox">
  If I want to start on campus in a non-PaCE major, I understand that I must apply to campus as a transfer student in that major by the published transfer deadline, and be accepted into that major.



  <input type="checkbox">
  If I am currently enrolled in any UF Online courses for upcoming semesters, I will drop those courses before I submit this contract to my advisor.


  Option B. _____ I would like to remain in UF Online in the __________________ UF Online degree program. If I want to enroll in a campus degree program, I understand that I will need to reapply as a campus transfer.


Signatures:
 _________________________ 		_______________________________







   <h2><?php echo $firstName; ?> please read through these:</h2>

     <h3>Terms of Transition</h3>

     <p>In order to transition to campus, you must meet all conditions of the Pathway to Campus Enrollment (PaCE) Contract:</p>

     <ul>
       <li>Earn a total of 60 credits (up to 45 credits may come from previous college credits earned through AP, IB, Dual Enrollment, or other accelerated methods)</li>

       <li>Enroll in UF Online for at least two semesters and earn at least 15 credit hours through UF Online</li>

       <li>Complete all prerequisite or tracking requirements with required grades for your selected PaCE major</li>

       <li>The University of Florida reserves the right to ask for additional information and the right to deny the request for transition to campus.</li>

       <li>If you have any questions about your eligibility or the transition process, please contact your academic advisor.</li>
     </ul>

     <form class="" action="c.php" method="post">
       <input type="submit" name="submit" value="I Accept">
     </form>
