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
            <?php include("include/current/schedule_2017.php"); ?>
          </dd>
        </dl>
        <dl>
          <dt>
            <img src="image/arrow.jpg" class="arrow">
            <span>2018 Cohort Spring 2019 Schedule</span>
          </dt>
          <dd>
            <?php include("include/current/schedule_2018.php"); ?>
          </dd>
        </dl>

        <?php include("include/current/policiesAndConduct.php"); ?>

      </div><!-- shell -->
      <div class="clear"></div>

      <!-- overall container for bottom half -->
      <div id="additionalResources">

        <div id="graphicContainer">
          <p id="yourApplicationGraph"><b>The information bubbles below are links!</b></p>
          <div id="yourApplicationBubbleGraphic">
            <?php require_once("image/yourApplication.svg"); ?>
          </div>
        </div><!--graphic container -->

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
      </div><!-- additional resources -->


<?php require_once("include/footer.php");?>
