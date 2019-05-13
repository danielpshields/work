<?php
  $root = "../";
  $page = "Records: Edit";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  require("{$root}include/db.php");

    $get_id    = $_GET['id'];
    $get_email = $_GET['email'];

    // print out the student's information from the transition section
    $query     = "SELECT * FROM pace_transition WHERE email = ";
    $query    .= "'" . $get_email . "'";
    $spit      = mysqli_query($connection, $query);
    //if (!$spit) { die ("query failed"); }

    include("{$root}include/header/admin_nav.php");

?>

<?php print_r($_GET); ?>
<div class="barrier">
  <div class="barrierHeader">
    <?php while($row = mysqli_fetch_assoc($spit)) {
      require("record_variables.php");
      $approvedTime  = $row['timeApproved'];
      $breakApproved = explode("|", $approvedTime);
      $date_approved = $breakApproved[0];
      $time_approved = $breakApproved[1];
      $approved = $date_approved . " " . $time_approved;
    ?>
    <?php
      if ($submitted == 0) {  ?>
      <p class="pending">pending</p>
    <?php } else if ($submitted == 1) { $studentSubmitted = true; ?>
      <?php ?>
      <p class="submitted">submitted</p>
    <?php } else if ($submitted == 2) { ?>
      <p class="approved">approved</p>
    <?php }
    $breakCreated = explode("|", $formCreated);
    $monthDay     = $breakCreated[0];
    $hourTime     = $breakCreated[1];

    ?>
    <p class="timeCreated"><?php echo $monthDay; ?></p>
  </div><!-- barrier header -->
  <div class="identifyVariables">
    <p id="ledeName">"<?php echo $row['name']; ?>"</p>
    <h3><?php echo $studentID; ?></h3>
    <p class="studentID"><?php echo $student_email; ?></p>
  </div>
  <?php include("guts.php"); ?>
  <?php
    if ($submitted == 1 || $submitted == 2) {
      $break_submitted = explode("|", $formSubmitted);
      $monthDay_submitted = $break_submitted[0];
      $hourTime_submitted = $break_submitted[1];
      ?>
      <div class="formCreated">
        <p>Student submitted: <b><?php echo $monthDay_submitted . "</b> at <b>" . $hourTime_submitted; ?></i></b></p>
      </div><!-- form created -->
  <?php } else { ?>
    <div class="formCreated">
      <p>ticket is pending</p>
    </div><!-- form created -->
  <?php }?>
  <?php } ?>

<?php require("{$root}include/footer.php") ;?>
