<?php
  require("db.php");


  if (isset($_POST['submit'])) {
    $item = $_POST['item'];
    $query = "INSERT INTO resubmission (item) VALUES ('{$item}')";
    $write = mysqli_query($connection, $query);
    header("Location: index.php");
    exit;
  }

  if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $deleteItem  = "DELETE FROM resubmission WHERE id = ";
    $deleteItem .= $id;
    $delete = mysqli_query($connection, $deleteItem);
    header("Location: index.php");
    exit;
  }

?>
