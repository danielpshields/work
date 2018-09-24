<?php require_once("functions.php");
  $errors = array(); $message = "";

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $requiredFields = array("username", "password");
    foreach($requiredFields as $key => $field) {
      $value = $_POST[$field];
      if (!hasPresence($value)) {
        $errors[$field] = "{$field} cannot be blank";
      }
    }
    $fieldsMaxLength = array(
      "username" => 8,
      "password" => 8
    );
    validateMaxLength($fieldsMaxLength);

    if (empty($errors)) {
      if ($username === "alex" && $password === "password") {
        redirectTo("template.php");
      } else {
        $message = "please try again, friend";
      }
    }
  } else {
    $username = "";
    $message = "welcome! please log in";
  }
?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>

<p><?php echo $message; ?></p>
<?php echo displayErrors($errors); ?>
<form action="index.php" method="post">
  username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
  password: <input type="password" name="password" value=""><br>
  <input type="submit" name="submit" value="submit">
</form>

<?php include("../include/footer.php"); ?>
