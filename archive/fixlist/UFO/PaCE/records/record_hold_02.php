<?php
  $root = "../";
  require("../include/db.php");
  $page = "record";
  $dataPage = "all";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $scriptName = "records";
?>

<?php
// Queries

//spit results
  $query       = "SELECT * FROM pace_transition";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("spit results query failed"); }
?>

<?php
// same-page $_POST variables

//[record.php] post submission to update / approve student ticket from notes
  if (isset($_POST['approveFromNotes'])) {
    $studentEmail = $_POST['studentEmail'];
    $updateSubmitted = "UPDATE pace_transition SET submitted = 2 WHERE email = '{$studentEmail}'";
    $update = mysqli_query($connection, $updateSubmitted);
    if (!$update) {die("update from notes query failed"); }
    include("{$root}email/approve/approve_email.php");
    redirectTo("{$root}records/record.php?studentEmail={$studentEmail}");
  }


//[record.php] post submission to create a new ticket, vars are in includes file
  if (isset($_POST['createTicket'])) {
    include("createTicket.php");
  }

?>

<?php

//student records
  $studentRecord     = "SELECT * FROM pace_transition WHERE email = '{$studentEmail}'";
  $spitStudentRecord = mysqli_query($connection, $studentRecord);
  if (!$spitStudentRecord) { die ("student records query failed"); }

// searchFor for LDAP = [sortNav.php] email or student id
  if (isset($_POST['searchFor']) {
    $searchedTerm = $_POST['searchFor'];
    if (is_numeric($searchedTerm)) {
      $numeric_ID      = $searchedTerm;
      $searchedTerm_ID = true;
    } else {
      $email_ID          = $searchedTerm;
      $givenName         = cleanEmail($searchedTerm);
      $searchedTerm_Email = true;
    }
  }
?>

<?php
// [majors.php] show student, who's in the system's, record
  if (isset($_GET['getFromMajors'])) {
    $fromMajor_id    = $_GET['getFromMajors'];
    $fromMajor_email = $_GET['email'];
  }
?>

<script type="text/javascript" src="<?php echo $root; ?>scripts/showHideRecord.js"></script>
<!-- no records and whoIS -->

  <div id="records_container">
    <div id="tickets_container">

      <?php
        // if there are no records found for student
        // want to create a new ticket
        include("noRecordFound.php");
      ?>
      <?php
        // if records found for student
        include("ticketExists.php");
        // if submitted == 1 || submitted == 3
        include("approveFromNotes.php");
      ?>

    </div><!-- tickets Container -->
    <?php include("{$root}records/sortNav.php"); ?>
</div><!-- records Container -->

<?php
  // include("whoIS.php");
  // don't let this page be view empty -- there's another way to do this.
  // else { redirectTo("{$root}records/transition.php"); }
  // include("newTicketDropdown.php");
?>

<?php
include("{$root}include/footer.php");
mysqli_close($connection);
?>
