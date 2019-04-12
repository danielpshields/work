<?php
  require("../include/db.php");
  $root = "../";
  $page     = "layout";
  $style    = "record";
  $dataPage = "all";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  noCanStay();
  // why are there two script names?
  $scriptName = "majors";
  include("{$root}include/credentials.php");
  // $scriptName = $page;
  $query = "SELECT * FROM pace_transition ORDER BY formCreated DESC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>

  <div id="page_container">
    <div id="content_container">

      <?php include("{$root}records/data/index.php"); ?>
      <h2>All Records <span class="tinyNumberSlug">(<?php echo $sent; ?>)</span></h2>


      <?php
      // for advisor to have a statement to copy after making new ticket
      $getmajor = $_GET['major'];
      $majorList = array (
         "africanAmericanStudies" => "African American Studies",
          "computerScience"       => "Computer Science",
          "sustainabilityStudies" => "Sustainability Studies",
          "womensStudies"         => "Women's Studies"
       );
       foreach ($majorList as $key => $value) {
         if ($getmajor == $key) {
           $getmajor = $value;
         }
       }
       ?>

       <?php if ($getmajor) { ?>
         <p id="copyText">Transition eligible in <?php echo ucfirst($getmajor);  ?> eot 191, <?php echo $_GET['condition']; ?>, <?php echo $_GET['gpaUF']; ?> UF/<?php echo $_GET['gpaMajor']; ?>ppGPA, em'd form.</p>
       <?php } ?>


       <?php require("{$root}records/loop_db.php"); ?>

          <?php if (!$conditionsExist) { ?>
          <div class="inputShell">
            <h3 class="black">Records: Transition</h3>
            <p>No transition tickets have been created!</p>
            <ul>
              <li><b><a href="<?php echo $root; ?>ticket/transition.php">Make a transition ticket</a></b></li>
            </ul>
          </div>
        <?php } ?>

      </div><!-- tickets Container -->

      <?php include("{$root}records/sortNav.php"); ?>

    </div><!-- records Container -->




<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
