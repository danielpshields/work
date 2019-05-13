<?php
  $root = "";
  $page = "signup";
  require("include/header.php");

  /*

    Database

    (C) R U D

    1. Username = glid;
    2. Password = $password;

 */

?>

  <h2>Welcome! Please select a password:</h2>

  <form action="index.php" method="post">
    <div class="inputShell">
      <input type="text" name="username" value="<?php echo $user ; ?>" disabled>
      <label for="username">Username</label>
      <p>Enter your preferred password:</p>
      <input type="password" name="password" value="">
      <label for="password">Password</label>
    </div><!-- input shell -->
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

<?php require("include/footer.php") ;?>
