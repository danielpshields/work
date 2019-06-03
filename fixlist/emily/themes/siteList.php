<?php

$sites_clasTheme_test = array(
  "/advising/"               => 8,
  "/biology/"                => 6,
  "/biology-test/"           => 0,
  "/ces/"                    => 6,
  "/clas-news/"              => 9,
  "/classc/"                 => 6,
  "/commsTemplateTest/"      => 0,
  "/communicationstemplate/" => 0,
  "/electionscience/"        => 5,
  "/english/"                => 5,
  "/english-cclc/"           => 7,
  "/english-cw/"             => 4,
  "/english-fms/"            => 4,
  "/english-imagetext/"      => 0,
  "/english-ipsa/"           => 4,
  "/ethics-public/"          => 6,
  "/franceflorida/"          => 4,
  "/geology/"                => 6,
  "/history/"                => 7,
  "/history-capitalism/"     => 0,
  "/humanities/"             => 6,
  "/humanities-grants/"      => 5,
  "/jonsTestSite/"           => 0,
  "/jst/"                    => 6,
  "/languages/"              => 4,
  "/linguistics/"            => 7,
  "/math/"                   => 6,
  "/mathtest/"               => 0,
  "/philosophy/"             => 6,
  "/phys-ccms/"              => 0,
  "/phys-cmt/"               => 5,
  "/physics-het/"            => 0,
  "/physics-ift/"            => 0,
  "/physics-qtp/"            => 0,
  "/phys-ihepa/"             => 6,
  "/polisci/"                => 7,
  "/psych-wellness/"         => 4,
  "/sanibel-symposium/"      => 0,
  "/songs/"                  => 0,
  "/spanport/"               => 7,
  "/spohp-ogus/"             => 6,
  "/stat-dc/"                => 2,
  "/stat-fass/"              => 4,
  "/sustainability/"         => 5,
  "/unittest/"               => 0,
  "/writing/"                => 5
);
  $siteCount_test = 0;
  $count_navLis_test = array();
  foreach ($sites_clasTheme_test as $key => $value) {
    //math for total number of Sites
    $siteCount_test++;

    //math for getting average
    if ($value > 0) {
      $count_navLis_test[] = $value;
    }
  }

  //removing null sites from the total count
  $countSites_removeNull_test = array(
    "https://test.clas.ufl.edu/commsTemplateTest/",
    "https://test.clas.ufl.edu/jonsTestSite/",
    "https://test.clas.ufl.edu/communicationstemplate/",
    "https://test.clas.ufl.edu/unittest/"
  );


  // count NULL test sites
  $countSites_countNull_test = count($countSites_removeNull_test);
  $siteCount_test = $siteCount_test - $countSites_countNull_test;
  // loop through just the numbers over zero in list
  $count = 0;
  foreach ($count_navLis_test as $key) {
    $count++;
  }

  //Create variable: Average
  $arraysSum_test = array_sum($count_navLis_test);
  $arraysAve_test = round(($arraysSum_test / $count), 2);


// production
// production
// production
  $sites_clasTheme_prod = array(
    "/aiis/"                       => 0,
    "/astronomy/"                  => 0,
    "/augment/"                    => 0,
    "/biology-fraser/"             => 0,
    "/clas-advancement/"           => 0,
    "/clas-comms/"                 => 0,
    "/clascomtemplate/"            => 0,
    "/clas-dean/"                  => 0,
    "/clas-dsc/"                   => 0,
    "/clas-PHPB/"                  => 0,
    "/clas-recognition-ceremony/"  => 0,
    "/clas-researchoffice/"        => 0,
    "/classc/"                     => 0,
    "/classics-garden-conference/" => 0,
    "/collegechampions/" => 0,
    "/economics/" => 0,
    "/electionscience/" => 0,
    "/english/" => 0,
    "/english-comics/" => 0,
    "/english-cw/" => 0,
    "/english-film/" => 0,
    "/english-imagetext/" => 0,
    "/english-ipsa/" => 0,
    "/EnglishLanguageInstitute/" => 0,
    "/geology/" => 0,
    "/globalislam/" => 0,
    "/history/" => 0,
    "/history-capitalism/" => 0,
    "/humanities/" => 0,
    "/humanities-ethics-in-the-public-sphere/" => 0,
    "/humanities-grants/" => 0,
    "/jewish-studies/" => 0,
    "/languagestudio/" => 0,
    "/math/" => 0,
    "/math-narg/" => 0,
    "/mediaservices/" => 0,
    "/phil-aiethics/" => 0,
    "/physics-efrc/" => 0,
    "/physics-scinews/" => 0,
    "/polisci/" => 0,
    "/psych-sourcesofstrength/" => 0,
    "/soccrim/" => 0,
    "/songs/" => 0,
    "/spanishportuguese/" => 0,
    "/spohp/" => 0,
    "/spohp-ogus/" => 0,
    "/Stat-Club/" => 0,
    "/stat-fass/" => 0,
    "/sustainability/" => 0,
    "/ums/" => 0,
    "/vrsocialgood/" => 0,
    "/writing/" => 0
  );

  $count_prod = 0;
  foreach ($sites_clasTheme_prod as $key) {
    $count_prod++;
  }

?>
