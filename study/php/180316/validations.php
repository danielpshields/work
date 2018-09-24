<?php $title = "validations"; include("../include/header.php"); ?>

<?php
// presence: is it set?

  if (!isset($value)) {
    echo "1.1 validation failed<br><br>";
  }

  $value = "";
  if (!isset($value)) {
    echo "1.2 <br><br>";
  }

  $errors = array();

  $value = "";
  if (!isset($value) || empty($value)) {
    echo "1.3 validation failed <br><br>";
    $errors['username'] = "username cannot be blank";
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

    if (!empty($errors)) {
    //$nameless = $errors['value'];
    //echo $nameless;
     echo "<h3><u>Errors Found</u></h3>";
     echo "<ul>";
     foreach ($errors as $key => $error) {
       echo "<li>{$error}</li>";
     }
     echo "</ul>";
  }



?>

<?php include("../include/footer.php"); ?>
