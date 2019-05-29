<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Emily | Inventory</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <h1>Emily | Inventory</h1>
    <p><a href="https://github.com/ufclas/UF-CLAS-DEPT" target="_blank">https://github.com/ufclas/UF-CLAS-DEPT</a></p>
    <?php
      include("siteList.php");
    ?>
    <div id="container_about_errors">
      <h3>Errors:</h3>
      <ul>
        <li>(https://history.ufl.edu/) Slidshow button z-index failure (LIVE mobile and desktop)</li>
        <li>nav li | unclickable heading</li>
        <ul>
          <li>works if there's no dropdown items</li>
          <li>potential hack: duplicate the name</li>
        </ul>
        <li>nav li |:hover drop down stays down after click</li>
        <ul>
          <li>can overlap because of this (CES)</li>
        </ul>
        <li>nav li | cursor: pointer (wasn't able to duplicate this)</li>
        <li>nav li | y-overflow: scroll</li>
        <li>nav li (mobile) | y-overflow: scroll (becomes a double scroll bar)</li>
        <li>nav li | individual heading items cant be isolated in highlights</li>
        <li>nav | no indication of current page</li>
        <li>clas-news | Content hidden</li>
        <li><b>redirect map needed</b> history-capitalism redirects to history</li>
      </ul>
      <h3>Notes:</h3>
      <ul>
        <li>Do nav lis have to drop down? (clas-news)</li>
        <li>limit dropdown items</li>
        <li>sub-sub-menus</li>
        <li>"CLASSC FAQ" dropdowns don't have carrots whereas random links do</li>
        <li>no: "content forthcoming", "perhaps"</li>
        <li>needs to be a rule about emails: acatalano2@ufl.edu | <a href="#">Alex Catalano</a></li>
        <li>
Deprecated: Function create_function() is deprecated in /web/test/wp-content/plugins/Custom-KSES-master/custom-kses.php on line 34</li>
      </ul>
      <h3>Notable Sites:</h3>
      <ul>
        <li>English: test/prod</li>
        <ul>
          <li>there are six english sites</li>
        </ul>
        <li>english ".../ethics-public/" | "about us / contact" is on the far left in the nav</li>
      </ul>
      <h3>Favorite URL:</h3>
      <li>https://test.clas.ufl.edu/advising/advising/advising-services/</li>
    </div>

    <div id="container_lists">
      <div class="">
        <h2>Test Sites: <span class="siteCount">(<?php echo $i; ?>)</span></h2>
        <?php
        echo "<ul>";
        foreach ($sites_clasTheme_test as $key => $value) {
          $URL_testSite = "https://test.clas.ufl.edu" . $value;
          echo "<li><a href=\"{$URL_testSite}\" target=\"_blank\">{$key}</a> ({$value})</li>";
        }
        echo "</ul>";
         ?>
       </div>
      <div class="">
        <h2>Production Sites:</h2>
        <?php
        echo "<ul>";
        foreach ($sites_clasTheme_prod as $key) {
          $URL_prod = "https://clas.ufl.edu" . $key;
          echo "<li><a href=\"{$URL_prod}\" target=\"_blank\">{$key}</a></li>";
        }
        echo "</ul>";
         ?>
      </div>
    </div><!-- container lists -->

    <footer><p>end</p></footer>
  </body>
</html>
