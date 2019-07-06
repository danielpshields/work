<?php
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(
    array(
      "id" => 1250,
      "item" => "one, it's not mobile, two PROCESSOR is exposed"
    ),
    array(
      "id" => 1500,
      "item" => "test 2 no mobile"
    ),
    array(
      "id" => 500,
      "item" => "test three"
    )
  );

foreach ($a as $firstKey => $firstValue) {
  foreach ($firstValue as $key => $value) {
    if ($key == "id") {
    $list[] = $value;
    }
  }
}

echo "<pre>";
print_r($a);
echo "</pre>";

usort($list, "cmp");


echo "<pre>";
print_r($list);
echo "</pre>";

?>
