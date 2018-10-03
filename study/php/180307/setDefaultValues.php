<?php include("../include/header.php"); ?>
<h2>Set Default Values</h2>

  <?php
    if (isset($_POST["username"])) {
      $username = $_POST["username"];
    } else {
      $username = "";
    }
    if (isset($_POST["password"])) {
      $password = $_POST["password"];
    } else {
      $password = "";
    }
  ?>

  <?php
    // set default values using ternary operator
    //  boolean_test ? value_if_true : value if false

    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
  ?>

  <?php
    echo "{$username}: {$password}";
  ?>


<?php include("../include/footer.php"); ?>
