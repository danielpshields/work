<?php
  require_once("functions.php");
  $errors = array();
  $message = "";

  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!thereIs($username)) {
      $errors['noName'] = "please enter a username";
    }
    if (empty($errors)) {
      if ($username === "alex" && $password === "password") {
       redirectTo("shell.php");
     } else {
       $message = "username password do not match";
     }
    }
  }  else {
    $username = "";
    $message = "Please login";
  }

?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>


  <p><?php echo $message; ?></p>
  <?php echo displayErrors($errors); ?>
<form action="index.php" method="post">
  <input type="text" name="username" value="<?php echo $username; ?>">
  <input type="password" name="password">
  <input type="submit" name="submit" value="submit">
</form>


<?php include("../include/footer.php"); ?>
