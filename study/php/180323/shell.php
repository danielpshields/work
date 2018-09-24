<?php $title = "shell"; $stylesheet = $title; include("../include/header.php"); ?>
<?php
  $value = "";
  $errors = "";
  $min = 2;


  if (!isset($value) || $value === "") {
    $errors['presence'] = "please enter a username";
  }

  if ($value <= $min) {
    $errors['min'] = "minChar: username must be at least two characters";
  }


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

 echo displayErrors($errors);
?>
<?php include("../include/footer.php"); ?>
