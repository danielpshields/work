<?php
  if (isset($_POST['submit'])) {
    $username = $_POST['user'];
  } else {
    $username = "";
  }
?>
<?php include("../include/header.php"); ?>
  <h2>Index</h2>


  <?php
  $username = trim("");
  echo $username;
  ?>
  <form action="index.php" method="post">
    <input type="text" name="user" value="">
    <input type="submit" name="submit" value="submit">
  </form>


<?php include("../include/nav.php"); include("../include/footer.php"); ?>
