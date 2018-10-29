<?php

  function redirectTo($newLocation) {
    header("Location: " . $newLocation);
    exit;
  }

  function hasPresence($value) {
    return isset($value) && $value !== "";
  }

  function MaxLength($value, $max) {
    return strlen($value) <= $max;
  }

  function validateMaxLength($fieldsMaxLength) {
    // global $errors;
    foreach ($fieldsMaxLength as $field => $max) {
      $value = $_POST[$field];
      if(!MaxLength($value, $max)) {
        $errors[$field] = $field . " is too long";
      }
    }
  }

  function displayErrors($errors = array()) {
    $output = "";
    if (!empty($errors)) {
      $output .= "<ul>";
      foreach($errors as $value) {
        $output .= "<li>{$value}</li>";
      }
      $output .= "</ul>";
    }
    return $output;
  }

?>
