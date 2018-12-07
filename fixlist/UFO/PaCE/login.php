<?php
  $page = "login";
  require("include/header.php");
  $username = "temp_alexUsername";
?>
  <h2>Hello, <?php echo $firstName; ?>!</h2>
  <h3>Please login:</h3>

  <form action="login.php" method="post">
    <div class="inputShell">

      <label for="username">Username:</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
      <label for="password">Password:</label>
      <input type="password" name="password" value="">
    </div><!-- input shell -->
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

  <pre>
    <?php print_r($_POST); ?>
  </pre>

<?php require("include/footer.php") ;?>
