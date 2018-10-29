<?php
  $whereTo = "thankyou.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CLAS UF Online Screen</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/screen.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
    </head>
    <body>
        <div id="content">
            <h1>UF Online CLAS Screen</h1>
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="<?php echo $whereTo; ?>" method="post">
                        <fieldset class="step">
                            <legend>Health Professions Disclosure</legend>
                            <p>UF Online Majors in the College of Liberal Arts and Sciences <b>were not</b> designed to accommodate students interested in pursuing a career in health profession such as: pre-med, pre-dent, pre-vet, PA, Pharmacy.</p>
                            <p>It is <b>not advisable</b> for CLAS UFO students to complete pre-professional courses through UF Online or as a transient student; UF Online does not offer all of these courses, and professional schools may not accept these courses, or may view them with diminished competitiveness.</p>
                            <p>Changing to UF Online in CLAS would result in being unable to pursue pre-professional health tracks</p>
                            <p>
                                <label for="checkone">I acknowledge this:</label>
                                <input id="password" name="checkone" type="checkbox" />
                                <button type="button" name="button">I acknowledge this</button>
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Expectation to Remain in UF Online</legend>
                            <p>UF Online students are expected to graduate through UF Online.</p>
                            <p>>Admission to UF Online prevents taking any <b>residential</b> courses at the University of Florida or switching back to the UF residential program.</p>
                            <p>>If you are interested in taking one semester of online courses, then returning to campus, changing to UF Online is not the correct option for you. Please discuss other options with your academic advisor.</p>

                            <p>
                                <button class="orange" type="button" name="button">I acknowledge this</button>
                                <input id="" name="checktwo" type="checkbox" />
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Curriculum</legend>

                    		  <p>Please note the degree options available in UF Online compared to UF Residential</p>

                    		  <table>
                    		    <tr>
                    		      <th colspan="5" class="center">CLAS Major Comparisons</th>
                    		    </tr>
                    		    <tr>
                    		      <th>Major</th>
                    		      <th id="majorBlue">UF Residential</th>
                    		      <th id="majorOrange">UF Online</th>
                    		    </tr>
                    		    <tr>
                    		      <td>Anthropology</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/APY_BA_BS/" target="_blank">BS or BA</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/APY_BA_UFO/" target="_blank">BA</a></td>
                    		    </tr>
                    		    <tr>
                    		      <td>Biology</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/BIO_BA_BS/" target="_blank">BS or BA</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/BIO_BA_UFO/" target="_blank">BA</a></td>
                    		    </tr>
                    		    <tr>
                    		      <td>Computer Science</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CSC_BS/" target="_blank">BS</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CSC_BS_UFO/" target="_blank">BS</a></td>
                    		    </tr>
                    		    <tr>
                    		      <td>Criminology</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CRI_BA/" target="_blank">BA</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CRI_BA_UFO/" target="_blank">BA</a></td>
                    		    </tr>
                    		    <tr>
                    		      <td>Geography</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GPY_BA_BS/" target="_blank">BA or BS</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GPY_BA_UFO/" target="_blank">BA</a></td>
                    		    </tr>
                    		    <tr>
                    		      <td>Geology</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GLY_BA_BS/" target="_blank">BS or BA</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GLY_BA_UFO/" target="_blank">BA</a></td>
                    		    </tr>
                    		    <tr>
                    		      <td>Psychology</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/PSY_BS_BS01/" target="_blank">BS</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/PSY_BA_UFO/" target="_blank">BA</a></td>
                    		    </tr>
                    		    <tr>
                    		      <td>Sociology</td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/SOC_BA/" target="_blank">BA</a></td>
                    		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/SOC_BA_UFO/" target="_blank">BA</a></td>
                    		    </tr>
                    		  </table>

                              <p>
                                  <button type="button" name="button">I acknowledge this</button>
                                  <input id="" name="checkthree" type="checkbox" />
                              </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Requirements</legend>

                            <p>Changing from UF residential to UF Online requires:</p>

                                <p>1. Applying through the UF Online website (<a href="https://ufonline.ufl.edu/admissions/how-to-apply/#readmit" target="_blank">ufonline.ufl.edu</a>)</p>
                                <p>2. Petitioning CLAS to document the reasons you are no longer able to complete your degree residentially</p>

                                <p>
                                    <button class="orange" type="button" name="button">I acknowledge this</button>
                                    <input id="" name="checkfour" type="checkbox" />
                                </p>
                        </fieldset>
						            <fieldset class="step">
                            <legend>Submit</legend>
							              <p>This completes the acknowledgement form. Select the button below to submit and move on to the next step in the program change request.</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Submit</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Disclosures</a>
                        </li>
                        <li>
                            <a href="#">Graduating</a>
                        </li>
                        <li>
                            <a href="#">Curriculum</a>
                        </li>
                        <li>
                            <a href="#">Requirements</a>
                        </li>
						             <li>
                            <a href="#">Submit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
