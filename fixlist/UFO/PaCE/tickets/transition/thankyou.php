<?php
  $page = "thankyou";
  $root = "../../";
  require("{$root}include/header.php");
  require("{$root}include/db.php");
  
  $query  = "UPDATE transition SET studentID = ";
  $query .= "'" . $UFID . "',";
  $query .= " semester = ";
  $query .= "'" . $semester . "'";
  $query .= " WHERE email = ";
  $query .= "'" . $email . "'";

  // UPDATE transition SET studentID = 40811353, semester = fall WHERE email = acatalano2;


  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die("error connecting"); }
?>
<pre>
  <?php
    print_r($_POST);
  ?>
</pre>

  <h2>Thank you for submitting the Transition to Campus form!</h2>

  <p id="thankYou">Your information has been accepted, <?php echo $firstName; ?>!</p>

<?php require("{$root}include/footer.php"); ?>
