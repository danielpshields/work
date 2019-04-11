<?php if (!mysqli_num_rows($spitStudentRecord) ) { ?>
  <div class="inputShell" id="noRecordMessage">
    <h3 class="black">No Record Found</h3>
    <?php if ($searchedTerm_ID) { ?>
      <p class="lightSlugGraph">The UFID, <i><?php echo $student; ?></i>, does not have a ticket</p>
      <p>Create a ticket for <b id="createStudentTicket"><?php echo $student; ?></b>?</p>
    <?php } ?>
    <?php if ($searchedTerm_Name) { ?>
      <p class="lightSlugGraph">The address, <i><?php echo $UID; ?></i>, does not have a ticket</p>
      <p>Create a ticket for UF ID No. <b id="createStudentTicket"><?php echo $UID; ?></b>?</p>
    <?php } ?>
  </div><!-- input shell IN !found -->
<?php } ?>
