<?php

  //distance
  $weekGoal = 80000;
  $day = 11500;
  $lakeLoop = 4335;
  $toWork = round((1908 + 2014 + 1897 + 1803 + 1786) / 5);

  //time
  $mins_toWork = round((18 + 16 + 16) / 3);
  $lunch = round(60 - ($mins_toWork * 2));
  $perMinute = round(/*1940/18*/1786/16);
  $mins_toLakeLoop = round(4335 / 112);

  //log
  $weekOne = 4242 + 1272 + 1759 + 2448 + 3526 + 24319 + 1106;
  $weekTwo = 2387 + 4103 + 14654 + 14007 + 13042 + 9253 + 3021;
  $weekThree = 12150 + 13986 + 15878 + 16001 + 13959 + 5125 + 10098;
  $steps180409 = 13934;
  $steps180410 = 17857;
  $steps180411 = 17813;
  $steps180412 = 16947;
  $steps180413 = 16052;
  $steps180414 = 9317;
  $steps180415 = 4156;
  $weekFour = $steps180409 + $steps180410 + $steps180411 + $steps180412 + $steps180413 + $steps180414 + $steps180415;

  $steps180416 = 15824;
  $steps180417 = 12884;
  $steps180418 = 16957;
  $steps180419 = 17023;
  $steps180420 = 13825;
  $steps180421 = 3021;
  $steps180422 = 1378;
  $weekFive = $steps180416 + $steps180417 + $steps180418 + $steps180419 + $steps180420 + $steps180421 + $steps180422;

  $steps180423 = 15033;
  $steps180424 = 10933;
  $steps180425 = 28392;
  $steps180426 = 25153;
  $steps180427 = 18287;
  $steps180428 = 9214;
  $steps180429 = 2354;
  $weekSix = $steps180423 + $steps180424 + $steps180425 + $steps180426 + $steps180427 + $steps180428 + $steps180429;

  $totalNeed = $weekGoal - $weekSix;

  $total = 400000;
  $totalSteps = $weekOne + $weekTwo + $weekThree + $weekFour;
  $debt = $total - $totalSteps;

  //crunch
  $leftToday = $day - $steps180410;
?>
