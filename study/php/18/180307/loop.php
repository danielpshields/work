<?php include("../include/header.php"); ?>
<h2>Loop</h2>


  <?php

  $variable = array("folder", "wheat", "grass");

  foreach ($variable as $key => $value) {
    echo $value;
  }


  ?>



<?php include("../include/nav.php"); include("../include/footer.php"); ?>
