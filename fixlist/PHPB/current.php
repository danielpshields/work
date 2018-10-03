<?php
  $title="Pre-Health Post-Bac Completion Program | UF College of Liberal Arts and Sciences";
  $page = "current";
  $image = $page;
  require_once("include/header.php");
  $table = "include/current/table";
?>
    <div class="shell">

    <h2>Current Students</h2>

    <h3><a href="advising.php">Advising</a></h3>

    <dl>
      <dt>Class &amp; Group Schedules</dt>
      <dd>
        <h4>GROUPS</h4>
        <ul>
          <li><b>Wellness Group</b></li>
          <li><b>Journal Club</b> Oct. 2, 9:30 a.m. to 10:30 a.m. @ 2022 Farrior Hall</li>
        </ul>
      </dd>
    </dl>

    <h3>CLASS &amp; TUTORING SCHEDULES</h3><!-- drop down -->
    <dl>
      <dt>2017 PHPB Cohort:</dt>
      <dd>
        <?php include("{$table}ClassOne.php"); ?><!-- 2017 cohort -->
        <h4>Group Dates:</h4>
        <h5>2017 PHPB Cohort Professional Development Group:</h5>
        <?php include("{$table}ClassOneDevelopment.php"); ?><!-- 2017 cohort development group -->
      </dd>
    </dl>

    <dl>

      <dt>2018 PHPB Cohort</dt>
      <dd>
        <?php include("{$table}ClassTwo.php"); ?><!-- 2018 cohort table schedule -->

        <h4>2018 PHPB Cohort Professional Development Group</h4>
        <?php include("{$table}ClassTwoDevelopment.php"); ?>

      </dd>

    </dl>

  </div><!-- shell -->
  <div class="clear"></div>

    <h3>RESOURCES</h3>
    <div id="resourcesContainer">
      <img id="resourcesImage" src="image/current_resources.jpg" alt="">
      <div id="resourcesList">
        <div class="resourceLinks">
          <h4>RESOURCES</h4>
          <ul>
            <li><a href="https://www.advising.ufl.edu/pre-health/" target="_blank">Academics</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/research/" target="_blank">Research</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/shadowing/" target="_blank">Shadowing</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/volunteer-resources/" target="_blank">Healthcare Experience</a></li>
            <li><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/volunteer-resources/" target="_blank">Community Service (non-clinical)</a></li>
            <li><a href="https://www.advising.ufl.edu/docs/AAMCCoreCompetencies.pdf" target="_blank">Professional Competencies (PDF)</a></li>
          </ul>
        </div><!-- resource links -->
        <div class="resourceLinks">
          <h4>ADDITIONAL RESOURCES:</h4>
          <ul>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/campus-resources/">Campus Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/centralized-application-services/">Centralized Application Services</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/diversity-resources/">Diversity Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/financial-resources/">Financial Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/leadership-resources/">Leadership Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/letter-of-recommendation-resources/">Letter of Recommendation Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/professional-organizations/">Professional Organizations</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/research/">Research</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/shadowing/">Shadowing</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/summer-opportunities/">Summer Opportunities</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/test-preparation-resources/">Test Preparation Resources</a></li>
            <li><a href="http://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/volunteer-resources/">Volunteer Resources</a></li>
          </ul>
        </div><!-- resource links -->
        <div class="clear"></div>
      </div><!-- resources list -->
      <div class="clear"></div>
    </div><!-- resources container -->

<?php  require_once("include/footer.php");?>
