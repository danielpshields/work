<?php
  $root = "../";
  include("{$root}include/header.php");

    $createTicket  = "INSERT INTO ufo_petitions (
        advisor_name,
        advisor_ID,
        advisor_email
      ) VALUES  (
        'advisor_name',
        'advisor_ID',
        'advisor_email'
    )";
  $addTicketDB  = mysqli_query($connection, $createTicket);
  if (!$addTicketDB) {die ("add ticket failed"); }

?>
