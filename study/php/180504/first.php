<?php $title = "First Page"; $stylesheet = "stylesheet"; require_once("../include/header.php"); ?>

    <form action="second.php" method="post">
      username: <input type="text" name="username" value=""><br />
      password: <input type="password" name="password" value=""><br />
      <input type="submit" name="submit" value="submit">
    </form>

<?php include("../include/footer.php"); ?>
