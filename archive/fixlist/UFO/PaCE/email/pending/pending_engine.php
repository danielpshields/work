<?php

$to        = $email;

$subject   = 'PaCE Transition Reminder';

$message   = messageContent("{$emailType}content.php");

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
$headers[] = 'From: Nicole Raymond <nraymond@advising.ufl.edu>';

mail($to, $subject, $message, implode("\r\n", $headers));

?>
