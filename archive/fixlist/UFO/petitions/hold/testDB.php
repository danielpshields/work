<?php
  $root = "../";
  include("{$root}include/header.php");

    $createTicket  = "INSERT INTO ufo_petitions (
        advisor_name,
        advisor_ID,
        advisor_email,
        student_name,
        student_ID,
        student_email,
        student_phone,
        petition_drop,
        petition_probation,
        petition_track,
        petition_break,
        petition_dual,
        petition_other,
        advisor_comments
      ) VALUES  (
        'advisor_name',
        'advisor_ID',
        'advisor_email',
        'student_name',
        'student_ID',
        'student_email',
        'student_phone',
        1,
        1,
        1,
        1,
        1,
        1,
        'advisor_comments'
    )";
  $addTicketDB  = mysqli_query($connection, $createTicket);
  if (!$addTicketDB) {die ("add ticket failed"); }

?>
