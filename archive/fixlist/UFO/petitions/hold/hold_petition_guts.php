

     <div id="a_drop">
       <ol>
         <li>display courses || options for courses</li>
       </ol>
       <p>Submit by the current semester’s published deadline, this can be found in the <a href="#" target="_blank">UF Undergraduate Catalog under “Dates and Deadlines.”</a></p>
       <p><i>**You should continue participating in the course(s) until you know the results of your petition.**</i></p>
     </div>


    <table>
      <thead>
        <tr>
          <th>CIRCLE</th>
          <th>COMPLETE APPROPRIATE SECTION</th>
          <th>TO HAVE YOUR PETITION REVIEWED, YOU MUST:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>A</td>
          <td>Petition to drop the following course(s) from the current term by the published deadline:
            Course Prefix/Code: 		Course #:
            Course Prefix/Code: 	  Course #:

            <?php $i = 0; ?>
            <p id="addCoursesOption"><i>(+) add courses</i></p>
            <form action="index.html" method="post">
              <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
              <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">
            </form>


          </td>
          <td>
            <li>Submit by the current semester’s published deadline, this can be found in the UF Undergraduate Catalog under “Dates and Deadlines.”</li>

          **You should continue participating in the course(s) until you know the results of your petition.**


          </td>
        </tr>
        <tr>
          <td>B</td>
          <td>Continuation in CLAS on Academic Probation
            Major: ____________
          </td>
          <td>
            •	Meet with an advisor to discuss:
            	GPA needed to remove all deficit points
            	A realistic plan of how to get on-track for your major by the end of your next term of enrollment
          </td>
        </tr>
        <tr>
          <td>C</td>
          <td>
            Continuation in CLAS Major

            Off-track two consecutive terms in  __(major)__

            ☐Two unsuccessful attempts of required course(s) for major:
            Course(s) __ __
          </td>
          <td>•	Reach out to your undergraduate coordinator for your major and request they submit electronic feedback.</td>

          <h3>Off-Track Continuation</h3>
          Continuation in CLAS Major

          Off-track two consecutive terms in:
          <br>
          <input type="text" name="" value="" placeholder="major">
          <br>

          ☐Two unsuccessful attempts of required course(s) for major:
          <br>
          Course(s):
          <br>
          <input type="text" name="" value="course one">
          <br>
          <input type="text" name="" value="course two">


        </tr>
        <tr>
          <td>D</td>
          <td>Petition to Break Residency</td>
          <td>
            •	If your petition is approved:
              	Submit a transient form at www.floridashines.org for state colleges and universities or attach a hard copy transient form found at http://registrar.ufl.edu/forms.html for private or out-of-state institutions.
          </td>
        </tr>
        <tr>
          <td>E</td>
          <td>Dual Enroll at ________________ to take
          (institution)</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>F</td>
          <td>Other<br>____</td>
          <td>•	Discuss your petition with your academic advisor to determine if you should use this form. The advisor will instruct you what to list underneath “Other” if reasons necessitate a petition. Examples of “Other” reasons: S/U after the deadline, Catalog Year change, additional flexible learning classes</td>
        </tr>
