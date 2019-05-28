<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "";
  include("{$root}include/header.php");
?>

      <ul>
        <li>filled water bottle at work</li>
        <li>ordered BH: #1057671876</li>
        <li>wants and travel plans</li>
        <li>[schedule] [lnote]</li>
        <li>[meeting] Efren | <a href="<?php echo $root; ?>work/meeting/image/19/05/generalStructure.jpg">white board meeting about site structure</a></li>
        <li>[lnote] added fixlist count to header</li>
        <li>added <a href="<?php echo $root; ?>home/blog/fixlist.php">blog concept</a></li>
        <li>third monitor added</li>
        <li>comb websites for errors</li>
        <li>scott harper chat</li>
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
