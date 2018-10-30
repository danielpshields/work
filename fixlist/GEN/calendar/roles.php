<?php
  $path = "";
  $page = "roles";
  require_once("include/header.php");
  ?>

  <h2>People</h2>

    <ul>
      <li><a href="<?php echo $page; ?>/alex.php">Alex</a></li>
      <p><i>AAC Web Developer i</i></p>
      <li>Shannon</li>
      <ul>
        <li>sends <a href="">Joe's News and Notes email</a></li>
      </ul>
      <li>Tim</li>
      <li>Dan</li>
      <li>Joe</li>
      <li>Trina</li>
      <li>Lou</li>
      <li>Sara Mock</li>
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
