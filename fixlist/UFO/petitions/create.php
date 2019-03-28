<?php
  $root  = "../";
  $path  = "";
  $title = "Create Petition";
  $page  = "petitions";
  $style = "create";
  $tabIndex = 1;
  $post  = "";
  $student_name  = "";
  $student_email = "";
  $student_phone = "";
  $student_ID    = "";
  $infoUnsorted  = true;
  require("{$root}include/header.php");

  if (isset($_POST['strip_submit'])) {
    $infoUnsorted = false;
    include("{$path}include/stripSubmit.php");
  }

  if (isset($_POST['manual_submit'])) {
    $infoUnsorted = false;
    $student_name  = $_POST['manual_student_name'];
    $student_email = $_POST['manual_student_email'];
    $student_phone = $_POST['manual_student_phone'];
    $student_ID    = $_POST['manual_student_id'];
  }
 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

    <!-- only load the inputs if all empty -->
    <?php if ($infoUnsorted) { ?>

      <div id="infoUnsorted">

        <form class="addInfoBox" action="create.php" method="post">
          <h3>Manual Input</h3>
          <input type="text" name="manual_student_name"  value="" placeholder="Martha Gator" tabindex="<?php echo $tabIndex++; ?>">
          <p>Name</p>
          <input type="text" name="manual_student_id"    value="" placeholder="12344321" tabindex="<?php echo $tabIndex++; ?>">
          <p>UFID</p>
          <input type="text" name="manual_student_email" value="" placeholder="mgator@ufl.edu" tabindex="<?php echo $tabIndex++; ?>">
          <p>Email</p>
          <input type="text" name="manual_student_phone" value="" placeholder="202-555-0154" tabindex="<?php echo $tabIndex++; ?>">
          <p>Phone</p>
          <input class="submitButton" type="submit" name="manual_submit" value="Enter Text" tabindex="<?php echo $tabIndex++; ?>">
        </form>

        <form class="addInfoBox" action="create.php" method="post">
          <h3>Advisior Notes <i>(Strip)</i></h3>
          <input type="text" name="strip_student_id" value="" placeholder="12344321" tabindex="<?php echo $tabIndex++; ?>">
          <p>UFID</p>
          <textarea name="stripText" rows="8" placeholder="<?php echo $holdText; ?>" tabindex="<?php echo $tabIndex++; ?>"></textarea>
          <input class="submitButton" type="submit" name="strip_submit" value="Pull Content" tabindex="<?php echo $tabIndex++; ?>">
        </form>

      </div><!-- unsorted information section -->

   <?php } else {

      if (!isset($advisorLoggedIn)) { ?>

        <ul id="statusBar">
          <li style="background: #7AC0FF;">initialized</li>
          <li style="background: #8985FF;">sent</li>
          <li style="background: #FFDD70;">receieved/commented</li>
          <li style="background: #FFC470;">approved/denied</li>
        </ul>

    <?php } ?>

    <div id="page_ii">



    <h2 class="gray">Ticket Information</h2>

    <div id="studentInformation">


      <table>
        <tr>
          <td><b>Name:</b></td>
          <td><input type="text" value="<?php echo $student_name; ?>"></td>
        </tr>
        <?php if (!empty($student_ID)) { ?>
        <tr>
          <td><b>UFID:</b></td>
          <td><input type="text" value="<?php echo $student_ID;  ?>"></td>
        </tr>
        <?php } ?>
        <tr>
          <td><b>Email:</b></td>
          <td><input type="text" value="<?php echo $student_email; ?>"></td>
        </tr>
        <tr>
          <td><b>Phone:</b></td>
          <td><input type="text" value="<?php echo $student_phone; ?>"></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo "date: " . $date_auto; ?></td>
        </tr>
      </table>
    </div><!-- student information -->


   <table id="petitionTable">
     <thead>
       <tr>
         <th>CIRCLE</th>
         <th>COMPLETE APPROPRIATE SECTION</th>
         <th>TO HAVE YOUR PETITION REVIEWED, YOU MUST:</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <!-- <td>A <img src="image/icons/rain.png"></td> -->
         <td>A <img src="image/icons/cancel.png"></td>
         <td>

           <p><b>Petition to drop</b> the following course(s) from the current term by the published deadline:</p>

<?php $i = 0; ?>

          <p id="addCoursesOption"><i>(+) add courses</i></p>
           <form action="index.html" method="post">

             <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
             <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">

             <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
             <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">

             <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
             <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">

             <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
             <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">

             <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
             <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">
           </form>

         </td>
         <td>
           <p style="color: green;">&#10004;</p>
         </td>
       </tr>
       <tr>
         <td>B <img src="image/icons/handcuffs.png"></td>
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
         <td>C <img src="image/icons/route.png"></td>
         <td>
           Continuation in CLAS Major

           Off-track two consecutive terms in  __(major)__

           ☐Two unsuccessful attempts of required course(s) for major:
           Course(s) __ __
         </td>
         <td>•	Reach out to your undergraduate coordinator for your major and request they submit electronic feedback.</td>
       </tr>
       <tr>
         <td>D <img src="image/icons/escape.png"></td>
         <td>Petition to Break Residency</td>
         <td>
           •	If your petition is approved:
             	Submit a transient form at www.floridashines.org for state colleges and universities or attach a hard copy transient form found at http://registrar.ufl.edu/forms.html for private or out-of-state institutions.
         </td>
       </tr>
       <tr>
         <td>E <img src="image/icons/moving.png"></td>
         <td>Dual Enroll at ________________ to take
         (institution)</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td>F <img src="image/icons/information.png"></td>
         <td>Other<br>____</td>
         <td>•	Discuss your petition with your academic advisor to determine if you should use this form. The advisor will instruct you what to list underneath “Other” if reasons necessitate a petition. Examples of “Other” reasons: S/U after the deadline, Catalog Year change, additional flexible learning classes</td>
       </tr>
     </tbody>
   </table>

   Decision Date:<br>
   Approved  ☐	Denied ☐<br>
   Deferred/Resubmit by:

   <h3>Comments and Conditions:</h3>

  <?php } ?>

    </div><!-- page_ii -->

  </div><!-- page -->

  <!-- <input type="submit" name="createPetition" value="Create Petition"> -->

<?php require("{$root}include/footer.php") ;?>
