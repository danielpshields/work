<?php
  $root  = "../";
  $path  = "";
  $title = "Create Petition";
  $page  = "petitions";
  $style = "create";
  $post  = "";
  $student_name  = "";
  $student_email = "";
  $student_phone = "";
  $id = "";
  $infoUnsorted  = true;
  require("{$root}include/header.php");
  if (isset($_POST['submit'])) {
    include("{$path}include/sortingFunctions.php");
  }
 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

    <?php if ($infoUnsorted) { ?>

      <form id="stripText" action="create.php" method="post">
        <textarea name="stripText" rows="8" cols="80" placeholder="<?php echo $holdText; ?>" tabindex="1"></textarea>
        <input class="submitButton" type="submit" name="submit" value="pull text" tabindex="2">
      </form>

     <form id="setUp" action="create.php" method="post">
       Name : <input type="text" name="" value="<?php echo $student_name; ?>"><br>
       Email: <input type="text" name="" value="<?php echo $student_email; ?>"><br>
       Phone: <input type="text" name="" value="<?php echo $student_phone; ?>"><br>
       <input  class="submitButton"type="submit" name="submitText" value="submitText">
     </form>



   <?php } else { ?>



    <img src="<?php echo $path; ?>image/warning.png" alt="">
    <p><i>form status</i>
      <!-- the columns as stages, initialized, sent, receieved, commented, approved, denied -->

    </p>

    <div id="studentInformation">
      <table>
        <tr>
          <td><b>Name:</b></td>
          <td><?php echo $student_name; ?></td>
        </tr>
        <?php if (!empty($id)) { ?>
        <tr>
          <td><b>UFID:</b></td>
          <td><?php echo $UFID;  ?></td>
        </tr>
        <?php } ?>
        <tr>
          <td><b>Email:</b></td>
          <td><?php echo $student_email; ?></td>
        </tr>
        <tr>
          <td><b>Phone:</b></td>
          <td><?php echo $student_phone; ?></td>
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
         <td>A</td>
         <td>Petition to drop the following course(s) from the current term by the published deadline:
           Course Prefix/Code: 		Course #:
           Course Prefix/Code: 	  Course #:
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

  <?php } ?>
  </div><!-- page -->

  <!-- <input type="submit" name="createPetition" value="Create Petition"> -->

<?php require("{$root}include/footer.php") ;?>
