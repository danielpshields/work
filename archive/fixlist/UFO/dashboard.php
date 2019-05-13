<?php
  $root = "";
  $page = "dashboard";
  $pageName = "CLAS UF Online | " . ucfirst($page);
  require("{$root}include/header.php");
  // credentialCheck();
?>

  <ul style="max-width: 40rem; margin: auto; margin-top: 2.81rem; line-height: 1.6; font-size: 1.3rem;">
    <li><a href="#">Pre-Health Disclaimer</a></li>
    <li><a href="#">Readmission Agreement</a></li>
    <li><a href="PaCE/records/transition.php"><b>PaCE Transition</b></a></li>
    <li><a href="petitions/index.php"><b>College Petition</b></a></li>
  </ul>

<?php
  require("{$root}include/footer.php");
  if (isset($_POST['exploratoryEmail'])) {
    mysqli_close($connection);
  }
?>
