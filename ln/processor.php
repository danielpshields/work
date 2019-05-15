<?php

  include("include/db.php"); // DB connection

  if (isset($_POST['spent'])) {
    $spent = substr($_POST['spent'], 1);
    $write = "INSERT INTO account (credit) VALUES ('{$spent}')";
    $addAm = mysqli_query($connection, $write);
  }


?>
