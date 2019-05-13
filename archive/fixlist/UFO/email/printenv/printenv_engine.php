<?php


$to        = "acatalano2@ufl.edu";
$subject   = 'Print Env';

$message   = messageContent("printenv_message.php", $_SERVER);

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
$headers[] = 'To: <'.$to.'>';
$headers[] = 'From: Alex Catalano <acatalano2@ufl.edu>';

// $headers[] = 'Bcc: ';
// send it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
