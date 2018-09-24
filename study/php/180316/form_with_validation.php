<?php
  require_once("functions.php");
  require_once("validation_functions.php");

  $errors = array();
  $message = "";

  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!hasPresence($username)) {
      $errors['username'] = "Username can't be blank";
    }

    if (empty($errors)) {
      if ($username == "alex" && $password == "password") {
        redirectTo("template.php");
      } else {
        $message = "please try again";
      }
    }

  } else {
    $username = "";
    $message = "please log in";
  }

?>
<?php $title = "validated form"; include("../include/header.php"); ?>

<?php echo errorsFound($errors); ?>
<?php echo $message; ?>
<form action="form_with_validation.php" method="post">
  <input type="text" name="username" value="<?php echo $username; ?>">
  <input type="password" name="password">
  <input type="submit" name="submit" value="submit">
</form>

<?php include("../include/footer.php"); ?>
