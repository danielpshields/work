<?php $title = "validation errors"; include("../include/header.php"); ?>

<?php
  $errors = array();

  $value = trim("");

  if (!isset($value) || $value === "") {
    $errors['value'] = "field cannot be blank";
  }

  function errorsFound($errors = array()) {
    $output = "";
    if (!empty($errors)) {
      $output .= "<h3>there were some errors</h3>";
      $output .= "<ul>";
      foreach ($errors as $key => $error) {
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul>";
    }
    return $output;
  }

  echo errorsFound($errors);

  if (array_key_exists($errors, "username")) {
    echo "<span>something</span>";
  }

// stringLength

  $value = "alex";
  $min = 3;
  if (strlen($value) < $min) {
    echo "2.1 validation failed <br><br>";
  }

  $max = 6;
  if (strlen($value) > $max) {
    echo "2.2 validation failed <br><br>";
  }

// type: need to do converstion if $value needs to be a certain type

  $value = "1";
  if (!is_string($value)) {
    echo "3.1 validation failed <br><br>";
  }

// inclusionInSet

    $value = "alex@gmail.com";
    $set = array("1", "2", "3", "4", "alex@gmail.com", "@");
    if (!in_array($value, $set)) {
      echo "4.1 validation failed <br><br>";
    }


// uniqueness: requires database

// format: preg_match

    if (!preg_match("/@/", $value)) {
      echo "5.1 validation failed";
    }

    if (strpos($value, "@") === false) {
      echo "5.2 validation failed <br><br>";
    }


    //empty / dealing with white space | Trim() removes the white space

    $value = trim("0");
    if (!isset($value) || empty($value) && !is_numeric($value)) {
      echo "6.1 validation failed <br><br>";
    }

    // empty value is exactly empty -- trim() removes white space

    $value = trim("0");
    if (!isset($value) || $value === "") {
      echo "6.2 validation failed <br><br>";
    }


?>

<?php include("../include/footer.php"); ?>
