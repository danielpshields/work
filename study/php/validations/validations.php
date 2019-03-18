<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // presence
    $value = "x";
    if (!isset($value) || empty($value)) {
      echo "validation failed";
    }

    // string length
    $value = "apples";
    $min   = 3;
    $max   = 33;
    if (strlen($value) < $min) {
      echo "validation failed min length";
    }

    if (strlen($value) > $max) {
      echo "validation failed max length";
    }

    // type
    $value = "1";
    if (!is_string($value)) {
      echo "validation failed not a string";
    }
    // inclusion in set
    $value = "1";
    $set = array("1", "2", "3", "4");
    if (!in_array($value, $set)) {
      echo "validation failed not in array";
    }
    // uniqueness
    // format via regular expression
    $value = "acatalano2@ufl.edu";
    if (!preg_match("/@/", $value)) {
      echo "no match";
    }

    if (strpos($value, "@") === false) {
      echo "validation failed";
    }

    ?>
  </body>
</html>
