<?php require_once("functions.php");
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "alex" && $password === "password") {
      redirectTo("template.php");
    } else {
      $message = "please try again, friend!";
    }
  } else {
    $message = "Welcome! Please enter a password!";
  }
?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>


  <p><?php echo $message; ?></p>
  <form action="index.php" method="post">
    username: <input type="text" name="username" value=""><br>
    password: <input type="password" name="password" value=""><br>
    <input type="submit" name="submit" value="submit">
  </form>


<?php include("../include/footer.php"); ?>
