<?php include("../include/header.php"); ?>
<h2>Display Form</h2>

  <?php

    if (isset($_POST["submit"])) {
      echo "form submitted<br><br>";
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

      $username = isset($_POST['username']) ? $_POST['username'] : "";
      $password = isset($_POST['password']) ? $_POST['password'] : "";

      echo "Username: {$username} <br> Password: {$password}";


    } else {
      $username = "guest";
      $password = "";
    }

    echo "{$username}: {$password}";
  ?>

  <ul>
    <li><a href="form.php">back</a></li>
  </ul>

<?php include("../include/footer.php"); ?>
