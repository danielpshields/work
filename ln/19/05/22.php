<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "190522_wednesday";
  include("{$root}include/header.php");
?>

      <ul>
        <li>sickly -- something with the nostril</li>
        <li>cleaning for the inspection</li>
        <li>wordpress beat down</li>
        <li>home early</li>
        <li>Jim indian cuisine</li>
        <li>mindy messages</li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="spent" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="21.php">last</a></li>
            <p>&#124;</p>
            <li><a href="../../../index.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
