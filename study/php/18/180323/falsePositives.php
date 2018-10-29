<?php $title = "false positives"; $stylesheet = $title; include("../include/header.php"); ?>
<?php
  function isEqual($value1, $value2) {
    $output = "{$value1} === {$value2}";
    if ($value1 === $value2) {
      $output .= " | true <br>";
    } else {
      $output .= " | false <br>";
    }
    return $output;
  }

  echo isEqual(0, false);
  echo isEqual(4, true);
  echo isEqual(0, null);
  echo isEqual(0, "0");
  echo isEqual(0, "");
  echo isEqual(0, "a");
  echo isEqual("1", "01");
  echo isEqual("", null);
  echo isEqual(3, "3 doggos");
  echo isEqual(100, "1e2");
  echo isEqual(100, 100.00);
  echo isEqual("abc", true);
  echo isEqual("123", "   123");
  echo isEqual("123", "+0123");


?>
<?php include("../include/footer.php"); ?>
