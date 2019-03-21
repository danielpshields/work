<?php
$root = "";
include("include/env.php");
  if (isset($_POST['submit'])) {
    include("email/approve/approve_email.php");
    echo "sent!";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php $email = ""; ?>
  <body>
    <h1>Test Approve Message</h1>
    <form action="shell.php" method="post">
      <input type="hidden" name="message" value="hiddenMessage">
      <input type="hidden" name="foo" value="<?php echo $email; ?>">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
