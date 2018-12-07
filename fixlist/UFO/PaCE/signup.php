<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "pace";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if (mysqli_connect_errno()) {
    die("connection failed");
  } else {
    echo "connection succesful!";
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

?>

  <?php

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) { die("Database query failed"); }
   ?>


  <h2>Hello, <?php echo $firstName; ?>!</h2>
  <h3>Please create a username and password:</h3>

  <form action="signup.php" method="post">
    <div class="inputShell">

      <label for="username">Username:</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
      <label for="password">Password:</label>
      <input type="password" name="password" value="">
      <label for="passwordCheck">Re-enter Password:</label>
      <input type="password" name="passwordCheck" value="">
      <p><?php echo $passwordMatch; ?></p>
    </div><!-- input shell -->
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

  <p>wah</p>

  <?php

    while ($row = mysqli_fetch_assoc($result)) {
       $alex = $row['username'];
     }
  ?>

  <p>I was taking a walk with <?php echo $alex; ?> the other day</p>

<?php require("include/footer.php") ;?>
<?php mysqli_close($connection); ?>
