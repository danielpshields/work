<?php
  $root  = "../";
  $path  = "";
  $title = "Petition";
  $page  = "petitions";
  $style = "petition";
  require("{$root}include/header.php");
  $readTicket   = "SELECT * FROM ufo_petitions WHERE student_email = 'madalyn.cubillos@ufl.edu'";
  $readTicketDB = mysqli_query($connection, $readTicket);
  if (!$readTicketDB) {die ("cannot read db"); }
?>

  <div class="page">
    <?php include("{$path}include/nav.php"); ?>
    <div id="petitionContainer">
         <div id="studentInformation">
           <table>
             <?php while ($row = mysqli_fetch_assoc($readTicketDB)) {
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
           <?php } //end header variables while loop ?>
           </table>

         </div><!-- student information -->

         <?php if (true) { ?>
           <div id="popUp_studentSignature">
             <h3>Student Signature*:</h3>
             <p>*Your signaure on this form indicates you understand that submitting false or misleading materials violates the Student Honor Code, 6C1-4.017. Violators of the Student Honor Code will be reported to the Office of Student Conduct and Conflict Resolution.</p>
             <form class="" action="index.html" method="post">
               <input type="checkbox" name="" value="">
               <input id="input_submit_signature" type="submit"   name="submit" value="agree">
             </form>
           </div>
         <?php } else { ?>

         <ul>
           <li>Attach a personal statement (no more than one page, typed, and 10-12 pt font) explaining your extenuating circumstances. Provide documentation of extenuating circumstances (keep copies of documentation for your records) that you think warrant an exception to policy.</li>
           <li>You can submit completed form and any accompanying documents in the following ways: submit it through the online format *******, email <a href="mailto:CLASUFOnline@advising.ufl.edu">CLASUFOnline@advising.ufl.edu</a>, or by fax 352-392-8791. The Petitions Committee typically meets once a week. Results will be sent to your ufl.edu email in a timely manner.</li>
         </ul>

         <div style="margin: 30px auto;">
           Decision Date: <input type="text" name="" value="" placeholder="<?php echo date('m/d/y'); ?>">
            Approved, Denied <input type="checkbox" name="" value=""><br>
            Deferred/Resubmit by: <input type="text" name="" value="" placeholder="date">
           </div>

        <h3>Comments and Conditions:</h3>
        <img src="image/icons/comments.png">

          <h3>Comments:</h3>
          <textarea name="name" placeholder="there should be a second view where stipulations are input"></textarea>
          <input type="submit" name="commentsSubmit" value="add comments">

        </div><!-- petition container -->
      <?php } ?>

      </div><!-- page -->


<?php require("{$root}include/footer.php") ;?>
