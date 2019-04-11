<?php
//UF Online Transition Path
if (!empty($ufoMajor)) {  ?>
  <table>
    <thead>
      <tr>
        <th class="blueTableHeader">UF Online Major</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $ufoMajor; ?></td>
      </tr>
    </tbody>
  </table>


  <!-- barrier header -->
<?php } else { ?>
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
    <thead class="phoneTableHeading">
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
<?php } ?><!-- else for if student selects UF Online -->


<?php
  if (!empty($writtenCondition)) {
      $stips = true;
?>

<div class="writtenCondition">
  <div class="writtenConditionHeaderWrap">
    <h3>Written Condition</h3>
  </div><!-- written condition header wrap -->
  <p>"<?php echo ucfirst($writtenCondition); ?>"</p>
</div><!-- written condition -->
<!-- written condition is the whole div -->

<?php }
// reads if the stips continued through the empty tests to see if stips was set to true
if (!$stips) {
  echo "<p id=\"zeroStips\">zero conditions were set</p>";
}
?>
