<?php
  $root  = "../../";
  $spent = 0;
  $total = $spent;
  include("{$root}include/db.php");
  $readDB = "SELECT credit FROM account";
  $read   = mysqli_query($connection, $readDB);
  $date = "190520_monday";
  include("{$root}include/header.php");
?>

      <ul>
        <li>starbucks: <?php echo $spent = 2.84; ?></li>
        <li>password change | update doc server_log</li>
        <li>Efren conversation, string play and public surplus</li>
        <li>locked out contacted keith baker | password reset via Helpdesk in person | update server doc</li>
        <li>wordpress</li>
        <li>created Emily_Notes.xl</li>
        <li>[study] wordpress</li>
        <li>email account woes, credentials locked out, primary account "acatalano@advising.ufl.edu", contacted keith baker</li>
        <li><a href="<?php echo $root; ?>../fixlist/fixlist.php" target="_blank">create work document</a></li>
        <li>email account woes</li>
        <li>[blog] <a href="http://alexcatalano.com/blog/19/05/19/sunsets.php" target="_blank">sunsets</a></li>
        <li>mom talk about bills</li>
        <li>[meeting] chaired</li>
        <li>[<a href="http://alexcatalano.com/blog/19/05/19/sunsets.php" target="_blank">blog</a>]</li>
        <li>emailed Mindy</li>
        <li>emailed Matt</li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="spent" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="17.php">last</a></li>
            <p>&#124;</p>
            <li><a href="21.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
