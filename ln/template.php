<?php
  $root  = "../../";
  $spent = 0;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LN &#124; template</title>
    <link rel="icon" type="image/png" href="../../image/picon.png">
    <link rel="stylesheet" href="<?php echo $root; ?>css/master.css">
  </head>
  <body>
    <div class="container">
      <ul>
        <li><a href="../../../index.php">index</a></li>
      </ul>

      <h1>template</h1>

      <ul>
        <li></li>
        <li></li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="total" value="<?php echo "$" . $spent; ?>" tabindex="1">
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
