<?php require_once("functions.php");

  if ($_GET['id'] !== "alex") {
    redirectTo("first.php");
  }

?>

<?php $title = "bunnies"; $stylesheet = $title; include("../include/header.php"); ?>

<img src="../image/sample/bunny2.jpg" alt="">


<ul>
  <li><a href="second.php">second</a></li>
  <li><a href="first.php">first</a></li>
  <li><a href="index.php">index</a></li>
</ul>
<?php include("../include/footer.php"); ?>
