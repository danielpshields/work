<?php
  $title="Pre-Health Post-baccalaureate Program (PHPB) | UF College of Liberal Arts and Sciences";
  $page = "index";
?>
    <?php require_once("includes/header.php"); ?>

      <div id="content">

          <img src="images/header2.jpg" alt="College of Liberal Arts and Sciences Human Resources">

          <h1>Pre-Health Post-Baccalaureate Program <span class="small">(PHPB)</span></h1>

          <p class="slug">"<i>Helping yourself is the first step in helping others.</i>"</p>

          <div class="highlight">
            <h3><a href="admission.php">Prerequisites</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <ul>
              <li><a href="admission.php">> Admission</a></li>
            </ul>
          </div>
          <div class="highlight">
            <h3>Instruction</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="highlight">
            <h3>Duration</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="highlight">
            <h3>Costs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <div class="apply">
            <button onclick="location.href='apply.php';" type="button" name="button">Apply!</button>
          </div>

          <h2>UF Pre-Health PostBac</h2>

          <p>The University of Florida's Pre-health Post-Baccalaureate Program (PHPB) offers dedicated and motivated students an opportunity to complete academic pre-requisite courses for admission to medical, dental, or veterinary school. PHPB is a rigorous, two year structured program.</p>
          <p>Courses are offered once per year. Students in PHPB complete the majority of courses in classes created just for PHPB students, experiencing the outstanding teaching faculty at the University of Florida. This is a comprehensive program offering non-science courses that assist you in developing academic skills, application skills, and professional competencies necessary for application to medical, dental, PA, or veterinary school.</p>
          <p>Other health professions are considered. However, for professions other than medicine, pre-requisite courses not included in our standard curriculum are not offered.</p>
          <p class="center">Fall admission only</p>

          <section>
            <p class="medium">2019</p>
            <p id="applicationSlug"> Fall Application Cycle via <a href="https://postbaccas.liaisoncas.com/">PostBacCAS</a></p>
            <p class="tiny light italic marginTop">Opens August 15, 2018</p>
          </section>

          <h3>Tracks</h3>

          <p>The UF PHPB program offers two tracks to help you complete pre-requisite coursework. Each track requires full-time enrollment. The track you choose depends on your academic background. All tracks require a bachelor's degree for admission. For more information on each track, see the <a href="admission.php">Admission</a> and <a href="courses.php">Course information</a>.</p>

          <p>Students who completed science pre-requisites five or more years ago still have an opportunity for admission.  However all courses five or more years and/or with less than a B earned will be required to be repeated.</p>

          <div class="trackHighlight">
            <ul>
              <li>Career Changer Program</li>
            </ul>
            <p>For students who have not taken more than two science pre-requisite courses earning Bs or above.</p>
          </div>

          <div class="trackHighlight">
            <ul>
              <li>ReStart Program</li>
            </ul>
            <p>For students who took three or fewer science pre-requisite courses early in undergrad and earned less than a B without further attempts in science for two or more years.</p>
          </div>

          <h3>Compare Tracks</h3>

          <p>Be sure to read the full eligibility requirements before applying to the program. Please contact us if you have any question on which track best suits your needs.</p>

          <table id="trackTable" class="center">
            <tr>
              <th class="italic normalWeight">Requirement</th>
              <th>Career Changer</th>
              <th>ReStart</th>
            </tr>
            <tr>
              <td>Completed Pre-Requisite Sciences*</td>
              <td>2 or fewer</td>
              <td>1-3</td>
            </tr>
            <tr>
              <td>Grades in pre-requisite sciences already completed</td>
              <td>Bs or better</td>
              <td>Below B on any course</td>
            </tr>
            <tr>
              <td>Length of Program</td>
              <td>Five semesters</td>
              <td>Five + semesters</td>
            </tr>
            <tr>
              <td colspan="3" class="italic">* Pre-requisite Sciences refers to Calculus, Chemistry, Biology, and Physics</td>
            </tr>
          </table>

        <button id="questionButton" onclick="location.href='contact.php';">
          <h3>Have Questions?</h3>
          <h3>Want More Information?</h3>
        </button>

      </div>
    <?php require_once("includes/sidebar.php"); ?>
    <?php require_once("includes/footer.php"); ?>
  </body>
</html>
