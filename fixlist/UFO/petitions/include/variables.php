
<?php

// while ($row = mysqli_fetch_assoc($checkResultsDB)) {

  $db_advisor_name       = $row['advisor_name'];
  $db_advisor_ID         = $row['advisor_ID'];
  $db_advisor_email      = $row['advisor_email'];


  $db_student_name       = $row['student_name'];
  $db_student_ID         = $row['student_ID'];
  $db_student_email      = $row['student_email'];
  $db_student_phone      = $row['student_phone'];
  $db_student_major      = $row['student_major'];


  $db_petition_drop      = $row['petition_drop'];
  $db_petition_probation = $row['petition_probation'];
  $db_petition_track     = $row['petition_track'];
  $db_petition_break     = $row['petition_break'];
  $db_petition_dual      = $row['petition_dual'];
  $db_petition_other     = $row['petition_other'];
  $db_advisor_comments   = $row['advisor_comments'];
  $db_time_created       = $row['time_created'];

// }

  $list_allVariables = array(
    $db_advisor_name,
    $db_advisor_ID,
    $db_advisor_email,
    $db_student_name,
    $db_student_ID,
    $db_student_email,
    $db_student_phone,
    $db_student_major,
    $db_petition_drop,
    $db_petition_probation,
    $db_petition_track,
    $db_petition_break,
    $db_petition_dual,
    $db_petition_other,
    $db_advisor_comments,
    $db_time_created
  );





?>
