<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Reference</title>
    <link rel="stylesheet" href="../css/stylesheet.css" />
  </head>
  <body>
    <h1>PHP Reference</h1>

    <h2>Forms</h2>

    <form action="process.php" method="post">
      username: <input type="text" name="username" value="" /><br>
      password: <input type="password" name="password" value="" /><br>
      <br>
      <input type="submit" name="submit" value="submit">
    </form>


    <pre>
      <?php print_r($_POST); ?>
    </pre>
    <br>
    <?php
    //set default values
      if (isset($_POST["username"])) {
        $username = $_POST["username"];
      } else {
        $username = "not set";
      }
      if (isset($_POST["password"])) {
        $password = $_POST["password"];
      } else {
        $password = "not set";
      }
    ?>

    <p>the user: "<?php echo $username; ?>" was found.</p>
    <?php

    echo "{$username}: {$password}"

     ?>




    <h2>Headers</h2>
    <?php
      function redirect_to($newLocation) {
        header("Location: " . $newLocation);
        exit;
      }

      $member = $_GET['member'];
      if ($member == "1") {
        redirect_to("sites/first.php");
      } else {
        redirect_to("http://www.alexcatalano.com");
      }

    ?>
    <h2>Redirect</h2>

    <pre>
      <?php print_r(headers_list()); ?>
    </pre>


    <?php
      header("HTTP 1.1/ 404 Not Found");
      header("X-Powered-By: Kittens");
    ?>


    <?php
    $link = "link";
    $page = "first.php";

    $url = "http://localhost/";
    $url .= "home/sites/";
    $url .= $page;

    ?>

        <h2>URL Encoding</h2>

        <a href="<?php echo $url; ?>"><?php echo $link; ?></a>



    <h2>HTML URL Encoding</h2>

    <?php
        $url_page = "first.php";

        $param1 = "arrow hammock";
        $param2 = "lonrdom note & lonesome pi";

        $url = "http://localhost/";
        $url .= "home/sites/";

        $url .= rawurlencode($url_page);

        $url .= "?" . "id=" . urlencode($param1);
        $url .= "&" . "name=" . urlencode($param2);
    ?>

      <a href="<?php echo $url; ?>">aLink</a>
      <a href="<?php echo htmlspecialchars($url); ?>">
        <?php echo htmlspecialchars($linktext); ?>
      </a>





    <h2>Encoding</h2>

    <?php
      $link = "< Click > & learn more";
    ?>


    <a href="#">

      <?php echo htmlentities($link);  ?>

    </a>







    <?php $linktext = "<Click> & learn more"; ?>

    <a href=""><?php echo htmlspecialchars($linktext); ?></a>




    <h2>URLencode</h2>
    <?php

    $page = "bill shakespeare";
    $quote = "to be or not to be";
    $link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);
    $link2 = "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);

    echo $link1 . "<br>";
    echo $link2 . "<br>";

    ?>
    <h2>First Page</h2>
    <?php
      $linkText = "second page";
      $id = 5;
    ?>

    <a href="second.php?id=<?php echo $id; ?>"><?php echo $linkText; ?></a>

    <h2>Second Page</h2>
    <?php $linkText = "first page"; ?>
    <a href="first.php"><?php echo $linkText; ?></a>

    <pre><?php //print_r($_GET); ?></pre>

    <?php
      $id = $_GET["id"];
      echo  $id;
    ?>



    <h2>GET</h2>
    <h3>Super Global Variable</h3>
    <h2>$_GET</h2>
    <p> print_r($_GET);</p>


    <h3>three ways to get information</h3>
    <ul>
      <li>urls/links | GET</li>
      <li>forms | POST</li>
      <li>cookies | COOKIE</li>
    </ul>


    <?php
    $number = 99;
    $string = "bug?";
    $array = array(1 => "homepage", 2 => "about", 3 => "services");

    var_dump($number);
    var_dump($string);
    var_dump($array);
     ?>


    <?php
      function greeting($hello) {
        echo "say {$hello}";
        var_dump(debug_backtrace());
      }

      greeting("howdy");
    ?>



    <h2>PHP</h2>
    <?php

    $hold = "water";
    $water = "420";

    var_dump($hold);
    var_dump($water);

    get_defined_vars();
    debug_backtrace();
     ?>





    <?php
      function paint($room = "office", $color = "blue") {
        return "$room: {$color}";
      }

      echo paint();
      echo "<br>";
      echo paint("bedroom", "green");
      echo "<br>";
      echo paint("bathroom", "yellow");
      echo "<br>";
      echo paint("living room", null);
      echo "<br>";
      echo paint("living room");

  // "not sending something" and "sending nothing" are not the same thing

    ?>

    <h2>Global</h2>
    <?php
    $bar = "outside";
    function foo() {
      global $bar;
      $bar = "<br>inside";
    }
    echo $bar;
    foo();
    echo $bar;
    ?>


    <h2>List</h2>

    <?php
      $coffee = array("beans", "water");
      list($grind, $heat) = $coffee;

      echo "the $grind are mixed with $heat to make coffee";
     ?>


    <?php
      $bar = "outside";

      function food() {
          global $bar;
          if(isset($bar)) {
            echo "food: " . $bar . "<br>";
          }
          $bar = "inside";
        }

        echo $bar . "<br>";
        food();
        echo $bar . "<br>";
        ?>

    <br><br>

        <?php

          $red = "red";

          function boom() {
            global $red;
            $red = "blue";
            echo $red;
          }

          boom();

         ?>




    <?php
    $happy = array("fun", "safe");
    list($play, $home) = $happy;
    echo "$play at $home";
    ?>

      <?php
        $list = array("one", "two");
        list($first, $second) = $list;
        echo "$first and $second";
      ?>

    <h2>Pi Returns Function</h2>

      <?php
      function lonesomePi($home, $work) {
        $lonesomeNote = $home * $work;
        $sixSweets = $home - $work;
        return array($lonesomeNote, $sixSweets);
      }

      list($ln, $ss) = lonesomePi(3,2);

      ?>

      <p><b>lonesome note</b> captures everything from the smallest to the most complex details to feed:</p>
      <p><b>lonesome pi</b> -- live the life.</p>
      <p>If you've been active with lonesomepi for <?php echo $ln; ?> days, then your repository in lonesome note should have <?php echo $ss; ?> or fewer entries per week.</p>




    <h2>Return Multiple Values</h2>
    <?php
    function flower($pollen, $air) {
      $seeds = $pollen * $air;
      $growth = $pollen + $air;
      return array($seeds, $growth);
    }

    $garden = flower(2,3);
    ?>

    <p>...at that rate, you'd be able to grow <?php echo $garden[0]; ?> seeds</p>
    <p>...at that rate, you'd be able to grow <?php echo $garden[1]; ?> flowers</p>

    <?php list($seedTotal, $flowerTotal) = flower(4,5); ?>

    <p>Out of the <?php echo $seedTotal; ?> seeds that were made, maybe only <?php echo $flowerTotal ?> plants will make it to flowering.</p>




    <?php

      function playTimes($a, $b) {
        $firstPlay = $a + $b;
        $secondPlay = $a - $b;
        return array($firstPlay, $secondPlay);
      }
      $hope = playTimes(3,1);
     ?>



     <p> I can echo firstPlay as <?php echo $hope[1]; ?></p>



    <h2>Return Multiple Values</h2>


    <?php

      function fun($a, $b) {
        $da  =  $a + $b;
        $bus =  $a - $b;
        $dizzy = $a * $b;
        return array($da, $bus, $dizzy);
      }

      list($lz, $rerun, $spell) = fun(1020, 702);

      echo $lz . "<br>";
      echo $rerun;

    ?>

    <p>To hold <i>the count</i> of x, the value of y must be determined in the high point of the function's definition.</p>
    <p>Add <?php echo $spell; ?> to the remainer.</p>


    <h3>List</h3>
    <?php

      function fuen($a, $b) {
        $da  =  $a + $b;
        $bus =  $a - $b;
        $dizzy = $a * $b;
        return array($da, $bus, $dizzy);
      }

      list($lz, $rerun, $spell) = fuen(1020, 702);

      echo $lz . "<br>";
      echo $rerun;

    ?>


    <p>To hold <i>the count</i> of x, the value of y must be determined in the high point of the function's definition.</p>
    <p>Add <?php echo $spell; ?> to the remainer.</p>


    <h2>Return Multiple Values</h2>

    <?php

      function addSubtract($valueOne, $valueTwo) {
        $add        =    $valueOne + $valueTwo;
        $subtract   =    $valueOne - $valueTwo;
        return array($add, $subtract);
      }

      list($added, $subtracted) = addSubtract(20, 7);
      echo $added . "<br>";
      echo $subtracted;

    ?>


    <h2>Return Multiple Values</h2>

    <?php

      function adedSubtract($valueOne, $valueTwo) {
        $add        =    $valueOne + $valueTwo;
        $subtract   =    $valueOne - $valueTwo;
        return array($add, $subtract);
      }

      $result = adedSubtract(10, 5);
      echo $result[0] . "<br>";
      echo $result[1];

    ?>





    <?php

    $i = 2;

    switch ($i) {
      case 0:
      echo "it's zero";
      break;

      case 1:
      echo "it's one";
      break;

      case 2:
      echo "it's two";
      break;

      case 3:
      echo "it's three";
      break;

      case 4:
      echo "it's four";
      break;

      default:
      echo "say whatsup";
      break;

    }

    ?>


    <?php

      function add($sold) {
        switch (($sold - 4) % 12) {
          case  0: return 'rat';
          case  1: return 'ox';
          case  2: return 'tiger';
          case  3: return 'rabbit';
          case  4: return 'dragon';
          case  5: return 'snake';
          case  6: return 'horse';
          case  7: return 'goat';
          case  8: return 'monkey';
          case  9: return 'rooster';
          case 10: return 'dog';
          case 11: return 'pig';
        }
      }

      $symbol = add(2018);
      echo "2013 is the year of the {$symbol}";

      echo "<br>";

      $symbol = add(6233);
      echo "6233 will be the year of the {$symbol}";

      echo "<br>";

      echo "1988 was the year of the" . " " . add(1988);


    ?>

      <?php

      function adwd($valueOne, $valueTwo) {
        $sum = $valueOne + $valueTwo;
        return $sum;
      }


      $fruit = adwd(2,3);
      $fruit = adwd($fruit,3);
      ?>

      <p>The basket has <?php echo $fruit; ?> pieces of fruit</p>


    <h2> return values </h2>

    <?php



      function aadd($oneValue, $twoValue) {
        $sum = $oneValue + $twoValue;
        return $sum;
      }

      $result = aadd(2,3);
      echo $result;




?>

    <h2>Functions</h2>
    <?php
    function introduceYourself($target, $prompt) {
      echo "Hello, {$target}! <br>";
      echo "Do you have any questions about <b>{$prompt}</b>?";
    }

    introduceYourself("alex", "corrections");
    ?>

    <?php
    function greaeting($greeting, $target, $punctuation) {
      echo $greeting . " " . $target . $punctuation . "<br>";
    }

    $welcome = "welcome to the hotel, ";
    $user = "alex";
    $mood = null;

    greaeting($welcome, $user, $mood);


        function adbd($val1, $val2) {
          $sum = $val1 + $val2;
          return $sum;
        }

        $apples = 2;
        $oranges = 3;

        $fruit = adbd($apples, $oranges);

        echo $fruit;




    ?>



    <h2>Functions</h2>
    <?php
    function grseeting($name) {
      echo "Hello, {$name}";
    }

    $user = "alex";
    grseeting($user);

    ?>

    <h2>Functions</h2>

    function name($arg1, $arg2) {
      statement;
    }


    <h2>Head Pointer</h2>
    <h2>Head Pointer</h2>

  <?php

    $ages = array("one", "two", "three", "four", "five", "six", "seven", "eight", 9);
    end($ages);
    next($ages);
    reset($ages);
    while($age = current($ages)) {
      echo $age . ", ";
      next($ages);
    }

   ?>

  <?php

    $ages = array("one", "two", "three", "four", "five", "six", "seven");
    echo "no. 1: " . current($ages) . "<br>";
    next($ages);
    echo "no. 2: " . current($ages) . "<br>";
    next($ages);
    echo "no. 3: " . current($ages) . "<br>";
    prev($ages);
    echo "no. 4: " . current($ages) . "<br>";
    reset($ages);
    echo "no. 5: " . current($ages) . "<br>";
    end($ages);
    echo "no. 6: " . current($ages) . "<br>";
    next($ages);
    echo "no. 7: " . current($ages) . "<br>";

   ?>


    <h2>Break</h2>
    <?php

    for ($i = 0; $i <= 5; $i++) {
      if ($i % 2 == 0) { continue; }// continue the loop
      for ($k = 0; $k <= 5; $k++) {
        if ($k == 3) { break(2); } // stop the loop. "(2)" option means break both loops
        echo $i . "-" . $k . "<br>";
      }
    }

     ?>
    <h2>Break</h2>
    <?php
    $found = 105;
    for ($i = 1; $i <= 1002034500; $i++) {
      if ($i == $found) {
        echo $found;
        break;
      }
      echo $i . "<br>";
    }
    ?>



    <h2>For With Continue</h2>
    <?php
    for ($i = 0; $i <= 5; $i++) {
      if ($i % 2 == 0) {
        continue;
      }
      for ($k = 0; $k <= 5; $k++) {
        if ($k == 3) {
          continue(2);
        }
        echo $i . "-" . $k . "<br>";
      }
    }
    ?>



    <h2>Modulus</h2>


  <?php echo 25 / 7 ; ?>
  <br>
  <?php echo 25 % 7; ?>




    <h2>Looping</h2>
    <h3>Looping Test</h3>
    <h4>Foreach</h4>
    <?php
    echo "<h5>simple array</h5>";
    $string = array(1,2,3,4,5,6,7,8,9,10);
    foreach ($string as $value) {
      echo $value;
    }
    echo "<h5>associative array</h5>";
    $group = array("name" => "alex", "age" => 29, "home" => "gainesville");

    foreach ($group as $key => $value) {
      echo $key . " " . $value . "<br>";
    }
    echo "<h4>continue</h4>";
    // continue is like, dont worry about the rest of the loop
    $i = 0;
    while ($i <= 10) {
      if ($i == 5) {
        echo "<!--{\$i}-->CONTINUE<br> ";
        $i++;
        continue;
      }
      echo $i++ . ",<br>";
    }
    ?>
    <h4>For</h4>
    <?php
    for ($i = 0; $i <= 10; $i++) {
      echo $i;
    }
    ?>

    <h4>While</h4>
    <?php
    $i = 0;
    while ($i <= 10) {
      echo $i;
      $i++;
    }
    ?>

    <h2>Continue Loop w/n Loop</h2>
    <?php
    for ($i = 0; $i <=5; $i++) {
      if ($i % 2 == 0) { continue; }
      for ($k=0; $k<=5; $k++) {
        echo $i . "-" . $k . "<br>";
      }
    }
    ?>
    <h2>continue insane</h2>
    <?php
    $i = 4;
    while ($i <= 10) {
      if ($i == 5) {
        echo "[ " . $i . " ] <br><br>";
        $i++; //(2) this makes the secondary change make much more sense
        continue; //(1) skip everything else and restart the loop
      }
      /* (with continue and) without an incrementer here, the value will stay stuck at 5
         this is solved with ++ */
      echo "a " . $i++ . "<br>";
      echo "b " . $i . "<br><br>";
    }

    ?>






    <h2>continue insane</h2>
    <?php
    $i = 4;
    while ($i <= 10) {
      if ($i == 5) {
        echo "[ " . $i . " ] <br><br>";
        $i++;
        continue;
      }
      /* (with continue and) without an incrementer here, the value will stay stuck at 5
         this is solved with ++ */
      echo "a " . $i++ . "<br>";
      echo "b " . $i . "<br><br>";
    }
    ?>


    <h2>Continue</h2>

    <?php
    for ($i = 0; $i <= 10; $i++) {
      if ($i % 2 == 0) {continue;}
      echo $i . ", ";
    }
    ?>
<h1>ajo i</h1>
    <?php
    $i = 0;
    while ($i <= 10) {
      if ($i == 5) {
        $i++;
        continue;
      }
      /* without an incrementer here, the value will stay stuck at 5
         this is solved with ++ */
      echo $i . ", ";
      $i++;
    }
    ?>
    <!-- continue is almost like saying "skip" - keep going - next in line, please -->
    <?php
    for ($i = 0; $i <=10; $i++) {
      if ($i % 2 == 0) {
        continue;
      }
      echo $i . ", ";
    } ?>


    <h2>Continue</h2>
    <!-- continue is almost like saying "skip" - keep going - next in line, please -->
    <!-- also, I dont think parens are necessary because of PEMDAS -->
    <?php
    for ($i = 0; $i <=10; $i++) {
      if ($i % 2 == 0) {
        continue;
      }
      echo $i . ", ";
    } ?>












    <h2>Loops</h2>
    <p>If you have an <b>array</b> then a <b>foreach loop</b> is the correct choice.</p>
    <?php
      if ($array) {
        $useForeachLoop;
      }
    ?>

    <h3>foreach values</h3>
        <?php

        $variable = array("Brand New Computer" => 2000,
                          "1 month of Lynda.com" => 25,
                          "Learning PHP" => null);

        foreach ($variable as $key => $value) {
          echo "{$key}: ";
          if (is_int($value)) {
            echo "$" . $value;
          } else {
            echo "priceless";
          }
          echo "<br />";
        }
    ?>


    <h3>Foreach Who</h3>
    <?php

        $person = array(
            "whole_name"  => "Alex Catalano",
            "address"    => "825 SW 5th Ave",
            "city"       => "Gainesville",
            "state"      => "FL",
            "zip_code"   => "32601"
        );

        foreach($person as $key => $value) {
          $niceKey = ucfirst(str_replace("_", " ", $key));
          echo "{$niceKey}: {$value} <br>";
        }

    ?>

    <?php
        $ages = array(1,2,3,4);

        foreach($ages as $age) {
          echo "<br> {$age} Bunny";
          echo "<img src=\"image/bunny{$age}.jpg\" >";
        }

$person = array(
    "first_name" => "Alex",
    "last_name" => "Catalano",
    "address" => "825 SW 5th Ave",
    "city" => "Gainesville",
    "state" => "FL",
    "zip_code" => "32601"
);

        foreach ($array as $key => $value) {

        }
    ?>
    <h4>Bunnies</h4>
    <?php
    $ages = array(1,2,3,4);

    foreach($ages as $age) {
      echo "<br> {$age} Bunny";
      echo "<img src=\"image/bunny{$age}.jpg\" >";
    }
?>

    <h3>Foreach Bunny</h3>
    <?php
        $ages = array(1,2,3,4);

        foreach($ages as $age) {
          echo "<img src=\"image/bunny{$age}.jpg\" >";
        }
    ?>
    <br>
    <h3>For Bunny</h3>
      <?php
      for ($i = 1; $i < 5; $i++) {
        echo "<img src=\"image/bunny{$i}.jpg\" >";
      } ?>

    <h3>While Bunny</h3>
      <?php
      $i = 1;
      while ($i < 5) {
        echo "<img src=\"image/bunny{$i}.jpg\"> ";
        $i++;
      }



       ?>







    <h3>foreach</h3>

    <?php

    foreach ($array as $value) {
      statement;
    }

    ?>


    <h3>For Loops</h3>
    <?php
      for ($i = 1; $i < 11; $i++) {
        if (($i % 1) == 0) {
          echo "{$i} <img src=\"image/bunny4.jpg\" />";
        } else {

        echo "{$i}<br>";
      }
      }
    ?>

<?php
    for (initial; test; each) {
      statement;
    }

  for ($i = 1; $i < 11; $i++) {
    if (($i % 1) == 0) {
      echo "{$i} <img src=\"image/bunny4.jpg\" />";
    } else {

    echo "{$i}<br>";
  }
}?>


    <?php
    $i = 0;
    while ($i <= 100) {
      if ($i % 5 == 0) {
        echo "</li><li>";
      }
      echo $i . ", ";
      $i++;
    }


      for (initial; test; each) {
        statement;
      }

    $i = 0;
    while ($i <= 10) {
      echo $i . ", ";
      $i++;
    }
    ?>

    <h2>While Loops</h2>


    <h2>While Loops</h2>
    <?php
    $i = 0;
    while ($i <= 10) {
      if ($i % 2) {
        echo "<li class=\"red\">{$i}</li>";
      } else {
      echo "<li>{$i}</li>";
    }
    $i++;
    }
    ?>


    <?php

      $i = 0;

      while ($i <= 10) {
          if ($i == 5) {
          ?>

          <h3><?php echo "{$i}"; ?></h3>
          <p><i>This section is representative of the others looping plus four.</i></p>


<img src="https://pbs.twimg.com/profile_images/447374371917922304/P4BzupWu.jpeg" width="150px" >
        <?php } else {
        echo $i . ", ";
        }
        $i++;
      }

    ?>





    <?php
    //while($booelean) {
      //statement;
    //}?>


    <h2>Switch Statement</h2>
    <p>Displaying Two Results:</p>
    <?php

    $userType = "customer";
    switch ($userType) {
      case 'student':
       echo 'welcome';
       break;
      case 'press':
      case 'customer':
       echo "hello customer";
       break;
    }
    ?>

    <?php
      $year = 2018;
      switch (($year - 4) % 12) {
        case  0: $zodiac = 'rat';     break;
        case  1: $zodiac = 'ox';      break;
        case  2: $zodiac = 'tiger';   break;
        case  3: $zodiac = 'rabbit';  break;
        case  4: $zodiac = 'dragon';  break;
        case  5: $zodiac = 'snake';   break;
        case  6: $zodiac = 'horse';   break;
        case  7: $zodiac = 'goat';    break;
        case  8: $zodiac = 'monkey';  break;
        case  9: $zodiac = 'rooster'; break;
        case 10: $zodiac = 'dog';     break;
        case 11: $zodiac = 'pig';     break;
      }
      echo "{$year} is the year of the {$zodiac}";
    ?>
    <p><i>Switch does the statement that matches, then continues to match every instance below it.</i></p>
    <p><i>Adding "break;" will stop the going-through the rest</i></p>
    <?php
    $a = 9;

    switch ($a) {
      case 0:
        echo "a equals zero";
        break;
      case 1:
        echo "a equals 1";
        break;
      case 2:
        echo "a equals 2";
        break;
      case 3:
        echo "a equals 3";
        default:
        echo "a is not 0,1,2 or 3";
        break;
    }

    ?>
    <!-- <?php
        // switch ($contact) {
        //   case 'email':
        //     Statement
        //   case 'phone':
        //     statement
        //   default:
        //   statement
        //}
    ?> -->

    <?php
    // switch (value) {
    //   case test_value1:
    //     Statement
    //   case test_value2:
    //     statement
    //   default:
    //     statement
    // }
     ?>



    <h2>Operators</h2>

    <h2>Operators</h2>
    <?php
      $a = 4;
      $b = 3;
      $c = 1;
      $d = 20;
      $e = 100;
      if (!isset($e)) { //if something's not set, then set it.
        $e = 200;
      }
      echo $e
      //$e will be 100 because it's already been set.
    ?><br>

    <?php
      $var1 = null;
      $var2 = "";
    ?>

    <?php

    $quantity = "";

      if (empty($quantity) && !is_numeric($quantity)) {
        echo "must enter a quantity.";
      }
    ?>



    <?php
    $a = 4;
    $b = 3;
    $c = 1;
    $d = 20;
    $e = 100;
    if (!isset($e)) {
      $e = 200;
    }
    echo $e; // $e will result as 100 here because
    // it's already been set. So, it'll echo 100;
    ?>

    <h2>Operators</h2>
    <?php
    $a = 4;
    $b = 3;
    $c = 1;
    $d = 20;
    if (($a > $b) && ($c > $d)) {
      echo "a is larger than b OR ";
      echo "c is larger than d";
    }
    ?>



    <h3>Logical Operators</h3>
    <ul>
      <li>and "&&"</li>
      <li>or "||"</li>
      <li>not "!"</li>
    </ul>

    <h2>Comparison Operators</h2>
    <ul>
      <li>equal "=="</li>
      <li>identical "==="</li>
      <li>compare ">", "<", ">=", "<=", "<>"</li>
      <li>not equal "!="</li>
      <li>not identical "!=="</li>
    </ul>


    <h2>Logical Expressions</h2>

    <?php
      $a = 3;
      $b = 4;

      if ($a > $b) {
        echo "a is larger than b";
      } elseif ($a < $b){
        echo "a is smaller than b";
      } else {
        echo "a and b are equal";
      }
    ?>



    <?php
    $numerator = 20;
    $denominator = 4;
    if ($denominator > 0) {
      $result = $numerator / $denominator;
    }
    echo "Result: {$result}";
    ?><!-- result is being defined within the function (and can leave the function) because the if statement said, "then, everything else that follows. These laws. These rules. Allow this. Else, skip." -->


    <?php
    $newUser = true;
    if ($newUser) {
      echo "<h1>welcome, Newbie!</h1>";
      echo "<p>We're glad you've decided to join us!</p>";
    }
    ?>


    <?php
      if(expression)
      statement;
    ?>

    <?php
    if(3 > 1)
      echo "3 is larger";
?>
<?php
$a = 4;
$b = 3;

if ($a > $b) {
  echo "a is larger than b";
}
?>

    <h3>constants:</h3>
    <ul>
      <li>ALL CAPS</li>
      <li>No $dollarSign</li>
      <li>defined by function</li>
    </ul>

    <?php
      define("MAX_WIDTH", 980);
      echo MAX_WIDTH;
    ?>


    <h2>Type_Casting</h2>
    <ul>
      <li>int, integer</li>
      <li>float</li>
      <li>array</li>
      <li>bool, boolean</li>
    </ul>

    <h3>Juggling</h3>

    <?php $count = "2 cats"; ?>
    <?php $count += 3; ?>
    <?php echo "\$count is an: " . gettype($count) . " equal to: " . $count; ?><br />

    <?php $cats = "I have " . $count . " cats."; ?>
    <?php echo $cats . " is a " . gettype($cats); ?><br>
    <?php echo $count . " is a " . gettype($count); ?><br>

    <h3 class="line">Type Casting / Set Type</h3>

    <h4>V1. settype</h4>
    <?php settype($count, "integer"); ?><br>
    <?php echo gettype($count); ?><br>
    <!-- recasts the variable in place -->

    <h4 class="line">V2. equals Declaration</h4>

    <?php $count2 = (string) $count; ?><br>
    <?php echo gettype($count); ?><br>
    <?php echo gettype($count2); ?><br>
    <!-- this is just letting count2 eaual the result
    of $count (x) funstring -->


    <h4>Testing Typesetting</h4>

    <?php $test = 3; ?>
    <?php $test2 = 3; ?>

    <?php settype($test, "string"); ?>
    <?php (string) $test2; ?>

    <?php echo gettype($test); ?><br>
    <?php echo gettype($test2); ?>


        <h2>Booleans</h2>
        <p><i>Booleans are either <b>true</b> or <b>false</b></i></p>

        <?php
        $result = true;
        $result2 = false;

        echo is_bool($result) . " result is boolean";
        echo is_bool($result) . " result is boolean";

        ?>
    <br><br>

        <h2>Null</h2>

        <?php

          $var = null;
          $var2 = "";

          echo is_null($var) . "<br><br>";
          echo is_null($var2) . "<br><br>";
          echo is_null($var3) . "<br><br>";

        ?>



    <h2>Null</h2>
    <!-- Empty: "", null, 0, 0.0, "0", false, array() -->

    <?php
      $var1 = null;
      $var2 = "";
    ?>

    <h3>is_null</h3>
    <?php echo "is_null1" . is_null($var1); ?><br>
    <?php echo "is_null2" . is_null($var2); ?><br>
    <?php echo "is_null3" . is_null($var3); ?><br>
    <h3>isset</h3>
    <?php echo "isset1" . isset($var1); ?><br>
    <?php echo "isset2" . isset($var2); ?><br>
    <?php echo "isset3" . isset($var3); ?><br>
    <h3>empty</h3>
    <?php $var3 = "0"; ?>
    <?php echo "empty1 " . empty($var1); ?><br>
    <?php echo "empty2 " . empty($var2); ?><br>
    <?php echo "empty3 " . empty($var3); ?><br>



    <h2>Booleans</h2>

    <?php
    $number = 3.14;
    if(is_float($number)) {
      echo "it is a float";
    } else {
      echo "it's not a float";
    };
    ?>


    <?php

      $booleanLogic = is_bool(true);
      $result1 = true;
      $result2 = false;

      echo "result true: " . $result1;
      echo "<br /><br />";
      echo "result false: " . $result2 . "<br><br>";

      echo "is result two a boolean? " . $result3 = is_bool($result2);

      echo "<pre>";

      if ($result3 == true) {
        echo " \$result3 is a boolean";
      } else {
        echo "it's not";
      }

      echo "</pre>";

    ?>

    <h3>in_array</h3>

    <?php $numbers = array(1, 32, 54, 10, 49, 59, 20, 4, 12); ?>

    <?php echo in_array(15, $numbers); ?>
    <?php echo in_array(54, $numbers); ?>



    <h2>Array Functions</h2>

    <?php $numberString = "alex, jeff, leelah, randy, colin, jim, jeff, mark" ?><!-- make a string -->

    <?php $rassmueson = explode(", ", $numberString); ?><!-- convert to array -->

    <?php $rassTotal = count($rassmueson); ?><!-- get the total -->

    <?php
      for ($i=0; $i<$rassTotal; $i++) {
        echo $rassmueson[$i] . "<br />";
      }
    ?>



    <h2>Array Functions</h2>

    <pre><?php $numbers = array(4,1,6,3,9); print_r($numbers); ?></pre>
    <br><br>
    <?php $numbersString = implode(", ", $numbers); ?>
    <?php echo $numbersString; ?>
    <br><br>
    <?php $backToNumbers = explode(", ", $numbersString); ?>
    <br><br>
    <pre><?php print_r($backToNumbers); ?></pre>

    <?
        $totalIndividuals = count($numbers);
        $totalMax = max($numbers);
        $totalMin = min($numbers);
    ?>

    <h3>implode</h3>
    <?php echo $numberString = implode(", ", $numbers); ?>

    <h3>Sort</h3>
    <pre>
      <?php sort($numbers); print_r($numbers); ?>
    </pre>
    <h3>Reverse Sort</h3>
    <pre>
      <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>
    <br />
    <?php ?>
    <h3>User Sort</h3>
    <pre>
      <?php natsort($numbers); print_r($numbers); ?><br />
    </pre>

    <?php echo count($numbers); ?><br />
    <!-- how many things are in the list -->
    <?php echo max($numbers); ?><br />
    <!-- whats the biggest thing in this list? -->
    <?php echo min($numbers); ?><br />
    <!-- what's the smallest value in the list called numbers -->


    <h2>Associative Arrays</h2>
    <h2>Associative Arrays</h2>
    <?php $member = array("first_name" => "alex", "last_name" => "catalano", "username" => "acatalano2"); ?>

    <?php echo $member["first_name"] . " " . $member["last_name"] . "<br />" . $member["username"]; ?><br />
    <?php $member["first_name"] = "hunter"; ?><br />
    <?php echo $member["first_name"] . " " . $member["last_name"] . "<br />" . $member["username"]; ?><br />

    <?php $smoothie = array("strawberry", "water", "peanutButter", "yogurt"); ?>
    <?php echo $smoothie[2]; ?>
    <?php $userID = array("firstName" => "alex", "lastName" => "catalano"); ?>
    <?php echo $userID["lastName"]; ?>


    <p><b>basic arrays</b> <i>when order is important</i></p>
    <p><b>associateive arrays</b> when reference label is important</p>


    <h2>Array</h2>

    <h3>Newer Version</h3>

    <?php $list = [1, 2, 3, 4, "dog", [1, 2, 3]]; ?>
    <pre>

      <?php print_r($list); ?>

    </pre>

    <?php $mixed = array(1, 2, 3, 4, array("dog", "cat", "fish")); ?>

    <?php $mixed[2] = "three"; ?>
    <?php $mixed[5] = "mouse"; ?>
    <?php $mixed[] = "cheese"; ?>
    <?php $mixed[] = "red"; ?>
    <?php $mixed[] = "rat"; ?>
    <?php $mixed[] = "gusto"; ?>
    <?php $mixed[] = array("array inside", "array outside", "array together"); ?>

    <pre>
      <?php print_r($mixed); ?>
    </pre>



    <?php $mixed = array(1, 2, 3, 4, array("dog", "cat", "fish", array("apple", "pear", "orange"))); ?>
    <pre>
      <?php print_r($mixed); ?>
      <?php echo $mixed[4][3][2]; ?>
    </pre>

<div class=""></div>

    <?php $mixed = array(1, 2, 3, 4, "dog"); ?>
    <?php $mixed[5] = "cat"; ?>
    <?php $mixed[11] = "doggy"; ?>
    <?php $mixed[] = "goldfishy"; ?>

    <?php $mixed[6] = "six"; ?>
    <?php $mixed[7] = "as"; ?>
    <?php $mixed[8] = "df"; ?>
    <?php $mixed[9] = "gh"; ?>
    <?php $mixed[10] = "jk"; ?>
    <?php $mixed[] = "lo"; ?>
    <?php $mixed[] = "lo"; ?>
    <?php $mixed[] = "lo"; ?>
    <?php $mixed[] = "lo"; ?>


    <pre>
      <?php print_r($mixed); ?>
    </pre>


    <?php

    echo $mixed[4] . "<br />";

    echo '<pre>';

      print_r($mixed);

    echo '</pre>';


    print_r($mixed);


    $mixed = array("peanut", "butter", 6, array("l", "m", "n"));

    echo $mixed[2];

    $numbers = array(1, 2, 3, 4, 5, 6, 7);
    echo $numbers[0] . "<br /><br />";

    ?>

    <?php

    $numbers = array(1, 2, 3, 4, 5, 6, 7);

    echo $numbers[0];


    ?>



      <?php

      $fiver = "five";

      $number = is_numeric($fiver);

      if ($number) {
        echo "{$fiver} is a number";
      } elseif (!$number) {
        echo "{$fiver} is a string";
      }

      ?>

    <h3>Intergers</h3>

    <?php
      $integer = 3;
      $float = 3.1459;
    ?>

    <h4>is_int</h4>
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
    <?php echo "Is {$float} integer? " . is_int($float); ?><br />

    <h4>is_float</h4>
    <?php echo "is {$integer} float? " . is_float($integer); ?><br />
    <?php echo "is {$float} float? " . is_float($float); ?><br />

    <h4>is_numeric</h4>
    <?php echo "is {$integer} numeric? " . is_numeric($integer); ?><br />
    <?php echo "is {$float} numeric? " . is_numeric($float); ?><br />

    <h3>Rounding and Stuff</h3>

    <?php

      $nuts = 2.40;
      $esspresso = 1.40;
      $chocolate = 2.20;
      $coffee = 1.4;

      $total = $nuts + $esspresso + $chocolate + $coffee . "<br />";
      $total = 4.395;


      echo "total: " . $total . "<br />";
      echo round($total, 1) . "<br />";
      echo ceil($total) . "<br />";
      echo floor($total) . "<br />";

     ?>



    <h2>Floats</h2>
    <?php echo $float = 3.14159265359415926535941592653594159265359415926535941592653594159265359415926535941592653594159265359415926535941592653594159265359415926535941592653594159265359; ?><br />
    <?php echo round($float, 13); ?><br />
    <h3>Ceiling</h3>
    <?php echo ceil($float); ?><br />
    <h3>Floor</h3>
    <?php echo floor($float); ?><br />

    <?php

      $var = 2;

      $var = $var + 1;

      $var += 1;

      $var++;
      //var++ adds one after accounting for the initial value

    ?>



    <?php
      $first = "The quick broWn fOx";
      $second = " jumps oVer tHe laZy Dog.";
      $together = $first;
      echo "together one: " . $together . "<br />";
      $together .= $second;
      echo "together two: " . $together . "<br />";
      echo "one: " . $first . "<br />";
      echo "two: " . $second . "<br />";
      $third = $together;
    ?>

    <p>string functions</p>

    <ul>
      <li>lowercase: <?php echo strtolower($together); ?></li>
      <li>uppercase: <?php echo strtoupper($together); ?></li>
      <li>capitalize: <?php echo ucfirst($together); ?></li>
      <li>capitalize every word: <?php echo ucwords($together); ?></li>
    </ul>

    <ul>
      <li><?php echo strtoupper("ConTrol"); ?></li>
      <li><?php echo ucfirst(strtolower($together)); ?></li>
    </ul>


    <?php $length = "this is a string to count characters"; ?>
    <?php echo strlen($length); ?>
    <!-- variable $_____ length, it counts the spaces; -->
    <?php echo "Alex" . trim(" Bad Cat Dough ") . "Eat"; ?>
    <!-- trims spaces from edges -->
    <h2>Here</h2>
    <?php echo strstr($third, "h"); ?>
    <!-- string within a string, in variable $_____ find and start from "searched" -->
    <?php echo str_replace("quick", "fast", $third); ?>
    <!-- replace the word "quick" with "fast" in the variable $______ only affect that instance-->

    <?php echo str_repeat($third, 3); ?>
    <!-- repeat the variable $______ (three) times -->
    <br />
    <?php echo substr($third, 4, 9); ?>
    <!-- echo only string positions no. 04 through no. 09 -->
    <br />
    <?php echo strpos($third, "quick"); ?>
    <!-- what is the numbered position "quick" within variable $______ -->
    <br />
    <?php echo strchr($third, "he"); ?>
    <br />
    <?php echo strstr($third, "he"); ?>
    <!-- -->
    <br />
    <?php echo strpos($third, "z"); ?>
    <br />
    <?php echo strlen($third); ?>

    <?php

      $stringLength = strlen($third);
      $stringSection = strpos($third, "z");

      $difference = $stringLength - $stringSection;

      echo "<br />";

      echo $difference;
      echo "<br />";
      echo 51 - 38;
      echo "<br />";

    ?>

    <h2>Intergers</h2>

    <?php
        $var1 = 3;
        $var2 = 4;
     ?>

     basic math <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?>
     <br />
     absolute value: <?php echo abs(0 - 300); ?>
     <br />
     exponential: <?php echo pow(2,8); ?>
     <!-- 2 to the power of 8 -->
     <br />
     square root: <?php echo sqrt(100); ?>
     <br />
     fmod: <?php echo fmod(20,7); ?>
     <br />
     random <?php echo rand(); ?>
     <br />
     random <?php echo rand(1, 100); ?>
     <br />

      += : <?php $var2 += 4; echo $var2; ?><br />
      -= : <?php $var2 -= 4; echo $var2; ?><br />
      *= : <?php $var2 *= 4; echo $var2; ?><br />
      /= : <?php $var2 /= 4; echo $var2; ?><br />

      += : <?php $var2 += 4; echo $var2; ?><br />
      -= : <?php $var2 -= 4; echo $var2; ?><br />
      *= : <?php $var2 *= 3; echo $var2; ?><br />
      /= : <?php $var2 /= 4; echo $var2; ?><br />

      <h3>Increment</h3>
      <?php $var2 += 1; ?>

      <?php

            $a = 2;

            echo $a;

            $b = $a++;

            echo $b;

            echo $a;

    ?>


  </body>
</html>
