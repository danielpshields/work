<?php
  require("../include/db.php");
  $root = "../";
  $page = "records";
  $pageName = "Records: Transition";
  require("{$root}include/header/header.php");
  $scriptName = $page;
  $query = "SELECT * FROM pace_transition ORDER BY id ASC";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
?>

    <h2><?php echo $pageName; ?></h2>

    <?php
    // rows
    while($row = mysqli_fetch_assoc($spitResults)) {
    $conditionsExist = true;
    // columns
    require("record_variables.php");
    ?>

        <div class="barrier">
          <dl>
            <dt>
              <div class="barrierHeader">
                <?php
                  if ($submitted == 0) {
                    $formUpdated = false;
                    $breakCreated = explode("|", $formCreated);
                    $monthDay     = $breakCreated[0];
                    $hourTime     = $breakCreated[1];
                  ?>
                  <p class="pending">pending</p>
                  <h3><?php echo $student_email; ?></h3>
                  <p class="timeCreated"><?php echo $monthDay; ?></p>
                <?php } else {
                    $formUpdated        = true;
                    $break_submitted    = explode("|", $formCreated);
                    $monthDay_submitted = $break_submitted[0];
                    $hourTime_submitted = $break_submitted[1];
                  ?>
                  <p class="submitted">submitted</p>
                  <h3><?php echo $student_email; ?></h3>
                  <p class="timeSubmitted"><?php echo $monthDay_submitted; ?></p>
                <?php } ?>

              </div><!-- barrier header -->
            </dt><!-- Barrier Header Dropdown -->
            <dd>
              <?php
              //UF Online Transition Path
              if (!empty($ufoMajor)) {  ?>
                <div class="ufoSubmission">
                  <p class="ufoMajor">Selected <i>UF Online</i> Transition</p>
                  <p><b><?php echo $ufoMajor; ?></b></p>
                </div>
                <!-- barrier header -->
              <?php } ?>

              <table class="transitionTable" id="conditionsPaceMajor">
                <thead>
                  <tr>
                    <th>PaCE Major</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo ucfirst($campusMajor); ?></td>
                  </tr>
                </tbody>
              </table>



              <?php
                //Stipulations / Conditions are initially set as "stips" to trigger the "no stipulations set"
                $stips = false;

                //start the submissions if exist
                if (!empty($course) || !empty($course2) || !empty($course3) || !empty($course4)) {
                $stips = true;
              ?>
              <table class="coursesTable">
                <thead>
                  <tr>
                    <th>Course</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($course)) { ?>
                  <tr>
                    <td><?php echo $course; ?></td>
                    <td><?php echo $grade; ?></td>
                  </tr>
                  <?php } if (!empty($course2)) { ?>
                  <tr>
                    <td><?php echo $course2; ?></td>
                    <td><?php echo $grade2; ?></td>
                  </tr>
                  <?php } ?>
                  <?php if (!empty($course3)) { ?>
                  <tr>
                    <td><?php echo $course3; ?></td>
                    <td><?php echo $grade3; ?></td>
                  </tr>
                  <?php } ?>
                  <?php if (!empty($course4)) { ?>
                  <tr>
                    <td><?php echo $course4; ?></td>
                    <td><?php echo $grade4; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <?php
                }
                if (!empty($gpaUF) || !empty($gpaMajor)) {
                $stips = true;
              ?>
              <table>
                <thead>
                  <tr>
                    <th colspan="2">GPAs</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($gpaUF)) { ?>
                  <tr>
                    <td>UF</td>
                    <td><?php echo $gpaUF; ?></td>
                  </tr>
                <?php } if (!empty($gpaMajor)) { ?>
                  <tr>
                    <td>Major</td>
                    <td><?php echo $gpaMajor; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            <?php } ?><!-- GPAs -->

            <?php
            //student response
            if (!empty($semester)) { ?>
                <table>
                  <thead class="filled">
                    <tr>
                      <th>Semester</th>
                      <th>Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $semester; ?></td>
                      <td><?php echo $phone; ?></td>
                    </tr>
                  </tbody>
                </table>
              <!-- </div> response container | commented because styling looked off, needs time. I wanted to set it apart -->

            <?php } ?><!-- student response -->


              <?php
                if (!empty($stipulation)) {
                    $stips = true;
              ?>

              <div class="writtenCondition">
                <div class="writtenConditionHeaderWrap">
                  <h3>Written Condition</h3>
                </div><!-- written condition header wrap -->
                <p>"<?php echo ucfirst($stipulation); ?>"</p>
              </div><!-- written condition -->
              <!-- written condition is the whole div -->

              <?php }
              // reads if the stips continued through the empty tests to see if stips was set to true
              if (!$stips) {
                echo "<p id=\"zeroStips\">zero conditions were set</p>";
              }
              ?>

              <?php
                if ($formUpdated) {
                  $break_submitted = explode("|", $formSubmitted);
                  $monthDay     = $break_submitted[0];
                  $hourTime     = $break_submitted[1];
                  ?>
                  <div class="formCreated">
                    <p>ticket submitted: <b><?php echo $monthDay . "</b> at <b>" . $hourTime; ?></i></b></p>
                  </div><!-- form created -->
              <?php } else { ?>
                <div class="formCreated">
                  <p>ticket is pending</p>
                </div><!-- form created -->
              <?php }?>
            </dd>
          </dl>
        </div><!-- master result Barrier -->

        <?php   if (empty($row)) { echo "empty row"; }   ?>
        <?php } ?><!-- end Grande while $row assoc -->
        <?php if (!$conditionsExist) { ?>

        <div class="inputShell">
          <h3 class="black">Records: Transition</h3>
          <p>No transition tickets have been created!</p>
          <ul>
            <li><b><a href="<?php echo $root; ?>ticket/transition.php">Make a transition ticket</a></b></li>
          </ul>
        </div>

      <?php } ?>

<?php
  include("{$root}include/footer.php");
  mysqli_close($connection);
?>
