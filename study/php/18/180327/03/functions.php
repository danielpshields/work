<?php

  function redirectTo($newLocation) {
    header("Location: " . $newLocation);
    exit;
  }

  function thereIs($value) {
    return isset($value) && $value !== "";
  }

  function rightPassword($value) {
    return $value === "password";
  }

  function displayErrors($errors = array()) {
    $output = "";
    if (!empty($errors)) {
      $output .= "<ul>";
      foreach ($errors as $key => $value) {
        $output .= "<li>{$value}</li>";
      }
      $output .= "</li>";
    }
    return $output;
  }

?>
