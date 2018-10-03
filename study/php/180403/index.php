<?php require_once("functions.php"); $errors = array();
if (isset($_POST['submit'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $requiredFields = array("username", "password");
  foreach($requiredFields as $field) {

    $value = $_POST[$field];

    if (!hasPresence($value)) {
      $errors[$field] = $field . " cannot be blank";
    }
  }

  if ($username === "alex" && $password === "password") {
    redirectTo("template.php");
  } else {
    $message = "Please try again!";
  }
} else {
  $message = "Welcome, please log in!";
}

?>

<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>

  <p><?php echo $message; ?></p>
  <?php echo displayErrors($errors); ?>
<form action="index.php" method="post">
  username: <input type="text" name="username" value=""><br>
  password: <input type="password" name="password" value=""><br>
  <input type="submit" name="submit" value="submit">
</form>


<?php include("../include/footer.php"); ?>
