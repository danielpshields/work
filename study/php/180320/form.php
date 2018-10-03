<?php
  require_once("functions.php");
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "alex" && $password === "password") {
      redirectTo("template.php");
    } else {
      $message = "incorrect login information";
    }
  } else {
    $username = "";
    $message = "Please Log In";
  }
?>

<?php $title = "form"; $stylesheet = $title; include("../include/header.php"); ?>


  <p><i><?php echo $message; ?></i></p>

  <form action="form.php" method="post">

    <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
    <input type="password" name="password">
    <input type="submit" name="submit" value="submit">

  </form>

<?php include("../include/footer.php"); ?>
