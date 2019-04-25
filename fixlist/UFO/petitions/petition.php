<?php
  if (empty($_GET)) {
    header("Location: index.php");
    exit;
  }

  $root  = "../";
  $path  = "";
  $title = "Petition";
  $page  = "petitions";
  $style = "petition";
  require("{$root}include/header.php");
  $get_student_email = $_GET['studentEmail'];
  $readTicket    = "SELECT * FROM ufo_petitions WHERE student_email = '{$get_student_email}'";
  $db_readTicket = mysqli_query($connection, $readTicket);
  if (!$db_readTicket) {die ("cannot read db"); }

?>

  <div class="page" style="margin-top: 1.5rem;">
    <?php include("{$path}include/nav.php"); ?>
    <div id="petitionContainer">
      <div id="petition_bottom_statusBar">
        <div>Decision Date: <input type="text" name="" value="" placeholder="<?php echo date('m/d/y'); ?>"></div>
        <div>Approved <input type="checkbox" name="" value=""> Denied <input type="checkbox" name="" value=""></div>
        <div>Deferred/Resubmit by: <input type="text" name="" value="" placeholder="date"></div>
      </div>
         <div id="studentInformation">
           <table>
             <?php while ($row = mysqli_fetch_assoc($db_readTicket)) {
                 include("{$path}include/variables.php");
               ?>
             <tr>
               <td><b>Name:</b></td>
               <td><?php echo $db_student_name; ?></td>
             </tr>
             <tr>
               <td><b>UFID:</b></td>
               <td><?php echo $db_student_ID;  ?></td>
             </tr>
             <tr>
               <td><b>Email:</b></td>
               <td><?php echo $db_student_email; ?></td>
             </tr>
             <tr>
               <td><b>Phone:</b></td>
               <td><?php echo $db_student_phone; ?></td>
             </tr>
             <tr>
               <td><b>Date:</b></td>
               <td><i><?php echo date("m-d-y"); ?></i></td>
             </tr>


            <?php // check | has the student signed the document
            $documentSigned = $db_student_signature == 1 ? true : false;

            } //end header variables while loop ?>
           </table>

         </div><!-- student information -->

         <?php if (!$db_student_signature) { ?>

           <div id="popUp_studentSignature">
             <h3>Student Signature*:</h3>
             <p>*Your signaure on this form indicates you understand that submitting false or misleading materials violates the Student Honor Code, 6C1-4.017. Violators of the Student Honor Code will be reported to the Office of Student Conduct and Conflict Resolution.</p>
             <form action="<?php echo $path; ?>processor.php" method="post">
               <input id="input_checkbox_signature" type="checkbox" name="checkSignature" value="">
               <input id="input_submit_signature" type="submit" name="signature" value="submit">
               <input type="hidden" name="studentEmail" value="<?php echo $get_student_email; ?>">
             </form>
           </div>
         <?php } else { ?>
         <ul id="instructions">
           <li>Attach a personal statement (no more than one page, typed, and 10-12 pt font) explaining your extenuating circumstances. Provide documentation of extenuating circumstances (keep copies of documentation for your records) that you think warrant an exception to policy.</li>
           <li>You may submit completed form and any accompanying documents in the following ways: submit it through the online format *******, email <a href="mailto:CLASUFOnline@advising.ufl.edu">CLASUFOnline@advising.ufl.edu</a>, or by fax 352-392-8791. The Petitions Committee typically meets once a week. Results will be sent to your ufl.edu email in a timely manner.</li>
         </ul>

         <h3 id="h3_petitionHeading">Petitions:</h3>
         <?php
         $tempGetTicket = "SELECT * FROM ufo_petitions WHERE student_email = '{$get_student_email}'";
         $db_tempTicket = mysqli_query($connection, $tempGetTicket);
         if (!$db_tempTicket) {die("temp ticket failed");}


         while ($row = mysqli_fetch_assoc($db_tempTicket)) {
             include("{$path}include/variables.php");
             foreach ($list_allPetitions as $key => $value) {
               if ($value == 1) {
                 foreach ($petitionOptions as $petition => $description) {
                   if ($key === $petition) {
                     echo "<div class=\"container_petition\">";
                     include("petition/{$key}.php");
                     echo "</div>";
                   }
                 }
               }
             }
          } //end while ?>



        </div><!-- petition container -->
      <?php } ?>

      </div><!-- page -->


<?php require("{$root}include/footer.php") ;?>
