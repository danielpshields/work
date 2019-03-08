<?php
  require("db.php");


  if (isset($_POST['submit'])) {
    $item = $_POST['item'];
    $query = "INSERT INTO resubmission (item) VALUES ('{$item}')";
    $write = mysqli_query($connection, $query);
    header("Location: index.php");
    exit;
  }

?>
