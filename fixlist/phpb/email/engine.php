<?php

// $to        = $email;
$to        = "alex.catalano2@gmail.com";
$subject   = 'PaCE Testing Emails (Exploratory)';
$message   = messageContent("content.php");

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
$headers[] = 'To: Alex <'.$to.'>';
$headers[] = 'From: Alex Catalano <loneson6@box929.bluehost.com>';
// $headers[] = 'Cc: acatalano2@ufl.edu';
// $headers[] = 'Bcc: alex.catalano2@gmail.com';
// send it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
