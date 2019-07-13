<?php

function compare($a, $b) {
  if ($a == $b) {
      return 0;
  }
  return ($a < $b) ? -1 : 1;
}

$list = array("one" => 3, "two" => 2, "three" => 5, "four" => 6, "five" => 1);

usort($list[2], "compare");

foreach ($list as $key => $value) {
    echo "$key: $value<br>";
}

?>
