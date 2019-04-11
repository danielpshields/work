<?php if ($studentSubmitted) { ?>
  <div id="approveFromNotes">
    <h3 class="blue">Approve Transition?</h3>
    <form action="<?php echo $root; ?>records/record.php?studentEmail=<?php echo $student_email; ?>" method="post">
      <?php include("{$root}include/stipulations/variables.php");?>
        <?php require("{$root}include/approvalForm.php"); ?>
        <input type="hidden" name="studentEmail" value="<?php echo $student_email; ?>">
        <p>Would you like to approve <b><?php echo $student_email; ?></b> for transition?</p>
        <input id="approveStatement" class="checkBox" type="checkbox" name="approve" value="" required>
      <input class="submitButton" type="submit" name="approveFromNotes" value="submit">
    </form>
  </div>
  <!-- approve from notes -->
<?php } ?>
