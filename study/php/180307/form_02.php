<?php
  require("../include/function.php");

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "alex" && $password == "password") {
      redirect_to("shell.php");
    } else {
      $message = "username or password not found";
    }

  } else {
    $username = "";
    $message = "please log in";
  }

?>
<?php include("../include/header.php"); ?>
<h2>Login Form</h2>


  <p><i><?php echo $message; ?></i></p>
  <form action="form.php" method="post">
    username: <input type="text" name="username" value="" /><br>
    password: <input type="password" name="password" value="" /><br>
    <input type="submit" name="submit" value="submit" />
  </form>

<?php include("../include/footer.php"); ?>
