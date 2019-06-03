<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "190529_wednesday";
  include("{$root}include/header.php");
?>

      <ul>
        <li>[ln] open wednesday (190529)</li>
        <li>clas retheme diving</li>
        <li>[meeting] efren about header and potential duplication solution</li>
        <li>[purchase] po box</li>
        <li>[purchase] <a href="">glasses</a></li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="spent" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="28.php">last</a></li>
            <p>&#124;</p>
            <li><a href="../../../index.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
