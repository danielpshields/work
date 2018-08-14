<?php
  $title="Pre-Health Post-baccalaureate Program (PHPB) | UF College of Liberal Arts and Sciences";
  $page = "index";
?>
    <?php require_once("include/header.php"); ?>

      <div class="page">

        <!-- <img src="images/header2.jpg" alt="College of Liberal Arts and Sciences Human Resources"> -->
        <img src="image/index_iii.jpg" alt="College of Liberal Arts and Sciences Human Resources">

          <h1>Pre-Health Post-Baccalaureate Program</h1>
          <p id="smallProgramSlug">(PHPB)</p>

          <div class="slug">
            <p><i>"Helping yourself is the first step to helping others."</i></p>
          </div>

          <div class="coreFeature">
            <h3><a href="admission.php">Prerequisites</a></h3>
            <p>Whether you have experience in sciences:</p>
            <ul>
              <li><b>From Scratch</b> for the science-taken</li>
              <li><b>Some Experience</b> for the science taken</li>
            </ul>
            <ul>
              <li>&gt; <a id="space" href="admission.php">Admission</a></li>
            </ul>
          </div>

          <div class="coreFeature">
            <h3><a href="courses.php">Duration</a></h3>
            <ul>
              <li>Two-Year Program</li>
              <li>Something, like a pie chart</li>
              <li>And finally Something</li>
            </ul>
            <ul>
              <li>&gt; <a href="courses.php">Courses</a></li>
            </ul>
          </div>

          <div class="coreFeature">
            <h3><a href="features.php">Instruction</a></h3>
            <p>The PHPB Tracks is a personalized experienced.</p>
            <ul>
              <li>class size</li>
              <li>instructor : student ratio</li>
              <li>something else</li>
            </ul>
            <ul>
              <li>&gt; <a href="features.php">Features</a></li>
            </ul>
          </div>

          <div class="coreFeature">
            <h3><a href="finances.php">Costs</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <ul>
              <li>&gt; <a href="finances.php">Financial Information</a></li>
            </ul>
          </div>

          <div class="apply">
            <button onclick="location.href='apply.php';" type="button" name="button">Apply!</button>
          </div>

          <h2>UF Pre-Health Post-Bac</h2>

          <p>The University of Florida's Pre-health Post-Baccalaureate Program (PHPB) offers dedicated and motivated students an opportunity to complete academic pre-requisite courses for admission to medical, dental, or veterinary school. PHPB is a rigorous, two year structured program.</p>
          <p>Courses are offered once per year. Students in PHPB complete the majority of courses in classes created just for PHPB students, experiencing the outstanding teaching faculty at the University of Florida. This is a comprehensive program offering non-science courses that assist you in developing academic skills, application skills, and professional competencies necessary for application to medical, dental, PA, or veterinary school.</p>
          <p>Other health professions are considered. However, for professions other than medicine, pre-requisite courses not included in our standard curriculum are not offered.</p>
          <p class="center italic">Fall admission only</p>

          <section>
            <p class="medium heavy">2019</p>
            <p id="applicationSlug"> Fall Application Cycle via <a href="https://postbaccas.liaisoncas.com/">PostBacCAS</a></p>
            <p class="tiny light italic marginTop">Opens August 15, 2018</p>
          </section>

          <h3>Tracks</h3>

          <p>The UF PHPB program offers two tracks to help you complete pre-requisite coursework. Each track requires full-time enrollment. The track you choose depends on your academic background. All tracks require a bachelor's degree for admission. For more information on each track, see the <a href="admission.php">Admission</a> and <a href="courses.php">Course information</a>.</p>

          <p>Students who completed science pre-requisites five or more years ago still have an opportunity for admission.  However all courses five or more years and/or with less than a B earned will be required to be repeated.</p>

          <div class="listAndInfoBox">
            <ul>
              <li>Career Changer Program</li>
            </ul>
            <p>For students who have not taken more than two science pre-requisite courses earning Bs or above.</p>
          </div>

          <div class="listAndInfoBox">
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
              <td>Pre-Requisite Sciences*<br> Completed</td>
              <td>2 or fewer</td>
              <td>1-3</td>
            </tr>
            <tr>
              <td>Pre-requisite sciences<br> Grades</td>
              <td>Bs or better</td>
              <td>Below B on any course</td>
            </tr>
            <tr>
              <td>Length of Program</td>
              <td>Five semesters</td>
              <td>Five + semesters</td>
            </tr>
            <tr>
              <td colspan="3" id="prereqSciencePadding" class="italic">* Pre-requisite Sciences refers to Calculus, Chemistry, Biology, and Physics</td>
            </tr>
          </table>

        <div id="questionButton" onclick="location.href='contact.php';">
          <!-- <h3>Have Questions?</h3>
          <h3>Want More Information?</h3> -->
          <h3>?</h3>
          <p><b>Still need help?</b></p>
          <p>We got you, Fam.</p>
        </div>

      </div>
    <?php require_once("include/sidebar.php"); ?>
    <?php require_once("include/footer.php"); ?>
  </body>
</html>
