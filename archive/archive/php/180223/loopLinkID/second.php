<?php $id = $_GET["id"]; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Second Page</title>
    <link rel="stylesheet" href="../../../css/stylesheet.css">
  </head>
  <body>

    <h2><a href="first.php">Home</a></h2>

    <?php if ($id == 1) { ?>
      <h3>Members Page</h3>
      <img src="../../../image/sample/bunny2.jpg">

    <?php } else if ($id == 2) { ?>

      <h3>Guest Page</h3>
      <img src="../../../image/sample/bunny3.jpg">

    <?php } elseif ($id == 3) { ?>

      <h3>SignUp</h3>
      <img src="../../../image/sample/bunny4.jpg" alt="">

    <?php } ?>

</body>
</html>
