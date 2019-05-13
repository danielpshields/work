<?php

  function redirectTo($newLocation) {
    header("Location: " . $newLocation);
    exit;
  }

  function truncation($email) {
   $length   = strlen($email) . "<br>";
   $position = strpos($email, "@") . "<br>";
   $truncate = $length - $position . "<br>";
   echo substr($email, 0, -$truncate);
 }

 function cleanEmail($email) {
  $length   = strlen($email) . "<br>";
  $position = strpos($email, "@") . "<br>";
  $truncate = $length - $position . "<br>";
  return substr($email, 0, -$truncate);
}

function noCanStay() {
  global $canStay;

  if (!$canStay) {
    header("Location: https://www.advising.ufl.edu/uf-online/");
    exit;
  }
}


?>
