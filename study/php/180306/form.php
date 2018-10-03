<?php
  require_once("function.php");

  if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "alex" && $password == "password") {
      redirect_to("shell.php");
    } else {
      $message = "please enter a correct login";
    }
  } else {
    $username = "";
    $password = "";
    $message = "please login";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Login</h1>

    <p><i><?php echo $message; ?></i></p>
    <form action="form.php" method="post">
      username
      <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
      password
      <input type="password" name="password"><br>
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
