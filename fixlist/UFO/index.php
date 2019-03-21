<?php
  $root = "";
  $page = "login";
  $pageName = "CLAS UF Online";
  require("{$root}include/header.php");
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $readCredentials = "SELECT * FROM pace_users";
    $readEm = mysqli_query($connection, $readCredentials);
    if (!$readEm) die ("query failed");
    while ($row = mysqli_fetch_assoc($readEm)) {
       $stored_username = $row['username'];
       $stored_password = $row['password'];

       if ($username === $stored_username && $password === $stored_password) {
        echo "they match";
        $cookName   = "key";
        $cookValue  = "pace_admin";
        $cookExpire = time() + (60*60*24*7*4);
        setcookie($cookName, $cookValue, $cookExpire);
        header("Location: dashboard.php");
        exit;
       } else {
         $miss = true;
       }
    }
  }
?>

  <form action="index.php" method="post">
    <div class="inputShell">
      <h3 class="blue">PaCE Admin Login</h3>
      <?php if ($miss) { ?>
        <p>Apologies! Administrative credentials are needed to access this part of the Site</p>
      <?php } ?>
      <input type="text" name="username" value="<?php echo $user; ?>">
      <label for="username">Username</label>
      <input type="password" name="password" value="">
      <label for="password">Password</label>
    </div><!-- input shell -->
    <input class="submitButton" type="submit" name="submit" value="submit">
    <!-- <p><i>Not a user?</i> <a href="signup.php">sign up</a></p> -->
  </form>

<?php require("include/footer.php") ;?>
