<?php

$to        = $email;
$subject   = 'UF Online PaCE Exploratory Notification';

$message   = messageContent("content.php");

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
$headers[] = 'To: '. $name . ' <'.$to.'>';
$headers[] = 'From: Nicole Raymond <nraymond@advising.ufl.edu>';
$headers[] = 'Bcc: acatalano2@ufl.edu';
$headers[] = 'Bcc: claspace@advising.ufl.edu';
// $headers[] = 'Bcc: ';
// send it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
