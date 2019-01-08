<!-- // bcc'd | students need to be hidden from one another -->
<?php
$subject = 'PaCE Testing Emails (Exploratory)';
$name = $_POST['name'];
$to = "alex.catalano2@gmail.com";
// Email's Subject
include("test/variables.php");


$message  = file_get_contents("test/header.php");
$message .= file_get_contents("test/style.css");
$message .= file_get_contents('test/body.php');
//apples sends from include
$message .= $alex;
$message .= $name;


// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Alex <'.$to.'>';
$headers[] = 'From: Alex Catalano <loneson6@box929.bluehost.com>';
// $headers[] = 'Cc: alex.catalano2@gmail.com';
// $headers[] = 'Bcc: alex.catalano2@gmail.com';

$test = 'donald';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
