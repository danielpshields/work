<?php
  $ids   = array("1889", "1722", "1476", "1475", "1357", "76");

  $group = array(
    "id"      => "76",
    "item"    => "greece",
    "sort"    => "root",
    "child"   => "",
    "visible" => "1",
    "trip"    => ""
  );

  foreach($group as $k => $v) {
    foreach ($ids as $id) {
      if ($id == $v) {
        foreach ($group as $k => $v) {
          if ($k == "item") {
            echo $v;
          }
        }
      }
    }
  }

?>
