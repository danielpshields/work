<?php
  $root = "../../";
  require("{$root}include/db.php");
  $page = "layout";
  $style = "record";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $scriptName = "majors";
  $query = "SELECT * FROM pace_transition WHERE submitted = 1 || submitted = 3 ORDER BY formSubmitted DESC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>


  <div id="page_container">
    <div id="content_container">
      <h2>Submitted Tickets</h2>
      <?php if (!mysqli_num_rows($spitResults)) { ?>
        <div class="inputShell">
            <h3 class="black">Submitted Tickets</h3>
            <p class="bigNumber">0</p>
            <p>Zero tickets are currently submitted</p>
            <ul>
              <li><b><a href="mailto:acatalano2@ufl.edu?subject=Yo, Let's make that email function&body=Yo it's time to make the email timer reminder email function.">Send a reminder email?</a></b></li>
            </ul>
            <p><i>add records</i></p>
          </div>
      <?php
      } else { ?>
      <?php require("{$root}records/loop_db.php"); ?>
    <?php } ?>
    </div><!-- tickets Container -->

    <?php include("{$root}records/sortNav.php"); ?>


  </div><!-- records Container -->


<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
