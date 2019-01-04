<?php
// bcc | students

// $to = 'alex.catalano2@gmail.com';
$to = $_POST['email'];
// $name = "alex";
$name = $_POST['name'];

// Email's Subject
$subject = 'PaCE Testing Emails (Exploratory)';

$css = file_get_contents("test/apple.css");
// $css = include("test.css");

// $css = "p {color: red;}";


 $message = file_get_contents("test/exploratory.php");

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Alex <'.$to.'>';
$headers[] = 'From: Alex Catalano <loneson6@box929.bluehost.com>';
$headers[] = 'Cc: alex.catalano2@gmail.com';
$headers[] = 'Bcc: alex.catalano2@gmail.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

?>
