<?php
  $root  = "../";
  $path  = "";
  $title = "Petitions";
  $page  = "petitions";
  $style = "petition";
  require("{$root}include/header.php");
 ?>

 <div class="page">
   <?php include("{$path}include/nav.php"); ?>


   <div class="">
     Decision Date: <input type="text" name="" value="" placeholder="<?php echo date('m/d/y'); ?>">
     <br>

     <!-- .status doesn't exist -->
     <div class="status">
       Approved  ☐	Denied ☐ | Deferred/Resubmit by: <input type="text" name="" value="" placeholder="date">
     </div>
   </div>

   <?php if (!isset($hide)) { ?>


     <div id="a_drop">

       1. display courses || options for courses


       Submit by the current semester’s published deadline, this can be found in the <a href="#" target="_blank">UF Undergraduate Catalog under “Dates and Deadlines.”</a>
       **You should continue participating in the course(s) until you know the results of your petition.**
     </div>

     <div id="b_">

     </div>

     <div id="c_">

     </div>

     <div id="d_">

     </div>

     <div id="e_">

     </div>

     <div id="f_">

     </div>




   <?php } ?>

   <img src="<?php echo $path; ?>image/warning.png" alt="">

   <div id="studentInformation">
     <table>
       <tr>
         <td><b>Name:</b></td>
         <td><?php echo $nameGiven; ?></td>
       </tr>
       <tr>
         <td><b>UFID:</b></td>
         <td><?php echo $UFID;  ?></td>
       </tr>
       <tr>
         <td><b>Email:</b></td>
         <td><?php echo $email; ?></td>
       </tr>
       <tr>
         <td colspan="2"><?php echo "date: " . $date_auto; ?></td>
       </tr>
     </table>

     Phone:  <?php echo ""; ?><br>

   </div><!-- student information -->

    <?php if (true) { ?>
      <h3>Student Signature*:</h3>
      <p>*Your signaure on this form indicates you understand that submitting false or misleading materials violates the Student Honor Code, 6C1-4.017. Violators of the Student Honor Code will be reported to the Office of Student Conduct and Conflict Resolution.</p>
    <?php } ?>

    <?php if (true) { ?>
      <h3>Student Signature*:</h3>
      <p>*Your signaure on this form indicates you understand that submitting false or misleading materials violates the Student Honor Code, 6C1-4.017. Violators of the Student Honor Code will be reported to the Office of Student Conduct and Conflict Resolution.</p>
    <?php } ?>
  <ul>
    <li>Attach a personal statement (no more than one page, typed, and 10-12 pt font) explaining your extenuating circumstances. Provide documentation of extenuating circumstances (keep copies of documentation for your records) that you think warrant an exception to policy.</li>
    <li>You can submit completed form and any accompanying documents in the following ways: submit it through the online format *******, email <a href="mailto:CLASUFOnline@advising.ufl.edu">CLASUFOnline@advising.ufl.edu</a>, or by fax 352-392-8791. The Petitions Committee typically meets once a week. Results will be sent to your ufl.edu email in a timely manner.</li>
  </ul>

     <ul>
       <li>Attach a personal statement (no more than one page, typed, and 10-12 pt font) explaining your extenuating circumstances. Provide documentation of extenuating circumstances (keep copies of documentation for your records) that you think warrant an exception to policy.</li>
       <li>You can submit completed form and any accompanying documents in the following ways: submit it through the online format *******, email <a href="mailto:CLASUFOnline@advising.ufl.edu">CLASUFOnline@advising.ufl.edu</a>, or by fax 352-392-8791. The Petitions Committee typically meets once a week. Results will be sent to your ufl.edu email in a timely manner.</li>
     </ul>
  <table>
    <thead>
      <tr>
        <th>CIRCLE</th>
        <th>COMPLETE APPROPRIATE SECTION</th>
        <th>TO HAVE YOUR PETITION REVIEWED, YOU MUST:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>A</td>
        <td>Petition to drop the following course(s) from the current term by the published deadline:
          Course Prefix/Code: 		Course #:
          Course Prefix/Code: 	  Course #:

          <?php $i = 0; ?>
          <p id="addCoursesOption"><i>(+) add courses</i></p>
          <form action="index.html" method="post">
            <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
            <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">
          </form>


        </td>
        <td>
          <li>Submit by the current semester’s published deadline, this can be found in the UF Undergraduate Catalog under “Dates and Deadlines.”</li>

        **You should continue participating in the course(s) until you know the results of your petition.**


        </td>
      </tr>
      <tr>
        <td>B</td>
        <td>Continuation in CLAS on Academic Probation
          Major: ____________
        </td>
        <td>
          •	Meet with an advisor to discuss:
          	GPA needed to remove all deficit points
          	A realistic plan of how to get on-track for your major by the end of your next term of enrollment
        </td>
      </tr>
      <tr>
        <td>C</td>
        <td>
          Continuation in CLAS Major

          Off-track two consecutive terms in  __(major)__

          ☐Two unsuccessful attempts of required course(s) for major:
          Course(s) __ __
        </td>
        <td>•	Reach out to your undergraduate coordinator for your major and request they submit electronic feedback.</td>

        <h3>Off-Track Continuation</h3>
        Continuation in CLAS Major

        Off-track two consecutive terms in:
        <br>
        <input type="text" name="" value="" placeholder="major">
        <br>

        ☐Two unsuccessful attempts of required course(s) for major:
        <br>
        Course(s):
        <br>
        <input type="text" name="" value="course one">
        <br>
        <input type="text" name="" value="course two">


      </tr>
      <tr>
        <td>D</td>
        <td>Petition to Break Residency</td>
        <td>
          •	If your petition is approved:
            	Submit a transient form at www.floridashines.org for state colleges and universities or attach a hard copy transient form found at http://registrar.ufl.edu/forms.html for private or out-of-state institutions.
        </td>
      </tr>
      <tr>
        <td>E</td>
        <td>Dual Enroll at ________________ to take
        (institution)</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>F</td>
        <td>Other<br>____</td>
        <td>•	Discuss your petition with your academic advisor to determine if you should use this form. The advisor will instruct you what to list underneath “Other” if reasons necessitate a petition. Examples of “Other” reasons: S/U after the deadline, Catalog Year change, additional flexible learning classes</td>
      </tr>
    </tbody>
  </table>

  Decision Date:<br>
  Approved  ☐	Denied ☐<br>
  Deferred/Resubmit by:

  <h3>Comments and Conditions:</h3>
  <img src="image/icons/comments.png">

    <h3>Comments:</h3>
    <textarea name="name" placeholder="there should be a second view where stipulations are input"></textarea>
    <input type="submit" name="commentsSubmit" value="add comments">
</div><!-- container -->


<?php require("{$root}include/footer.php") ;?>
