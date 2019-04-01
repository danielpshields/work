<?php
  $root = "../";
  require("{$root}include/admin_navCreds.php");
  if (!$canStay) {
    header("Location: {$root}records/transition.php");
    exit;
  }
  require("{$root}include/db.php");


  // pending email contact list POP action, removes name from email list on records/pending.php
  if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $popContact = "UPDATE pace_transition SET contacted = 2 WHERE email = '{$email}'";
    $pop = mysqli_query($connection, $popContact);
    if (!$pop) {die("pop failed");}
    header("Location: {$root}records/pending.php");
    exit;
  }
  // pending emails Reset one at a time
  if (isset($_GET['contactedReset'])) {
    $email = $_GET['contactedReset'];
    $pushContact = "UPDATE pace_transition SET contacted = 0 WHERE email = '{$email}'";
    $push = mysqli_query($connection, $pushContact);
    if (!$push) {die("push failed");}
    header("Location: {$root}records/pending.php");
    exit;
  }
  //pending emails Reset all
  if (isset($_GET['resetContacted'])) {
    $pushContact = "UPDATE pace_transition SET contacted = 0";
    $push = mysqli_query($connection, $pushContact);
    if (!$push) {die("reset all failed");}
    header("Location: {$root}records/pending.php");
    exit;
  }

//////////////////////////////////

foreach ($_GET as $key => $value) {
 echo  $raw = base64_decode($key);
 echo  $url = base64_decode($value);
}

if ($raw === "sendEmails" && $url === "okToSend") {
  // $readEmails = "SELECT * FROM alex WHERE contacted = 0";
  $readEmails = "SELECT * FROM pace_transition WHERE contacted = 0 AND submitted = 0";
  $readQuery = mysqli_query($connection, $readEmails);
  if (!$readQuery) {die("read emails fail");}

  while ($row = mysqli_fetch_assoc($readQuery)) {
    echo "inside while";
    $recipeintName  = $row['name'];
    $email          = $row['email'];
    echo $recipeintName . " " . $email . "<br>";
    require("{$root}email/pending/pending_email.php");
    // $updateContact = "UPDATE alex SET contacted = 1 WHERE email = '{$email}'";
    $updateContact  = "UPDATE pace_transition SET contacted = 1 WHERE email = '{$email}'";
    $updateQuery    = mysqli_query($connection, $updateContact);
    if (!$updateQuery) { die("update failed"); }
  }

  $resetPoppedPending = "UPDATE pace_transition SET contacted = 0 WHERE contacted = 2";
  $resetPoppedQuery   = mysqli_query($connection, $resetPoppedPending);

  header("Location: {$root}records/pending.php");
  exit;

} else {
  header("Location: {$root}records/pending.php");
  exit;
}




?>
