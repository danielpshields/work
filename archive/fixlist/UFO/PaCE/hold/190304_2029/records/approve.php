<?php
  $root = "../";
  $page = "Approve";
  $pageName = "Records: Approve";
  require("{$root}include/header/header.php");
  require("{$root}include/db.php");

  $studentEmail_get = $_GET['email'];

  if (isset($_POST['submit'])) {
    $studentEmail_post = $_POST['email'];
    $query  = "UPDATE pace_transition SET submitted = 2, timeApproved = '$timeStamp' WHERE email = ";
    $query .= "'" . $studentEmail_post . "'";
    $updateApproved = mysqli_query($connection, $query);
    if(!$updateApproved) { die ("query failed"); }
    header("Location: {$root}records/transition.php");
    exit;
  }

  include("{$root}include/header/admin_nav.php");
?>

  <div class="inputShell">
    <h3 class="blue">Approve</h3>
    <form action="<?php echo $root; ?>records/approve.php" method="post">
      <p>Would you like to approve <b><?php echo $studentEmail_get; ?></b> for transition?</p>
      <input class="checkBox" type="checkbox" name="approve" value="approved" required>
      <input type="hidden" name="email" value="<?php echo $studentEmail_get; ?>">
      <input class="submitButton" type="submit" name="submit" value="submit">
    </form>
  </div>




<?php require("{$root}include/footer.php") ;?>
