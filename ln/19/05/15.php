<?php
  $root  = "../../";
  $spent = 0;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LN &#124; 190515_wednesday</title>
    <link rel="icon" type="image/png" href="../../image/picon.png">
    <link rel="stylesheet" href="<?php echo $root; ?>css/master.css">
  </head>
  <body>
    <div class="container">
      <ul>
        <li><a href="../../../index.php">index</a></li>
      </ul>

      <h1>190515_wednesday</h1>

      <ul>
        <li>configured LN. Added $spent as total for form submission to processor page</li>
        <li>Tim Young stopped by, chatted</li>
        <li>meeting: Efren about the state of things and gameplan</li>
        <li>practice: wordpress</li>
        <li>sound issues</li>
        <li>battery drawing</li>
        <li>Salad Place: $<?php echo $spent = 17.29; ?></li>
        <li>Starbucks: $<?php echo $spent += 2.84; ?></li>
        <li>Efren wordpress discussion</li>
        <li>Lynda: wordpress</li>
        <li>food sick :(</li>
        <li>lynda: wordpress</li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="total" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="14.php">last</a></li>
            <p>&#124;</p>
            <li><a href="../../../index.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
