
<?php echo 84 + 91; ?>

<pre>

  implode — Join array elements with a string

  https://php.net/manual/en/function.implode.php

</pre>
<?php

  $fruits = array(
    "candy" => "grape",
    "juice" => "apple",
    "pie"   => "blueberry"
  );


  $array = array('lastname', 'email', 'phone');
  $comma_separated = implode(":) ", $array);
  $associative = implode(", ", $fruits);

  echo $associative; // lastname,email,phone

  // Empty string when using an empty array:
  var_dump(implode('hello', array())); // string(0) ""

?>
