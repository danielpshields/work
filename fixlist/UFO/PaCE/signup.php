<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "pace";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if (mysqli_connect_errno()) {
    die("connection failed");
  }

  $page = "signup";
  require("include/header.php");
  $username = "";
  $passwordMatch = "";
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordCheck = $_POST['passwordCheck'];
    if ($password === $passwordCheck) {
      header("Location: login.php");
      exit;
    } else {
      $passwordMatch = "passwords do not match :(";
    }
  }

  // $query = "SELECT * FROM ticket WHERE id = 2";
  // $result = mysqli_query($connection, $query);
  // if (!$result) { die("Database query failed"); }
  // while ($row = mysqli_fetch_assoc($result)) {
  //    $alex = $row['user'];
  //  }
?>

  <!-- <h2>Hello, <?php echo ucfirst($alex); ?>!</h2> -->
  <!-- <h2>Please select a password:</h2> -->
  <h2>Welcome, <?php echo $firstName; ?>!</h2>
  <form action="signup.php" method="post">
    <div class="inputShell">
      <input type="text" name="username" value="<?php echo $user ; ?>" disabled>
      <label for="username">Username</label>
      <p>Please select a password:</p>
      <input type="password" name="password" value="">
      <label for="password">Password:</label>
      <input type="password" name="passwordCheck" value="">
      <label for="passwordCheck">Re-enter Password:</label>
      <p><?php echo $passwordMatch; ?></p>
    </div><!-- input shell -->
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

<?php require("include/footer.php") ;?>
<?php mysqli_close($connection); ?>
