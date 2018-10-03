<?php include("../include/header.php"); ?>
<h2>Validations</h2>
<?php
// presence: is the value empty?

  $value = "1";
  if (!isset($value) || empty($value)) {
    echo "validation failed";
  }

  //more complex and accurate accounting for zero
  //allows zero to exist

  $value = trim("0");
  if (!isset($value) || (empty($value) && !is_numeric($value))) {
    echo "Please enter a value <br>";
  }

  $value = trim("0");
  if (!isset($value) || $value === "") {
    echo "Failed - Please enter a value <br>";
  }



// String Length

  $value = "alex";
  $min = 3;

  if (strlen($value) < $min) {
    echo "validation failed min";
  }

  $max = 6;

  if (strlen($value) > $max) {
    echo "validation failed";
  }

// type
// numbers will always be a string when submitted through a form

  $value = "2";

  if (!is_string($value)) {
    echo "validation failed type";
  }


// inclusion in set

  $value = "1";
  $set = array("1", "2", "3", "4");
  if (!in_array($value, $set)) {
    echo "validation failed !inclusion in set";
  }

// uniqueness: uses a database


// format: if (preg_match($regex, $subject))

    // if (preg_match("/Alex/", "Alex is fun.")) {
    //   echo "match";
    // } else {
    //   echo "no match found";
    // }


    $value = "alex@alexcatalano.com";
    if (!preg_match("/@/", $value)) {
      echo "validation failed";
    }

    if (strpos($value, "@") === false) {
      echo "Validation Failed<br>";
    }

  //    echo strpos($value, "@");
  //    echo "<br>" . strstr($value, "@");
?>

<?php include("../include/nav.php"); include("../include/footer.php"); ?>
