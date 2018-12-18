Cookie Scope:
  Set at the directory root ~/ and below

<?php
  $name = "c_user";
  $value = $advisor;
  $expire = time() + (60*60*24*7);
  setcookie($name, $value, $expire);

  // unsetting a cookie
  // setcookie($name, null, time() - 4600);


?>
