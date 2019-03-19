<?php
  $root = "../../";
  $application = "Career Changers";
  if (isset($_POST['submit'])) {
    // include("{$root}email/email.php");
    include("{$root}email/thankyou/thankyou_email.php");
    // header("Location: ../../thankyou.php");  exit;
    // echo "<pre>";
    // echo print_r($_POST);
    // echo "</pre>";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="text" name="name" value="" placeholder="name">
      <input type="text" name="email" value="" placeholder="email">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
