<?php
  require("../include/db.php");
  $root = "../";
  $page     = "layout";
  $style    = "record";
  $dataPage = "all";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  $scriptName = "majors";
  $query = "SELECT * FROM pace_transition ORDER BY formCreated DESC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>

  <div id="page_container">
    <div id="content_container">

      <h2>Search</h2>

      <form action="ldap.php" method="post">
        <input type="text" name="searchFor" value="">
        <input type="submit" name="submit" value="submit">
      </form>



    </div><!-- tickets container -->
    <?php include("{$root}records/sortNav.php"); ?>
  </div><!-- records container -->



<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
