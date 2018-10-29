<?php

 function redirectTo($newLocation) {
   header("Location: " . $newLocation);
   exit;
 }

 function hasPresence($value) {
  return isset($value) && $value !== "";
 }

 $min = 3; $max = 10;

 function hasLength($value) {
  return strlen($value) > $min;
 }

function displayErrors($errors = array()) {
  $output = "";
  if (!empty($errors)) {
    $output .= "<ul>";
    foreach ($errors as $key => $error) {
      $output .= "<li>{$error}</li>";
    }
    $output .= "</ul>";
  }
  return $output;
}
?>
