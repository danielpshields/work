<?php
    $site = file('https://alexcatalano.com/');

    foreach($site as $key => $value) {
      echo $key . " " . htmlspecialchars($value) . "<br>";
    }


    //$html = implode('', file("http://alexcatalano.com"));
    // print_r($html);


    //PART II:
?>.

  <p><a href="https://www.php.net/manual/en/language.constants.predefined.php" target="_blank">general overview</a></p>
  <p><a href="https://www.php.net/manual/en/function.basename.php" target="_blank">find related functions</a></p>

  <ul>
    <li>basename __FILE__ <?php echo basename(__FILE__); ?></li>
    <li>dirname __FILE__ <?php echo dirname(__FILE__); ?></li>
    <li>realpath __FILE__ <?php echo realpath(__FILE__); ?></li>
    <li>pathinfo __FILE__: <pre><?php print_r(pathinfo(__FILE__)); ?></pre></li>
  </ul>
