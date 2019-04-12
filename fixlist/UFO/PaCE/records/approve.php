<?php
  $root = "../";
  $page = "approve";
  $pageName = "Records: Approve";
  require("{$root}include/db.php");
  require("{$root}include/header/header.php");
  noCanStay();
  $studentEmail_get = $_GET['email'];
  $transitionType   = $_GET['submitted'];
  $readConditions = "SELECT * FROM pace_transition WHERE email = ";
  $readConditions .= "'" . $studentEmail_get . "'";
  $spitResults = mysqli_query($connection, $readConditions);
  include("{$root}include/stipulations/variables.php");

  if (isset($_POST['campus_submit'])) {
    $studentEmail_post = $_POST['email'];
    $query  = "UPDATE pace_transition SET submitted = 2, timeApproved = '$timeStamp' WHERE email = ";
    $query .= "'" . $studentEmail_post . "'";
    $updateApproved = mysqli_query($connection, $query);
    if(!$updateApproved) { die ("query failed"); }
    include("{$root}email/approve/approve_email.php");
    header("Location: {$root}records/transition.php");
    exit;
  }

  if (isset($_POST['ufo_submit'])) {
    $studentEmail_post = $_POST['email'];
    $query  = "UPDATE pace_transition SET submitted = 4, timeApproved = '$timeStamp' WHERE email = ";
    $query .= "'" . $studentEmail_post . "'";
    $updateApproved = mysqli_query($connection, $query);
    if(!$updateApproved) { die ("query failed"); }
    include("{$root}email/approve/ufo/ufo_email.php");
    header("Location: {$root}records/transition.php");
    exit;
  }

     if ($transitionType == 3) { ?>

        <form action="<?php echo $root; ?>records/<?php echo $page; ?>.php" method="post">
          <div class="inputShell">
          <h3 class="blue">UF Online Approval</h3>
          <p>Would you like to approve <b><?php echo $studentEmail_get; ?></b> to remain in UF Online?</p>
          <input type="hidden" name="name" value="<?php echo $studentName; ?>">
          <input type="hidden" name="id" value="<?php echo $student_ID; ?>">
          <input type="hidden" name="major" value="<?php echo $ufoMajor; ?>">
          <input type="hidden" name="email" value="<?php echo $db_email; ?>">
          <input class="checkBox" type="checkbox" name="approve" value="approved" required>
          <input class="submitButton" type="submit" name="ufo_submit" value="submit">
          </form>
        </div><!-- input shell -->

      <?php  } else { ?>

      <form action="<?php echo $root; ?>records/<?php echo $page; ?>.php" method="post">
        <?php require("{$root}include/approvalForm.php"); ?>
        <div class="inputShell">
          <h3 class="blue">Campus Approval</h3>
            <p>Would you like to approve <b><?php echo $studentEmail_get; ?></b> to transition to campus?</p>
            <input class="checkBox" type="checkbox" name="approve" value="approved" required>
            <input class="submitButton" type="submit" name="campus_submit" value="submit">
            </form>
      </div><!-- input shell -->
      <?php } ?>


<?php require("{$root}include/footer.php") ;?>
