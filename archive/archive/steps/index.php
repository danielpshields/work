<?php require_once("include/header.php"); ?>

  <h2>thisWeek</h2>
  <ul>
    <li><?php echo stepCount($steps180428); ?></li>
    <!-- <li><?php echo neededPerDay($weekGoal, $weekSix, 3); ?> needed per day</li> -->
    <!-- <li><?php echo $totalNeed; ?> steps left this week</li> -->
  </ul>

  <h2>Week No.</h2>
  <ol reversed>
    <li><?php echo $weekSix;   ?> steps</li>
    <li><?php echo $weekFive;  ?> steps</li>
    <li><?php echo $weekFour;  ?> steps</li>
    <li><?php echo $weekThree; ?> steps</li>
    <li><?php echo $weekTwo;   ?> steps</li>
    <li><?php echo $weekOne;   ?> steps</li>
    <!-- <li><?php echo ""; ?> steps</li> -->
  </ol>

  <h2>Ruler:</h2>
  <ul>
    <li>toWork: <?php echo $toWork; ?> steps @ <?php echo $mins_toWork; ?> mins x 2 = <?php echo $work = $toWork * 2; ?> steps</li>
    <li>lkLoop: <?php echo $lakeLoop; ?> steps @ <?php echo $mins_toLakeLoop; ?> mins  x 2 = <?php echo $lake = $lakeLoop * 2; ?> steps</li></li>
    <li>averag: <?php echo $averageDay = $work + $lake; ?> steps</li>
    <li>average <?php echo $perMinute; ?> steps per minute</li>
    <li>lunch : <?php echo $lunch; ?> mins</li>
  </ul>


  <h2>Shell</h2>
  <ul>
    <li><?php echo ($debt / 2.5) / 7; ?></li><!-- make up steps -->
    <li><?php echo (15824 + 12884 + 16957 + 17023 + 13825 + 3021 + 1378) / 7; ?></li>
  </ul>
<?php require_once("include/footer.php"); ?>
