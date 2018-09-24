<?php require_once("functions.php"); $errors = array(); $message = "";
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $requiredField = array("username", "password");
    foreach ($requiredField as $key => $field) {
      $value = $_POST[$field];
      if (!hasPresence($value)) {
        $errors[$field] = $field . " cannot be blank";
      }
    }

    $fieldsWithMaxLengths = array("username" => 10, "password" => 10);
    validate_max_lengths($fieldsWithMaxLengths);
    



    if (empty($errors)) {
      if ($username === "alex" && $password === "password") {
        redirectTo("template.php");
      } else {
        $message = "Please try again, friend!";
      }
    }


  } else {
    $username = "";
    $message = "Welcome, please log in!";
  }
?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>
<p><?php echo $message; ?></p>
<?php echo displayErrors($errors); ?>
<form action="index.php" method="post">
  username: <input type="text" name="username" value="<?php echo $username; ?>"><br>
  password: <input type="password" name="password" value=""><br>
  <input type="submit" name="submit" value="submit">
</form>

<?php include("../include/footer.php"); ?>
