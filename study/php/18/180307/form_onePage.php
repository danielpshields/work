<?php
require_once("../include/functions.php");

if (isset($_POST['submit'])) {

  if ($username == "alex" && $password == "password") {
    //successful login
  }
  $username = $_POST['username'];
  $password = $_POST['password'];
  $message = "There were some errors";
  } else {
    $username = "";
  $message = "please log in";
} ?>
<?php include("../include/header.php"); ?>
<h2>One Page Form</h2>

  <?php echo $message; ?><br>

  <form action="form_onePage.php" method="post">
    username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
    password: <input type="password" name="password" value="">
    <br>
    <input type="submit" name="submit" value="submit">
  </form>


<?php include("../include/footer.php"); ?>
