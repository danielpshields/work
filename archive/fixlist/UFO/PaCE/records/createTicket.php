<?php

ob_start();
$studentID   = $_POST['UFID_transition'];
$name        = $_POST['firstName'];
$email       = $_POST['email'];
$stipulation = $_POST['stipulation']; $stipulation = mysqli_real_escape_string($connection, $stipulation);
$course      = $_POST['course'];
$grade       = $_POST['grade'];
$course2     = $_POST['course2'];
$grade2      = $_POST['grade2'];
$course3     = $_POST['course3'];
$grade3      = $_POST['grade3'];
$course4     = $_POST['course4'];
$grade4      = $_POST['grade4'];
$gpaMajor    = $_POST['gpaMajor'];
$gpaUF       = $_POST['gpaUF'];
$paceMajor   = $_POST['paceMajor'];
$semester    = $_POST['semester'];
$phone       = $_POST['phone'];
//$formCreated = $_POST['formCreated'];
$writeTicket  = "INSERT INTO pace_transition ";
$writeTicket .= "(studentID,name,email,stipulation,course,grade,course2,grade2,course3,grade3,course4,grade4,gpaMajor,gpaUF,paceMajor,semester,phone,submitted,formCreated) VALUES ('{$studentID}', '{$name}', '{$email}','{$stipulation}','{$course}','{$grade}','{$course2}','{$grade2}','{$course3}','{$grade3}','{$course4}','{$grade4}','{$gpaMajor}','{$gpaUF}', '{$paceMajor}', '{$semster}', '{$phone}', '0','{$timeStamp}')";
$newTicket = mysqli_query($connection, $writeTicket);
if (!$newTicket) { die ("query failed"); }
include("{$root}email/ticket/transition/transition_email.php");
redirectTo("{$root}records/transition.php?major=" . $paceMajor . "&condition=" . $stipulation . "&gpaUF=" . $gpaUF . "&gpaMajor=" . $gpaMajor);

?>
