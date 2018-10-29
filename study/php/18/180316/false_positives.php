<?php $title = "false positives"; include("../include/header.php"); ?>

<?php
  function isEqual($a, $b) {

    if ($a == $b) {
      echo "true <br>";
    } else {
      echo "false<br>";
    }

  }

function boos($v, $v2) {
  $output = "{$v} == {$v2}: ";
  if ($v == $v2) {
    $output .= "true<br>";
  } else {
    $output .= "false<br>";
  }
  return $output;
}



echo boos(0, false);
echo boos(4, true);
echo boos(0, null);
echo boos(0, "0");
echo boos(0, "");
echo boos(0, "a");
echo boos("1", "01");
echo boos("", null);
echo boos(3, "3 dogs");
echo boos(100, "1e2");
echo boos(100, 100.00);
echo boos("abc", true);
echo boos("123", "  123");
echo boos("123", "+0123");

  echo "<br><br>";

function boo($v, $v2) {
  $output = "{$v} === {$v2}: ";
  if ($v === $v2) {
    $output .= "true<br>";
  } else {
    $output .= "false<br>";
  }
  return $output;
}



echo boo(0, false);
echo boo(4, true);
echo boo(0, null);
echo boo(0, "0");
echo boo(0, "");
echo boo(0, "a");
echo boo("1", "01");
echo boo("", null);
echo boo(3, "3 dogs");
echo boo(100, "1e2");
echo boo(100, 100.00);
echo boo("abc", true);
echo boo("123", "  123");
echo boo("123", "+0123");

echo "<br><br>";

?>

<?php include("../include/footer.php"); ?>
