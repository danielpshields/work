<?php
  $root = "";
  $page = "dashboard";
  $pageName = "CLAS UF Online | " . ucfirst($page);
  require("{$root}include/header.php");
  credentialCheck();
?>

  <h3>Forms</h3>

  <ul>
    <li><a href="#">Pre-Health Disclaimer</a></li>
    <li><a href="#">Readmission Agreement</a></li>
    <li><a href="#">PaCE Transition</a></li>
    <li><a href="#">College Petition</a></li>
  </ul>

<?php
  require("{$root}include/footer.php");
  if (isset($_POST['exploratoryEmail'])) {
    mysqli_close($connection);
  }
?>
