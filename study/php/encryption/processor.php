<?php
  // require("../include/db.php");
  // if (isset($_GET['email'])) {
  //
  //   $readEmails = "SELECT * FROM alex";
  //   $readQuery = mysqli_query($connection, $readEmails);
  //
  //   while ($row = mysqli_fetch_assoc($readQuery)) {
  //     $name  = $row['name'];
  //     $email = $row['email'];
  //     require("pending/shell_email.php");
  //   }
  //
  //
  // }

  echo "<pre>";
  print_r($_GET);
  echo "</pre>";

    foreach ($_GET as $key => $value) {
      echo base64_decode($key) . " " . base64_decode($value);
    }

?>
