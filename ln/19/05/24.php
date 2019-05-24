<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "190524_friday";
  include("{$root}include/header.php");
?>

      <ul>
        <li>sick morning</li>
        <li>publix</li>
        <li>office @ 1 p.m.</li>
        <li>[ln] open Friday (190524, 1:29 p.m.)</li>
        <li>efren meeting</li>
        <li>jonathan meeting</li>
        <li>efren meeting</li>
        <li>emails</li>
        <li>wordpress study</li>
        <ul>
          <li>child themes w/ morten</li>
        </ul>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="spent" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="22.php">last</a></li>
            <p>&#124;</p>
            <li><a href="../../../index.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
