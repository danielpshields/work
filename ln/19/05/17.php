<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "190517_friday";
  include("{$root}include/header.php");
?>

      <ul>
        <li>sluggish</li>
        <li>starbucks: <?php echo $spent = 2.84; ?></li>
        <li>[discussion] font size and variation > turned to > app discussion</li>
        <li>[discussion] stylesheet discussion, head>if statements vs. default to two sheets</li>
        <li>doughnuts -- for some reason put on wire rack.</li>
        <li>[discussion] wordpress special functions - special posts page</li>
        <li>[study] wordpress: essential training</li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="spent" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="16.php">last</a></li>
            <p>&#124;</p>
            <li><a href="../../../index.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
