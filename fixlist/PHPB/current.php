<?php
  $title="Pre-Health Post-Bac Completion Program | UF College of Liberal Arts and Sciences";
  $page = "current";
  $image = $page;
  require_once("include/header.php");
  $table = "include/current/table";
?>
      <div class="shell" id="current">
      <h2>Current Students</h2>
      <h3><a href="advising.php">PHPB Advising Page</a></h3>

      <h3>Group &amp; Club Schedules</h3>
        <table>
          <thead>
            <tr>
              <th>Group</th>
              <th>next meeting</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Wellness Group</td>
              <td>tbd</td>
            </tr>
              <td>Journal Club</td>
              <td>tbd</td>
            </tr>
          </tbody>
        </table>
        <h3>Class &amp; Tutoring Schedules</h3><!-- drop down -->
        <dl id="noBottomBorder">
          <dt>
            <img src="image/arrow.jpg" class="arrow">
            <span>2017 Cohort Spring 2019 Schedule</span>
          </dt>
          <dd>

            <table class="mobileTable">
              <thead>
                <tr>
                  <th>Period: 6</th>
                  <th><i>12:50 p.m. to 1:40 p.m.</i></th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>(Monday)</td>
                  <td>BCH4024</td>
                </tr>
                <tr>
                  <td>(Tuesday)</td>
                  <td>BCH4024</td>
                </tr>
                <tr>
                  <td>(Wednesday)</td>
                  <td>BCH4024</td>
                </tr>
                <tr>
                  <td>(Thursday)</td>
                  <td>IDS4930</td>
                </tr>
                <tr>
                  <td>(Friday)</td>
                  <td>BCH4024</td>
                </tr>
              </tbody>
            </table><!-- mobileTable -->

            <table class="mobileTable">
              <thead>
                <tr>
                  <th>Period: 7</th>
                  <th>1:55 a.m. to 2:45 p.m.</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>(Thursday)</td>
                  <td>IDS4930</td>
                </tr>
              </tbody>
            </table>

            <?php include("{$table}ClassOne_desktop.php"); ?><!-- 2017 cohort -->
            <h4>Group Dates:</h4>
            <h5>2017 PHPB Cohort Professional Development Group:</h5>
            <?php include("{$table}ClassOneDevelopment.php"); ?><!-- 2017 cohort development group -->
          </dd>
        </dl>
        <dl>
          <dt>
            <img src="image/arrow.jpg" class="arrow">
            <span>2018 Cohort Spring 2019 Schedule</span>
          </dt>
          <dd>
            <?php include("{$table}ClassTwo.php"); ?><!-- 2018 cohort table schedule -->
            <h4>2018 PHPB Cohort Professional Development Group</h4>
            <?php include("{$table}ClassTwoDevelopment.php"); ?>
          </dd>
        </dl>
        <div id="yourApplication"><?php require_once("image/yourApplication.svg"); ?></div>
        <p id="yourApplicationGraph">The information bubbles above are links!</p>

        <div id="resources">

          <div class="resourceLinks">
            <h4>Additional Resources:</h4>
            <ul>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/campus-resources/" target="_blank">Campus Resources</a></li>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/centralized-application-services/" target="_blank">Centralized Application Services</a></li>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/diversity-resources/" target="_blank">Diversity Resources</a></li>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/financial-resources/" target="_blank">Financial Resources</a></li>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/leadership-resources/" target="_blank">Leadership Resources</a></li>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/letter-of-recommendation-resources/" target="_blank">Letter of Recommendation Resources</a></li>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/professional-organizations/" target="_blank">Professional Organizations</a></li>

              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/summer-opportunities/" target="_blank">Summer Opportunities</a></li>
              <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/test-preparation-resources/" target="_blank">Test Preparation Resources</a></li>

            </ul>
          </div><!-- resource links -->
        </div><!-- resources -->
      </div><!-- shell -->
      <div class="clear"></div>








<?php require_once("include/footer.php");?>
