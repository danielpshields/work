<?php
  $root = "../";
  $page = "approve";
  $pageName = "Records: Approve";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  require("{$root}include/db.php");

  $studentEmail_get = $_GET['email'];

  $readConditions = "SELECT * FROM pace_transition WHERE email = ";
  $readConditions .= "'" . $studentEmail_get . "'";
  $spitResults = mysqli_query($connection, $readConditions);
  include("{$root}include/stipulations/variables.php");

  if (isset($_POST['submit'])) {
    $studentEmail_post = $_POST['email'];
    $query  = "UPDATE pace_transition SET submitted = 2, timeApproved = '$timeStamp' WHERE email = ";
    $query .= "'" . $studentEmail_post . "'";
    $updateApproved = mysqli_query($connection, $query);
    if(!$updateApproved) { die ("query failed"); }
    include("{$root}email/approve/approve_email.php");
    header("Location: {$root}records/transition.php");
    exit;
  }
  include("{$root}include/header/admin_nav.php");
?>
<form action="<?php echo $root; ?>records/<?php echo $page; ?>.php" method="post">
  <?php require("{$root}include/approvalForm.php"); ?>
<div class="inputShell">
  <h3 class="blue">Approve</h3>
    <p>Would you like to approve <b><?php echo $studentEmail_get; ?></b> for transition?</p>
    <input class="checkBox" type="checkbox" name="approve" value="approved" required>
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>
</div>

<?php require("{$root}include/footer.php") ;?>
