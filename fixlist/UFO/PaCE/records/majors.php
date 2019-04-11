<?php
  require("../include/db.php");
  $root = "../";
  $page = "layout";
  $style = "record";
  $dataPage = "all";
  $pageName = "Records: Transition";
  $style = "majors";
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  $scriptName = $page;
  $scriptName = "majors";
  $query = "SELECT * FROM pace_transition ORDER BY formCreated DESC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>
  <?php
    include("{$root}records/majors/index.php");
    $major = $_GET['major'];
    $count = $_GET['id'];

    foreach ($allMajors as $key => $value) {
      if ($major == $key) {
        $major = $value;
      }
    }

  ?>

  <div id="page_container">
    <div id="content_container">
      <h2 style="margin-bottom: 1.81rem;">PaCE Transition Major<?php if (!$_GET) { echo "s";} else { $get = true; echo ": <b>" . ucfirst($major) . "</b>"; } ?></h2>
      <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
      <script src="<?php echo $root; ?>scripts/highcharts.js"></script>

      <?php if (!$get) { ?>
        <div id="allMajors" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
        <script type="text/javascript" src="<?php echo $root; ?>scripts/allMajors.js"></script>
      <?php } else { ?>
        <?php $percentage = "hello!"; ?>
        <script type="text/javascript">
          var count = <?php echo $count; ?>;
          var major = <?php echo json_encode($major); ?>;
        </script>
        <div id="majorChart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
        <script type="text/javascript" src="<?php echo $root; ?>scripts/majorChart.js"></script>
        <p id="majorSummaryGraph"><span><?php echo $count; ?></span> <b><?php echo $major; ?></b> majors</p>

        <?php
        $allMajors = array(
            "africanAmericanStudies" => "African American Studies",
            "anthropology"           => "Anthropology",
            "computerScience"        => "Computer Science",
            "english"                => "English",
            "geography"              => "Geography",
            "geology"                => "Geology",
            "history"                => "History",
            "linguistics"            => "Linguistics",
            "mathematics"            => "Mathematics",
            "philosophy"             => "Philosophy",
            "religion"               => "Religion",
            "sociology"              => "Sociology",
            "spanish"                => "Spanish",
            "statistics"             => "Statistics",
            "sustainabilityStudies"  => "Sustainability Studies",
            "womensStudies"          => "Women's Studies"
          );
          foreach ($allMajors as $key => $value) {
            if ($major == $value) {
              $major = $key;
            }
          }
        $getMajors = "SELECT * FROM pace_transition WHERE paceMajor = '{$major}' ORDER BY name ASC";
        $majors    = mysqli_query($connection, $getMajors);
        if (!$majors) { die("majors query failed"); } ?>

        <?php if (mysqli_num_rows($majors)) { ?>
        <div id="stipulation_table">

          <table>
            <tr>
              <th>Name</th>
              <th>Gatorlink</th>
              <th>UFID</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($majors)) { ?>
            <tr>
              <?php
                $id    = $row['studentID'];
                $email = $row['email'];
              ?>
              <td><a href="<?php echo $root . 'records/record.php?getFromMajors=' . $id . '&email=' . $email; ?>"><?php echo $row['name']; ?></td>
              <td><a href="mailto:<?php echo $row['email']; ?>"><?php echo truncation($row['email']); ?></td>
              <td><?php echo $row['studentID']; ?></td>
            </tr>
            <?php } ?>
          </table>

        </div><!-- stipulation table -->

      <?php } ?>
      <?php } ?>

    </div><!-- tickets Container -->
    <?php include("{$root}records/sortNav.php"); ?>
  </div><!-- records Container -->

<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
