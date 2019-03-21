<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  $style = "pending";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  $scriptName = "majors";
  include("{$root}include/credentials.php");
  $scriptName = $page;
  $query = "SELECT * FROM pace_transition WHERE submitted = 0 AND contacted = 0 ORDER BY email ASC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  include("{$root}include/header/admin_nav.php");
?>

  <div id="records_container">
    <div id="tickets_container">
      <h2>Email Pending Tickets</h2>

      <?php if (mysqli_num_rows($spitResults)) { ?>
      <div id="pendingMasterList">
        <h4>Pending Gatorlinks:</h4>
        <p>
            <?php
          $i = 0;
            while($row = mysqli_fetch_assoc($spitResults)) {
              $i++;
              $conditionsExist = true;
              require("record_variables.php"); ?>
              <a href="<?php echo $root; ?>records/processor.php?email=<?php echo $student_email; ?>" title="Remove <?php echo $student_email; ?> from email reminder list"><?php truncation($student_email); ?>,</a>
          <?php } ?><!-- spit results -->
        </p>
        <p class="tiny">(click gatorlink to remove from list)</p>

        <div id="sendList">
          <?php $raw = base64_encode("sendEmails");   $url = base64_encode("okToSend"); ?>
          <p><a href="<?php echo $root . "records/processor.php?" . $raw . "=" . $url; ?>">Send (<b><?php echo $i; ?></b>) Reminder Email<?php if ($i > 1) {echo"s";} ?></a></p>
        </div><!-- send list -->

      </div><!-- pending master email list -->

          <?php
            $alreadyContacted = "SELECT * FROM pace_transition WHERE contacted = 1 AND submitted = 0";
            $contactedQuery   = mysqli_query($connection, $alreadyContacted);
            if (mysqli_num_rows($contactedQuery)) { ?>

            <div id="contactedFolks">
              <h3>Contacted / Removed from Email Reminder List</h3>
              <p class="tiny"><i>(click to put back)</i></p>
              <ul>
            <?php
              while($row = mysqli_fetch_assoc($contactedQuery)) {
                require("record_variables.php"); ?>
                  <li><a href="<?php echo $root; ?>records/processor.php?contactedReset=<?php echo $student_email; ?>"><?php echo $student_email; ?></a></li>
                <?php } ?><!-- spit results -->
              </ul>
            </div>
          <?php }

           if (mysqli_num_rows($contactedQuery) > 1) { ?>
             <div id="resetList">
               <p><a href="<?php echo $root; ?>records/processor.php?resetContacted=true">[reset / restore all]</a></p>
             </div>
          <?php } ?>
        <?php } else {  ?>

          <div class="inputShell">
            <h3 class="black">Transition Tickets: Pending</h3>
            <p>There are <b>zero</b> pending transition tickets!</p>
            <ul>
              <li><b><a href="<?php echo $root; ?>ticket/transition.php">Make a transition ticket</a></b></li>
            </ul>
          </div>
        <?php } ?>
      </div><!-- tickets Container -->
      <?php include("{$root}records/sortNav.php"); ?>
    </div><!-- records Container -->

<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
