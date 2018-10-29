<?php


  function redirectTo($newLocation) {
    header("Location: " . $newLocation);
    exit;
  }

//Presence
  function hasPresence($value) {
    return isset($value) && $value !== "";
  }

//String length
  function tooLong($value, $max) {
    return strlen($value) <= $max;
  }

  function tooShort($value, $min) {
    return strlen($value) >= $min;
  }

//Inclusion
  function inArray($value, $set) {
    return in_array($value, $set);
  }

//format
  function atSymbolHere($value) {
    preg_match("/@/", $value);
  }

//display the errors through for each
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
