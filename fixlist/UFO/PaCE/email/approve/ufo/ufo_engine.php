<?php

$to        = $email;
$subject   = 'UF PaCE Transition Notification';
$message   = messageContent("ufo_content.php");

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
$headers[] = 'To: <'.$to.'>';
$headers[] = 'From: Nicole Raymond <nraymond@advising.ufl.edu>';
// $headers[] = 'Cc: claspace@advising.ufl.edu';
$headers[] = 'Bcc: acatalano2@ufl.edu';
// $headers[] = 'Bcc: ';
// send it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
