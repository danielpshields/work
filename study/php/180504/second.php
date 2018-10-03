<?php require_once("functions.php");

  if (isset($_POST['submit']) || !isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username !== "alex" || $password !== "password") {
      redirectTo("first.php");
    }
  }

?>
<?php $title = "second"; $stylesheet = $title; include("../include/header.php"); ?>


    <ul>
      <li><a href="bunnies.php?id=<?php echo $username; ?>">Bunny Page</a></li>
    </ul>

    <ul>
      <li><a href="index.php">index</a></li>
      <li><a href="first.php">first</a></li>
    </ul>

<?php include("../include/footer.php"); ?>
