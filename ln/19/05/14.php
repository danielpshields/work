<?php
  $root = "../../";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LN &#124; 190514_tuesday</title>
    <link rel="icon" type="image/png" href="../../image/picon.png">
    <link rel="stylesheet" href="<?php echo $root; ?>css/master.css">
  </head>
  <body>
    <div class="container">
      <ul>
        <li><a href="../../../index.php">index</a></li>
      </ul>

      <h1>190514_tuesday</h1>

      <ul>
        <li>baked banana bread</li>
        <li>printed third knob for printer level adjust</li>
        <li>coffee $<?php echo $spent = 2.84; ?></li>
        <li>Staff Meeting: (jonathan, alex, efren) Discussed Digital Map / Inventory</li>
        <li>Dan Shields: Coffee $<?php echo $spent += 2.14; ?></li>
        <li>Effren: Test Site discussion</li>
        <li>Keith Baker: Access to "\\ls-web-share\"</li>
        <li>meeting with CLAS IT, Keith; Brent and I discussed the current infrastructure</li>
        <li>Efren: Test Site and infrastructural discussion</li>
        <li>email: matt</li>
        <li>scott converation about mobile and search bar / general layout</li>
        <li>scott and Efren conversation</li>
        <li>drone flight in the prairie, through the pines, tested max range ~700 ft to ~1,000 ft, dipped down in the special prairie, tried circling / squaring a pine, played on sport mode</li>
        <li>[lnote] redirect after add new category</li>
        <li>[print] got the filter ring and the first lens ring</li>
        <li>watched the office, bed at 11 p.m.</li>
      </ul>

      <form action="<?php echo $root; ?>processor.php" method="post">
        <input type="submit" name="total" value="<?php echo "$" . $spent; ?>" tabindex="1">
      </form>

      <footer>
        <nav>
          <ul>
            <li><a href="13.html">last</a></li>
            <p>&#124;</p>
            <li><a href="15.php">next</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </footer>
    </div>
  </body>
</html>
