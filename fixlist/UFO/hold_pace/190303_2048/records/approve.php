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
  }

?>

  <div class="inputShell">
    <h3 class="blue">Approval</h3>
    <form action="<?php echo $root; ?>records/transition.php" method="post">
      <p>Would you like to approve <b><?php echo $studentEmail_get; ?></b> for transition?</p>
      <input class="checkBox" type="checkbox" name="approve" value="approved" required>
      <input type="hidden" name="email" value="<?php echo $studentEmail_get; ?>">
      <input class="submitButton" type="submit" name="submit" value="submit">
    </form>
  </div>




<?php require("{$root}include/footer.php") ;?>
