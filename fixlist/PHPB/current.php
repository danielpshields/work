<?php
  $title="Pre-Health Post-Bac Completion Program | UF College of Liberal Arts and Sciences";
  $page = "current";
  $image = $page;
  require_once("include/header.php");
  $table = "include/current/table";
?>
    <div class="shell" id="current">

    <h2>Current Students</h2>

    <h3>PHPB Advising</h3>
    <ul>
      <li><a href="advising.php">PHPB Advising Page</a></li>
    </ul>

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
            <span>2017 PHPB Cohort</span>
          </dt>
          <dd>
            <?php include("{$table}ClassOne.php"); ?><!-- 2017 cohort -->
            <h4>Group Dates:</h4>
            <h5>2017 PHPB Cohort Professional Development Group:</h5>
            <?php include("{$table}ClassOneDevelopment.php"); ?><!-- 2017 cohort development group -->
          </dd>
        </dl>

        <dl>

          <dt>
            <img src="image/arrow.jpg" class="arrow">
            <span>2018 PHPB Cohort</span>
          </dt>
          <dd>
            <?php include("{$table}ClassTwo.php"); ?><!-- 2018 cohort table schedule -->

            <h4>2018 PHPB Cohort Professional Development Group</h4>
            <?php include("{$table}ClassTwoDevelopment.php"); ?>

          </dd>

        </dl>

      </div><!-- shell -->
      <div class="clear"></div>


      <div id="resources">

        <img id="resourcesImage" src="image/current_resources.jpg" alt="">

        <div id="resourcesLinks">

          <h4>Resources:</h4>
          <ul>
            <li><a href="https://www.advising.ufl.edu/pre-health/" target="_blank">Academics</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/research/" target="_blank">Research</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/shadowing/" target="_blank">Shadowing</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/volunteer-resources/" target="_blank">Healthcare Experience</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/volunteer-resources/" target="_blank">Community Service (non-clinical)</a></li>
            <li><a href="https://www.advising.ufl.edu/docs/AAMCCoreCompetencies.pdf" target="_blank">Professional Competencies (PDF)</a></li>
          </ul>


          <h4>Additional Resources:</h4>
          <ul>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/campus-resources/" target="_blank">Campus Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/centralized-application-services/" target="_blank">Centralized Application Services</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/diversity-resources/" target="_blank">Diversity Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/financial-resources/" target="_blank">Financial Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/leadership-resources/" target="_blank">Leadership Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/letter-of-recommendation-resources/" target="_blank">Letter of Recommendation Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/professional-organizations/" target="_blank">Professional Organizations</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/research/" target="_blank">Research</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/shadowing/" target="_blank">Shadowing</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/summer-opportunities/" target="_blank">Summer Opportunities</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/test-preparation-resources/" target="_blank">Test Preparation Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/volunteer-resources/" target="_blank">Volunteer Resources</a></li>
          </ul>
        </div><!-- resources links -->
        <div class="clear">

        </div>

      </div><!-- resources  -->

<?php  require_once("include/footer.php");?>
