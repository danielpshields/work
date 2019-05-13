<?php
  $path = "";
  $page = "roles";
  require_once("include/header.php");
  ?>

  <h2>People</h2>

    <ul>
      <li><a href="<?php echo $page; ?>/alex.php">Alex</a></li>
      <p><i>AAC Web Developer i</i></p>
      <li><a href="roles/dan.php">Dan</a></li>
      <li><a href="roles/joe.php">Joe</a></li>
      <li><a href="roles/katrina.php">katrina</a></li>
      <li><a href="roles/lou.php">Lou</a></li>
      <!-- <li><a href="roles/sara.php">Sara Mock</a></li> -->
      <li><a href="roles/shannon.php">Shannon</a></li>
      <li><a href="roles/tim.php">Tim</a></li>
    </ul>

    <h2>Roles</h2>
    <ul>
      <li>AAC staff reviewer</li>
      <li>Advisors</li>
      <li>Preview Team</li>
      <li>Fall Students</li>
      <li>Helpdesk</li>
    </ul>


<?php include_once("{$path}include/footer.php"); ?>
