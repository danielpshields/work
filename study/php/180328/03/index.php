<?php
  require_once("functions.php"); $errors = array();
  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!thereIs($username)) {
      $errors['username'] = "the username cannot be blank";
    }

    if ($username === "alex" && $password === "password") {
      redirectTo("shell.php");
    } else {
      $message = "please try again";
    }
  } else {
    $message = "welcome, please enter a username and password";
  }

?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>


  <p><?php echo $message; ?></p>
  <p><?php echo displayErrors($errors);?></p>

<form action="index.php" method="post">
  <input type="text" name="username">
  <input type="password" name="password">
  <input type="submit" name="submit" value="submit">
</form>

<?php include("../include/footer.php"); ?>
