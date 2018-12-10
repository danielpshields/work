<?php
  $page = "login";
  require("include/header.php");
?>
  <h2>Hello again, <?php echo $firstName; ?>!</h2>
  <h3>Please login:</h3>

  <form action="ticket.php" method="post">
    <div class="inputShell">

      <input type="text" name="username" value="AAAA" disabled>
      <label for="username">Username</label>

      <input type="password" name="password" value="">
      <label for="password">Password</label>
    </div><!-- input shell -->
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>

<?php require("include/footer.php") ;?>
