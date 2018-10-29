<?php

function redirectTo($newLocation) {
  header("Location: " . $newLocation);
  exit;
}

function hasPresence($value) {
  return isset($value) && $value !== "";
}

function hasMaxLength($value, $max) {
  return strlen($value) <= $max;
}

function hasInclusionIn($value, $set) {
  return in_array($value, $set);
}

function validate_max_lengths($fieldsWithMaxLengths) {
  global $errors;
  foreach($fieldsWithMaxLengths as $field => $max) {
    $value = trim($_POST[$field]);
    if(!hasMaxLength($value, $max)) {
      $errors[$field] = $field . " is too long";
    }
  }
}

function displayErrors($errors = array()) {
  $output = "";
  if(!empty($errors)) {
    $output .= "<ul>";
    foreach($errors as $key => $value) {
      $output .= "<li>{$value}</li>";
    }
    $output .= "</ul>";
  }
  return $output;
}


?>
