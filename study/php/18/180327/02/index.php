<?php
  require_once("functions.php");
  $errors = array();

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!thereIs($username)) {
      $errors['presence'] = "username cannot be blank";
    }


    if ($username === "alex" && $password === "password") {
      redirectTo("template.php");
    } else {
      $message = "Please try again";
    }
  } else {
    $message = "welcome, please enter a username and password";
  }
?>

<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>


<p><?php echo $message; ?></p>
    <?php echo displayErrors($errors); ?>
<form action="index.php" method="post">
  username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
  password: <input type="password" name="password" value=""><br><br>
  <input type="submit" name="submit" value="submit">
</form>


<?php include("../include/footer.php"); ?>
