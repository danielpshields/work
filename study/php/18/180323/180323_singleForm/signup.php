<?php $title = htmlspecialchars("sign up"); $stylesheet = $title; include("../include/header.php"); ?>

  <form action="index.php" method="post">
    <input type="text" name="username" value=""><br>
    <input type="text" name="password" value=""><br><br>
    <input type="submit" name="submit" value="submit">
  </form>


<?php include("../include/footer.php"); ?>
