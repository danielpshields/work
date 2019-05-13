<?php
  require("../include/db.php");
  if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $query = "INSERT INTO alex (name, email) VALUES ('{$name}', '{$email}')";
    $write = mysqli_query($connection, $query);
    if (!$write) {die("write failed");}
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <h1><?php echo base64_decode("email"); ?></h1>

    <form action="index.php" method="post">
      <input type="text" name="name" value="">
      <input type="text" name="email" value="">
      <input type="submit" name="submit" value="submit">
    </form>


    <p style="font-family: monospace;"><?php
    $alex  = "email";

    $after = "acatalano2@ufl.edu";
    echo "<b>base 64:</b> https://advising.ufl.edu/processor?" . base64_encode($alex) . "=" . base64_encode($after);

     ?> </p>

     <p style="font-family: monospace;"><?php echo "<b>hash:</b> " . hash("md5", $alex, false); ?></p>


    <ul>
      <?php $protectRAWURL = base64_encode($alex); ?>
      <?php $protectURL    = base64_encode($after); ?>
      <li><a href="processor.php?<?php echo $protectRAWURL; ?>=<?php echo urlencode($protectURL); ?>">processor</a></li>
    </ul>

  </body>
</html>
