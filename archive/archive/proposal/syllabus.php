<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/syllabus.css">
  </head>
  <body>
    <header><h1>Syllabus</h1><div class="clear"></div></header>

      <div class="tables">
        <div class="coursesAndSections">
          <h2>what</h2>
          <table class="tableSpace">
            <tr><th colspan="2">sy_soc_courses</th></tr>
            <tr><th>name</th><th>value</th></tr>
            <tr><td>*ID</td><td>int</td></tr>
            <tr><td>code</td><td>char(8)</td></tr>
            <tr><td>name</td><td>varchar</td></tr>
            <tr><td>semester_id</td><td>int</td></tr>
          </table>

          <table>
            <tr><th colspan="2">sy_soc_sections</th></tr>
            <tr><th>value</th><th>type</th></tr>
            <tr><td>*ID</td><td>int</td></tr>
            <tr><td>number</td><td>char(4)</td></tr>
            <tr><td>display</td><td>bool/bit</td></tr>
            <tr><td>course_id</td><td>int</td></tr>
            <tr><td>semester_id</td><td>int</td></tr>
            <tr><td>dept_id</td><td>int</td></tr>
          </table>
        </div><!-- courses and section -->

        <div class="semesters">

          <table>
            <h2>when</h2>
            <tr><th colspan="2" class="center">semi-perm</th></tr>
            <tr><th colspan="2">sy_soc_semesters</th></tr>
            <tr><td>*ID</td><td>int</td></tr>
            <tr><td>semester</td><td>char(6)</td></tr>
          </table>

        </div><!-- semesters -->

        <div class="instructorsAndDepartments">
          <h2>who</h2>
          <table class="tableSpace">
            <tr><th colspan="2">sy_soc_instructors</th></tr>
            <tr><td>*ID</td><td>int</td></tr>
            <tr><td>[name]</td><td>varchar</td></tr>
          </table>
          <table>
            <tr><th colspan="2">sy_soc_departments</th><tr>
            <tr><td>*ID</td><td>int</td></tr>
            <tr><td>dept_code</td><td>char(10)</td></tr>
            <tr><td>dept_name</td><td>varchar</td></tr>
          </table>
        </div><!-- end instructorsAndDepartments -->
        <div class="clear"></div>

        <p class="center"><i>bio-101 -- 1043 -- section is the professor teaching the course,  letter for S,F,Sum A,B,C --, Year</i></p>
        <p class="center"><i>I, <u>user</u>, want to find a syllabus from <u>my class</u>.</i></p>
      </div><!-- end tables -->

<!--  ======  -->

<div class="courses">
  <h2>Courses</h2>

  <div class="keys">
    <ul>
      <li>Prefix*</li>
      <li>Number*</li>
      <li>section</li>
      <li>title</li>
      <li>Instructor *</li>
      <li>Year/Term</li>
      <li>Status (active?)</li>
      <li>Grad/Undergrad</li>
    </ul>
  </div>

    <table class="keyTable">
      <tr>
        <th colspan="4">Key</th>
      </tr>
      <tr>
        <th>Prefix</th>
        <th>Number</th>
        <th>Instructor</th>
        <th>Section</th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td class="center">1,2,3,4</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td class="center">1,2,3,4</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td class="center">1,2,3,4</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td class="center">1,2,3,4</td>
      </tr>
    </table>


    <table class="syllabus">
      <tr>
        <th>Syllabus Attached</th>
      </tr>
      <tr>
        <td class="center"><a href="proposal.php">Syllabus</a></td>
      </tr>
    </table>
    <div class="clear"></div>
  </div><!-- courses -->


<!-- fox site -->


  <div class="foxSite">


      <div class="foxTitle">
        <h2>PUBLIC</h2>
      </div>
      <div class="foxContent">
        <h3>Visitor</h3>
        <div class="foxBabySite">
          <ul>
            <li>semester course list</li>
          </ul>
        </div> <!-- foxBabySite -->
      </div><!-- fox content -->
      <div class="clear"></div>


    <div class="authentic">
      <div class="foxTitle">
        <h2>AUTHENTICATED</h2>
      </div>
      <div class="foxContent">
        <h3>Users Department</h3>
        <div class="foxBabySite">
          <ul>
            <li>only see dept</li>
            <li>Wordpress roles+</li>
          </ul>
        </div><!-- foxBabySite -->
      </div>
      <div class="clear"></div>
      <div class="foxContent">
        <h3>CLAS</h3>
        <div class="foxBabySite">
          <ul>
            <li>dashboard</li>
            <li>admin</li>
          </ul>
        </div><!-- foxBabySite -->
      </div><!-- foxContent -->
    <div class="clear"></div>
  </div><!-- authentic -->


</div><!-- fox site -->

  <div style="border-top: 1px solid black;">
    <ul>
      <li>wordpress roles?</li>
      <li>unique ID for courses?</li>
    </ul>
  </div>


    <footer><p><i>End.</i></p></footer>
  </body>
</html>
