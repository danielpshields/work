<?php
  require_once("validation_functions.php");
  $errors = array();
  $message = "";

  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

  $fieldsRequired = array("username", "password");

  foreach ($fieldsRequired as $field) {
    $value = $_POST[$field];
    if (!hasPresence($value)) {
      $errors[$field] = "{$field} cannot be blank";
    }
  }

  if (empty($errors)) {
    if ($username === "alex" && $password === "password") {
      redirectTo("shell.php");
    } else {
      $message = "please enter correct username";
    }
  }

  } else {
    $username = "";
  }
?>
<?php $title = "form with validation"; $stylesheet = ""; include("../include/header.php"); ?>
<p><?php echo $message; ?></p>
<p><?php echo displayErrors($errors); ?></p>
<form action="form_with_validation.php" method="post">
  <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
  <input type="password" name="password" value="">
  <input type="submit" name="submit" value="submit">
</form>

<?php include("../include/footer.php"); ?>
