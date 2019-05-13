<?php

require("{$root}include/db.php");



if (isset($_POST['note_submit'])) {
  $get_id    = $_POST['id'];
  $get_email = $_POST['email'];
  $note      = $_POST['studentNote'];
  $note = mysqli_real_escape_string($connection, $note);
  $timeStamp    = date('n/j/y|g:i a');
  $writeQuery = "INSERT INTO pace_student_notes (studentID,	email, note, date) VALUES ('{$get_id}','{$get_email}','{$note}','{$timeStamp}')";
  $addNotes = mysqli_query($connection, $writeQuery);
  if (!$addNotes) { die ("write query failed"); }
  header("Location: records/notes.php?id=".$getID."&email=".$get_email);
  exit;
}







// Exploratory -- should probably be one function with dynamic redirects -- just saying.
if (isset($_POST['exploratoryDashboard'])) {
  $name  = $_POST['name'];
  $email = $_POST['email'];
  require("{$root}include/db.php");
  $query = "INSERT INTO pace_exploratory (name, email) VALUES ('{$name}', '{$email}')";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  include("{$root}email/ticket/exploratory/exploratory_email.php");
  header("Location: dashboard.php");
  exit;
}

if (isset($_POST['exploratorySubmit'])) {
  $name  = $_POST['name'];
  $email = $_POST['email'];
  require("{$root}include/db.php");
  $query = "INSERT INTO pace_exploratory (name, email) VALUES ('{$name}', '{$email}')";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
  include("{$root}email/ticket/exploratory/exploratory_email.php");
  header("Location: records/exploratory.php");
  exit;
}





?>
