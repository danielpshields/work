<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "190516_thursday";
  include("{$root}include/header.php");
?>

      <ul>
        <li>Efren: chat about webpage not loading and start/restart | microprocessors</li>
        <li>Starbucks: $<?php echo $spent = 2.84; ?></li>
        <li>Wells Fargo: credit card</li>
        <li>wordpress: essential training</li>
        <li>made bread</li>
        <li>h2, h3 discussion (group -> efren) general theory, overview and granular</li>
        <li>flexbox vs. bootstrap discussion</li>
        <li>[clean]</li>
        <li>[symmetry] "blue flower", light tests, general planning</li>
        <li>bed @ 10 p.m.</li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="spent" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="15.php">last</a></li>
            <p>&#124;</p>
            <li><a href="17.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
