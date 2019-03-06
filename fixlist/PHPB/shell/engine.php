<?php

// $to        = $email;
$to        = "";
$subject   = 'PHPH ReStart Application Submission';
$message   = messageContent("content.php");

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
$headers[] = 'To: Alex <'.$to.'>';
$headers[] = 'From: Alex Catalano <advising.ufl.edu@ufl.edu>';
// $headers[] = 'Bcc: acatalano2@ufl.edu';
// $headers[] = 'Bcc: ';
// send it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
