<?php

//empty
function hasPresence($value) {
 return isset($value) && $value !== "";
}

// stringLength
function hasMaxLength($value, $max) {
  return strlen($value) <= $max;
}

// inclusionInSet
function hasInclusion($value, $set) {
    return in_array($value, $set);
}

function errorsFound($errors = array()) {
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
