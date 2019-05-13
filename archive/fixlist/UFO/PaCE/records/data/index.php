<?php

// total sent instances
$sentTotal        = "SELECT * FROM pace_transition";
$sent_ticket      = mysqli_query($connection, $sentTotal);

// pending count
$pendingCount     = "SELECT * FROM pace_transition WHERE submitted = 0";
$pending_ticket   = mysqli_query($connection, $pendingCount);

// total approved
$approvedTotal    = "SELECT * FROM pace_transition WHERE submitted = 2 OR submitted = 4";
$approved_ticket  = mysqli_query($connection, $approvedTotal);

// total approved
$campus_approvedTotal    = "SELECT * FROM pace_transition WHERE submitted = 2";
$campus_approved_ticket  = mysqli_query($connection, $campus_approvedTotal);

// total approved
$ufo_approvedTotal    = "SELECT * FROM pace_transition WHERE submitted = 4";
$ufo_approved_ticket  = mysqli_query($connection, $ufo_approvedTotal);



// UF Online and Campus
$submittedTotal   = "SELECT * FROM pace_transition WHERE submitted = 1 OR submitted = 3";
$submitted_ticket = mysqli_query($connection, $submittedTotal);

$sent            = 0;
$pending         = 0;
$responded       = 0;
$campusTotal   = 0;
$ufoTotal      = 0;
$approvedTotal = 0;

while ($row = mysqli_fetch_assoc($sent_ticket)) {
  $sent++;
}

while ($row = mysqli_fetch_assoc($pending_ticket)) {
  $pending++;
}

while ($row = mysqli_fetch_assoc($submitted_ticket)) {
  $responded++;
}

while ($row = mysqli_fetch_assoc($campus_approved_ticket)) {
  $campusTotal++;
}

while ($row = mysqli_fetch_assoc($ufo_approved_ticket)) {
  $ufoTotal++;
}

while ($row = mysqli_fetch_assoc($approved_ticket)) {
  $approvedTotal++;
}


?>
