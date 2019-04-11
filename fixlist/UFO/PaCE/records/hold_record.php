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
// Query Spit Results
  $query = "SELECT * FROM pace_transition";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>

<?php
//[record.php] post submission to update / approve student ticket from notes
  if (isset($_POST['approveFromNotes'])) {
    $studentEmail = $_POST['studentEmail'];
    $updateSubmitted = "UPDATE pace_transition SET submitted = 2 WHERE email = '{$studentEmail}'";
    $update = mysqli_query($connection, $updateSubmitted);
    if (!$update) {die("update from notes query failed"); }
    include("{$root}email/approve/approve_email.php");
    redirectTo("{$root}records/record.php?studentEmail={$student}");
  }
?>

<?php
// searchFor = [sortNav.php] email or student id

  if (isset($_POST['searchFor']) {

    $searchedTerm = $_POST['searchFor'];

    if (is_numeric($searchedTerm)) {
      $numeric_ID      = $searchedTerm;
      $searchedTerm_ID = true;
    } else {
      $verbal_ID = $searchedTerm;
      $givenName = cleanEmail($searchedTerm);
      $searchedTerm_Name = true;
    }

    $getRecord = "SELECT * FROM pace_transition WHERE email = '{$student}'";
    $spitRecord = mysqli_query($connection, $getRecord);
  }


   else if (isset($_POST['createTicket'])) {
  include("createTicket.php");
  }


   else if (isset($_GET['callRecord'])) {
  $ticketExists    = true;
  $fromMajor_id    = $_GET['callRecord'];
  $fromMajor_email = $_GET['email'];
  }

   else {
  redirectTo("{$root}records/transition.php");
  }
?>



<script type="text/javascript" src="<?php echo $root; ?>scripts/showHideRecord.js"></script>
<!-- no records and whoIS -->
<div id="records_container">
<div id="tickets_container">
<?php include("noRecordFound.php"); ?>
</div><!-- input shell IN !found -->
<?php
include("newTicketDropdown.php");
} // no idea what this does.
include("ticketExists.php");
include("approveFromNotes.php"); ?>
</div><!-- barrier End left side -->
<?php } ?>
</div><!-- tickets Container -->
<?php include("{$root}records/sortNav.php"); ?>
</div><!-- records Container -->

<?php
include("{$root}include/footer.php");
mysqli_close($connection);
?>
