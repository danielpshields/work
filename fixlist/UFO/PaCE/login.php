<?php
  $root = "";
  $page = "login";
  require("include/header.php");
?>
  <h2>Hello, <?php echo $firstName; ?>!</h2>
  <h3>Please login:</h3>

  <form action="dashboard.php" method="post">
    <div class="inputShell">

      <input type="text" name="username" value="<?php echo $user; ?>" disabled>
      <label for="username">Username</label>

      <input type="password" name="password" value="">
      <label for="password">Password</label>
    </div><!-- input shell -->
    <input class="submitButton" type="submit" name="submit" value="submit">
    <p><i>Not a user?</i> <a href="signup.php">sign up</a></p>
  </form>

<?php require("include/footer.php") ;?>
