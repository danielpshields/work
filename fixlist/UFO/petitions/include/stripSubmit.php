<?php

  $post  = $_POST['stripText'];

  function getName($post, $start, $end){
    $post = " " . $post;
    $initial   = strpos($post,"Name:");
    if ($initial == 0) return '';
    $initial   = $initial + strlen("Name:");
    $inbetween = strpos($post,"Major:",$initial) - $initial;
    return substr($post,$initial,$inbetween);
  }

//   function get_string_between($string, $start, $end){
//     $string = ' ' . $string;
//     $ini = strpos($string, $start);
//     if ($ini == 0) return '';
//     $ini += strlen($start);
//     $len = strpos($string, $end, $ini) - $ini;
//     return substr($string, $ini, $len);
// }
//
// $fullstring = 'this is my [tag]dog[/tag]';
// $parsed = get_string_between($fullstring, '[tag]', '[/tag]');
//echo $parsed; // (result = dog)

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
