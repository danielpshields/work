<?php

function stepCount($amount) {
  global $day;
  $needed = $day - $amount;
  if ($amount >= $day) {
    echo $amount . " <span class=\"green\"><b>steps today</b></span>";
  } else {
    echo $amount . ", <span class=\"darkBlue\"><b>need</b></span> {$needed} steps";
  }
}

function neededPerDay($weekGoal, $stepTotal, $daysLeft) {
  return round(($weekGoal - $stepTotal) / $daysLeft);
}

?>
