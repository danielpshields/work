<?php

  function has_presence($value) {
    return isset($value) && $value !== "";
  }

  $max = 6;
  function has_max_length($value, $max) {
    return strlen($value) <= $max;

  $value = "1";
  $set = array("1", "2", "3", "4");
  if (!in_array($value, $set)) {
    echo "validation failed !inclusion in set";
  }

?>
