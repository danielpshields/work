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
    <!--  <h3>Errors:</h3>
      <ul>
        <li>(https://history.ufl.edu/) Slidshow button z-index failure (LIVE mobile and desktop)</li>
        <li>(https://test.clas.ufl.edu/stat-dc/) justify-content: space-between; for two items</li>
        <li>nav li | individual heading items cant be isolated in highlights</li>
        <li>nav | no indication of current page</li>
        <li>clas-news | Content hidden</li>
      </ul>
      <ul>
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
        <li><b>redirect map needed</b> history-capitalism redirects to history</li>
        <li>English: , Humanties:Humanities-grants, Parent:Children vs. Parent:Parent is actually parent to parent</li>
        <ul>
          <li>"jonsTestSite" => "test.clas/users/jon"</li>
        </ul>
      </ul>
      <h3>Notes:</h3>
      <ul>
        <li>(songs) </li>
        <li>Physics: test-qtp has quantum theory project</li>
        <li>Physics: parent:parent with zero nav elements</li>
        <li>how do we check for outdated content? (/jst/) Fall 2018 course schedule</li>
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
        <li>History of Capitalism</li>
        <li>https://test.clas.ufl.edu/psych-wellness/</li>
        <ul>
          <li>there are six english sites</li>
        </ul>
        <li>english ".../ethics-public/" | "about us / contact" is on the far left in the nav</li>
      </ul>
      <h3>Favorite URL:</h3>
      <ul>
        <li>https://test.clas.ufl.edu/advising/advising/advising-services/</li>
      </ul>-->
      <!-- <h3>Disregard:</h3>
      <ul>
        <li>https://test.clas.ufl.edu/jonsTestSite/</li>
      </ul>
      <h3>Parent:Parent</h3>
      <ul>
        <li>English (6)</li>
        <li>Physics (6)</li>
      </ul>
    </div><!- - container errors -->

    <div id="container_lists">
      <div class="">
        <h2>Test Sites</h2>
        <table>
          <tr>
            <th colspan="2">Stats</th>
          </tr>
          <tr>
            <td>Sites</td>
            <td><?php echo $siteCount_test; ?></td>
          </tr>
          <!-- <tr>
            <td>null</td>
            <td><?php echo $countSites_countNull_test; ?></td>
          </tr> -->
          <tr>
            <td>navigation</td>
            <td><?php echo $arraysAve_test; ?></td>
          </tr>
        </table>

        <ul>
          <?php
          foreach ($sites_clasTheme_test as $key => $value) {
            $URL_testSite = "https://test.clas.ufl.edu" . $key;
            echo "<li><a href=\"{$URL_testSite}\" target=\"_blank\">{$key}</a></li>";
          }
         ?>
       </ul>
       </div>
      <div class="">
        <h2>Production Sites <span class="siteCount"><?php echo $count_prod; ?></a></h2>
        <?php
        echo "<ul>";
        foreach ($sites_clasTheme_prod as $key => $value) {
          $URL_prod = "https://clas.ufl.edu" . $key;
          echo "<li><a href=\"{$URL_prod}\" target=\"_blank\">{$key}</a></li>";
        }
        echo "</ul>";
         ?>
      </div>

      <div class="">
        <h3>diff</h3>
        <h3>common</h3>



      </div>

    </div><!-- container lists -->

    <footer><p>end</p></footer>
  </body>
</html>
