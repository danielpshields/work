<?php $id = $_GET["id"]; ?>
<?php include("../include/header.php"); ?>
<h2><a href="first.php">Home</a></h2>

<?php if ($id == 1) { ?>
  <h3>Members</h3>
  <img src="../image/sample/bunny2.jpg">

<?php } else if ($id == 2) { ?>

  <h3>Guests</h3>
  <img src="../image/sample/bunny3.jpg">

<?php } elseif ($id == 3) { ?>

  <h3>Sign Up</h3>
  <img src="../image/sample/bunny4.jpg" alt="">

<?php } ?>

<?php include("../include/footer.php"); ?>
