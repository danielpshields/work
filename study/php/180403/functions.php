<?php
function redirectTo($newLocation) {
  header("Location: " . $newLocation);
  exit;
}

function hasPresence($value) {
  return isset($value) && $value !== "";
}

function displayErrors($errors = array()) {
  $output = "";
  if (!empty($errors)) {
    $output .= "<ul>";
    foreach ($errors as $key => $value) {
      $output .= "<li>{$value}</li>";
    }
    $output .= "</ul>";
  }
  return $output;
}

?>
