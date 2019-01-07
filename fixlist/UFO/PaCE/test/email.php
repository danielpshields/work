<?php
// bcc | students

// $to = $_POST['email'];
// $to = "alex.catalano2@gmail.com";
$to = "acatalano2@ufl.edu";

// $name = "alex";
$name = $_POST['name'];

// Email's Subject
$subject = 'PaCE Testing Emails (Exploratory)';

$css     = file_get_contents("test/style.css");

$message = '
<html>
<head>
  <title>Why is there a title?</title>
  <style> ' . $css . ' </style>
</head>
<body>

';

// $message = file_get_contents("test/exploratory.php");
$message .= '<p class="red">howdy partner</p>';




// $message = "alex came back";

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
