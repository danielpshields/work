<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "190521_tuesday";
  include("{$root}include/header.php");
?>

      <ul>
        <li>blog posted</li>
        <li>starbucks: <?php echo $spent = 2.84; ?></li>
        <li>scott and efren morning chat</li>
        <li>basename __FILE__ <?php echo basename(__FILE__); ?></li>
        <li>dirname __FILE__ <?php echo dirname(__FILE__); ?></li>
        <li>realpath __FILE__ <?php echo realpath(__FILE__); ?></li>
        <li>pathinfo __FILE__: <pre><?php print_r(pathinfo(__FILE__)); ?></pre></li>
        <!-- <li>basename __FILE__ <pre><?php //echo print_r(file(__FILE__)); ?></pre></li> -->
        <li>[study] created page under "work/study/file" for these :)</li>
        <li>resumes review</li>
        <li>[meeting] staff, discussed discussion based formats, meeting cadence, documentation, project scope</li>
        <li>lunch Pita Pit <?php echo $spent += 10.90; ?></li>
        <li>[study] wp essential training</li>
        <li>[work] downloaded wordpress to localhost, edited php.ini</li>
        <li>[want] reformatting</li>
        <li>cleaning for the inspection thing</li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="spent" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href=".php">last</a></li>
            <p>&#124;</p>
            <li><a href="../../../index.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
