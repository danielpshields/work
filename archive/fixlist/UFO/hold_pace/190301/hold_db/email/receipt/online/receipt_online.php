<h1>UF Online PaCE Transition Contract</h1>

<p>Hi, <?php echo ucfirst(strtolower($name)); ?>!</p>

<p>Thank you for submitting the UF Online PaCE Transition to campus form.<br>This message is a receipt for the transition contract.</p>

<h3>Major Permission</h3>
<p>Transiting to campus enrollment in the <b><u><?php echo $major; ?></u></b> PaCE major for the <b><u><?php echo $semester; ?></u></b> term.</p>

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
<p>Returning to UF Online in the future requires reapplying to UF Online.</p>

<h3>Outstanding UF Online Enrollment</h3>
<p>Currently being enrolled in any UF Online courses for upcoming semesters will require dropping those courses before submitting the transition contract to my advisor.</p>

<h3>UF Online Financial Responsibility</h3>
<p>Since being unable to take UF Online classes upon transitioning to campus, remaining enrolled in UF Online courses before transitioning to campus will hold me financially responsible for those classes.</p>

<h3>Non-PaCE Major Transition</h3>
<p>Starting on campus in a non-PaCE major requires applying to campus as a transfer student in that major by the published transfer deadline, and that it requires acceptance into that major.</p>

<p>The PaCE program guarantees a seat on campus in a selected PaCE major by having met the general and major specific transition requirements. There is no guarantee of being able to change to a different major (PaCE or non-PaCE) after transitioning to campus.</p>

<h3>Terms of Transition</h3>
<p>Transitioning to campus requires meeting all conditions of the <i>Pathway to Campus Enrollment (PaCE) Contract</i>:

<ul>
  <li>Earn a total of 60 credits (up to 45 credits may come from previous college credits earned through AP, IB, Dual Enrollment, or other accelerated methods)</li>
  <li>Enroll in UF Online for at least two semesters and earn at least 15 credit hours through UF Online</li>
  <li>Complete all transition requirements with grades for your selected PaCE major</li>
  <li>The University of Florida reserves the right to ask for additional information and the right to deny the request for transition to campus.</li>
  <li>If you have any questions about your eligibility or the transition process, please contact your academic advisor.</li>
</ul>

<h3>Failure Notice</h3>
<p>Not passing current classes (including failing a class or withdrawing from a class), or failing to meet the transition requirements in any way, will require informing my advisor: <a href="mailto:nraymond@advising.ufl.edu">Nicole Raymond</a>. This might impact my transition eligibility, so the implications will be discussed with my advisor.</p>

<h3>Contact Us</h3>
<p>Advisor: Nicole<br>
  Phone: 352-<br>
  Email: nyramond<br>
  Address: Farrior
</p>

<h3>Changes?</h3>
<p>If you'd like to adjust any of this information, just use this Page: <a href="#">https://advising.ufl.edu/UFO/PaCE/transition/</a></p>
<p>Please let us know if you have any questions!</p>
<p><b>-PaCE Transition Team</b></p>
