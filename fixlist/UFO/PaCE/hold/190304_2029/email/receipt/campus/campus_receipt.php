    <h1>UF Online PaCE Transition Contract</h1>

    <p>Hi, <?php echo ucfirst(strtolower($name)); ?>!</p>

    <p><b>Thank you for submitting the UF Online PaCE Transition to campus form.</b><br>This message is a receipt for the transition contract. By submitting this form, you have acknowledged that you understand the following:</p>

    <h3>Major Permission</h3>
    <p>I will transition to campus enrollment in the <b><u><?php echo $major; ?></u></b> PaCE major for the <b><u><?php echo $semester; ?></u></b> term provided I meet the below conditions at the end of the current term.</p>

    <?php if ($conditionExists) { ?>

    <h2>Transition Conditions:</h2>
    <?php if ($generalCondition) { ?>
      <p id="conditionStatement"><i><?php echo ucfirst($condition_general); ?></i></p>
    <?php } ?>

    <?php if ($courseGrade) { ?>
      <h3>Course / Grade</h3>
    <table>
      <thead>
        <tr>
          <th>Course</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $course; ?></td>
          <td><?php echo $grade; ?></td>
        </tr>
        <?php if ($courseGrade_two) { ?>
        <tr>
          <td><?php echo $course_two; ?></td>
          <td><?php echo $grade_two; ?></td>
        </tr>
      <?php } if ($courseGrade_three) { ?>
        <tr>
          <td><?php echo $course_three; ?></td>
          <td><?php echo $grade_three; ?></td>
        </tr>
      <?php } if ($courseGrade_four) { ?>
        <tr>
          <td><?php echo $course_four; ?></td>
          <td><?php echo $grade_four; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
<?php } // courseGrade

      if ($gpa) { ?>
       <h3>GPAs</h3>
       <table>
         <thead>
           <tr>
             <th colspan="2">Overall GPAs</th>
           </tr>
         </thead>
         <tbody>
           <?php if ($majorGPA) { ?>
           <tr>
             <td>Major</td>
             <td><?php echo $gpa_Major; ?></td>
           </tr>
          <?php } if ($ufGPA) { ?>
           <tr>
             <td>UF</td>
             <td><?php echo $gpa_UF; ?></td>
           </tr>
         <?php } ?> <!-- end if GPA UF -->
         </tbody>
       </table>
       <?php
       } // GPA
    } ?><!-- end testing if array item exists -->


    <h3>UF Online Reapplication</h3>
    <p>If I want to return to UF Online in the future, I must reapply to UF Online.</p>

    <h3>Outstanding UF Online Enrollment</h3>
    <p>If I am currently enrolled in any UF Online courses for upcoming semesters, I will drop those courses before submitting the transition contract to my advisor.</p>

    <h3>UF Online Financial Responsibility</h3>
    <p>Since I am unable to take UF Online classes upon transitioning to campus, if I remain enrolled in UF Online courses once I have transitioned to campus, I will be held financially responsible for those classes.</p>

    <h3>Non-PaCE Major Transition</h3>
    <p>If I want to start on campus in a non-PaCE major, I must apply to campus as a transfer student in that major by the published transfer deadline, and be accepted into that major.</p>

    <p>The PaCE program guarantees a seat on campus in a selected PaCE major by meeting the general and major specific transition requirements. There is no guarantee of being able to change to a different major (PaCE or non-PaCE) after transitioning to campus.</p>

    <h3>Terms of Transition</h3>
    <p>In order to transition to campus, I must meet all conditions of the <i>Pathway to Campus Enrollment (PaCE) Contract</i>:

    <ul>
      <li>Earn a total of 60 credits (up to 45 credits may come from previous college credits earned through AP, IB, Dual Enrollment, or other accelerated methods)</li>
      <li>Enroll in UF Online for at least two semesters and earn at least 15 credit hours through UF Online</li>
      <li>Complete all transition requirements with grades for your selected PaCE major</li>
      <li>The University of Florida reserves the right to ask for additional information and the right to deny the request for transition to campus.</li>
      <li>If you have any questions about your eligibility or the transition process, please contact your academic advisor.</li>
    </ul>

    <h3>Failure Notice</h3>
    <p>If I do not pass any current classes (including failing a class or withdrawing from a class), or fail to meet the transition requirements in any way, I will inform my advisor: <a href="mailto:nraymond@advising.ufl.edu">Nicole Raymond</a>. This might impact my transition eligibility, so I must discuss the implications with my advisor.</p>

    <h3>Contact Us</h3>
    <p>Advisor: Nicole Raymond<br>
      Phone: 352-294-2205<br>
      Email: nyramond@advising.ufl.edu<br>
      Address: Farrior Hall
    </p>

    <!-- <h3>Changes?</h3>
    <p>If you'd like to adjust any of this information, just use this Page: <a href="#">https://advising.ufl.edu/UFO/PaCE/transition/</a></p> -->
    <p>Please let us know if you have any questions!</p>
    <p><b>-PaCE Transition Team</b></p>
