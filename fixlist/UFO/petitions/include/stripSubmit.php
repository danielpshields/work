<?php

  $post  = $_POST['stripText'];

  function getName($post, $start, $end){
    $post = " " . $post;
    $initial   = strpos($post,"Name:");
    $initial   = $initial + strlen("Name:");
    $inbetween = strpos($post,"Major:",$initial) - $initial;
    return substr($post,$initial,$inbetween);
  }

  $student_name = trim(getName($post, "Name:", "Major:"));

  $split = explode(" ", $post);

  foreach ($split as $key => $value) {

    // get phone number
    if (substr_count($value, "-") > 1) {
      $phone = $value;
      $student_phone = substr($phone, 0,12);
    }

    //  get email
    if (preg_match('/@.*./', $value) == true) {
      $student_email = $value;
    }

  }

  $student_ID = $_POST['strip_student_id'];

?>
