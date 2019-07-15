<?php
  $title = "CLAS Map";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <nav>
      <ul>
        <li>Achilles</li>
        <li class="red">Deans</li>
        <li class="green">Advising</li>
        <li class="orange">Publications</li>
        <li class="blue">clas</li>
        <li class="black">outside</li>
      </ul>
    </nav>

    <h1>CLAS Media Services Style Guide</h1>

      <?php include("include/header.php"); ?>

    <hr>

      <?php include("include/nav.php"); ?>

    <hr>

      <?php include("include/feature/top-media.php"); ?>

    <hr>

      <?php include("include/feature/home-featured-stories.php"); ?>

    <hr>

      <?php include("include/feature/bigNumbers.php"); ?>

      <!--
        $bigNumbers = array(
          "773 FACULTY"                             => "",
          "43 MAJORS"                               => "majors",
          "11 NATIONAL ACADEMY OF SCIENCES MEMBERS" => "profiles",
          "11,000 UNDERGRADUATES"                   => "",
          "3,500 DEGREES AWARDED ANNUALLY"          => "",
          "1,500 GRADUATES"                         => ""
        );
      -->

    <hr>

      <?php include("include/footer.php"); ?>
  </body>
</html>
