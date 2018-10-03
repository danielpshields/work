<?php
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    if ($username == "alex") {
      header("Location: shell.php");
      exit;
    } else {
      $message = "please enter a valid username";
      $notFound = "username: \"<u><b>{$username}</b></u>\" not found";
    }
  } else {
    $message = "please log in";
    $username = "";
  }
?>
<?php include("../include/header.php"); ?>
<h2>Form</h2>

  <p><i><?php echo $message; ?></i></p>
  <form action="form.php" method="post">
    username <input type="text" name="username" value="<?php echo $username; ?>">
    <input type="submit" name="submit" value="submit">
  </form>

  <p><?php echo $notFound; ?></p>


<?php include("../include/nav.php"); include("../include/footer.php"); ?>
