<?php


  $master_multidimensional = array(

      array(
        "id"      => "1357",
        "item"    => "want make FPV cart",
        "sort"    => "",
        "child"   => "",
        "visible" => "0",
        "trip"    => ""
      ),

      array(
        "id"      => "1475",
        "item"    => "hackerspace: is there a way to build a radio?",
        "sort"    => "",
        "child"   => "",
        "visible" => "0",
        "trip"    => ""
      ),

      array(
        "id"      => "1476",
        "item"    => "tampa: build a wheelbarrow for scuba tank",
        "sort"    => "",
        "child"   => "",
        "visible" => "0",
        "trip"    => ""
      ),

      array(
        "id"   => "1722",
        "item" => "fpv cart, light meter, lonesome pi"
      ),

      array(
        "id"   => "1983",
        "item" => "punch: 2:17 p.m. 7/10/19"
      ),

      array(
        "id"   => "2006",
        "item" => "movie: the lego movie"
      ),

      array(
        "id"   => "1889",
        "item" => "packages: fpv, dive weekend,"
      ),
      array(
        "id"   => "1903",
        "item" => "tampa: build desk attachment"
      ),

      array(
        "id"   => "1904",
        "item" => "contact bluehost about forbidden words"
      ),

      array(
        "id"   => "1963",
        "item" => "hackerspace: how do 2ghz vs 5ghz work?"
      )

    );


  $list_hold = array();
  foreach($master_multidimensional as $number => $lists) {
    foreach ($lists as $key => $value) {
      if ($key == "id") {
        $keys[] = $value;
      }
      foreach ($keys as $id) {
        if ($id == $value) {
          foreach ($lists as $key => $value) {
            if ($key == "item") {
              $list_hold[] = $value;
            }
          }
        }
      }
    }
  }

  $master = array_combine($keys, $list_hold);

  krsort($master);

  echo "<pre>";
    print_r($master);
  echo "</pre>";

  foreach ($master as $key => $value) {
    echo $value . "<br>";
  }


?>
