<?php
  require("includeFunctions.php");
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "alex" && $password == "password") {
      redirect_to("shell.php");
    }

  } else {
    $username = "";
    $password = "";
    $message = "unsubmitted form";
  }

?>
<?php include("../include/header.php"); ?>
<h2>One-Page Form</h2>

<form action="form_single.php" method="post">
  username: <input type="text" name="username" value="<?php echo $username; ?>" /><br>
  password: <input type="password" name="password" />
  <br>
  <br>
  <input type="submit" name="submit" value="submit">
</form>


<?php include("../include/footer.php"); ?>
