<?php

$subject   = 'PaCE Testing Emails (Exploratory)';
$to        = "acatalano2@ufl.edu";

$message = messageContent("test/content.php");
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Alex <'.$to.'>';
$headers[] = 'From: Alex Catalano <advising.ufl.edu@ufl.edu>';
// $headers[] = 'Cc: ';
// $headers[] = 'Bcc: ';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
