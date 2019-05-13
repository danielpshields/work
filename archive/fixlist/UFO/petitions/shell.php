
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UF Online Petition</title>
    <link rel="shortcut icon" type="image/x-ico" href="../image/favicon.ico"/>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/petitions.css">
    <link rel="stylesheet" href="css/petition.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="secondaryNav">
      <div class="container">
        <h2>UF Online Petition</h2>
      <!--  <span><a id="sampleTicket" href="ticket/transition/">Sample Ticket</a></span>-->
      </div><!-- container -->
    </div>
    <header>
      <div class="container">
        <a href="../dashboard.php">
          <img src="../image/uf_logo.svg" alt="">
        </a>
                  <h1>Welcome, Alex</h1>

      </div>
    </header>


  <div class="page" style="margin-top: 1.5rem;">
    <nav id="innerNav">
  <ul>
    <li><a href="../petitions/index.php">index</a></li>
    <li><b><a href="../petitions/create.php">create petition</a></b></li>
    <li><b><a href="../petitions/petition.php">aPetition</a></b></li>
    <li><a href="../petitions/records.php">records</a></li>
  </ul>
</nav>

    <div id="petitionContainer">
      <div id="petition_bottom_statusBar">
        <div>Decision Date: <input type="text" name="" value="" placeholder="04/17/19"></div>
        <div>Approved <input type="checkbox" name="" value=""> Denied <input type="checkbox" name="" value=""></div>
        <div>Deferred/Resubmit by: <input type="text" name="" value="" placeholder="date"></div>
      </div>
         <div id="studentInformation">
           <table>
                          <tr>
               <td><b>Name:</b></td>
               <td>Alex Catalano</td>
             </tr>
             <tr>
               <td><b>UFID:</b></td>
               <td>40811353</td>
             </tr>
             <tr>
               <td><b>Email:</b></td>
               <td>acatalano2@ufl.edu</td>
             </tr>
             <tr>
               <td><b>Phone:</b></td>
               <td>813-230-0685</td>
             </tr>
             <tr>
               <td><b>Date:</b></td>
               <td><i>04-17-19</i></td>
             </tr>


                       </table>

         </div><!-- student information -->

                  <ul id="instructions">
           <li>Attach a personal statement (no more than one page, typed, and 10-12 pt font) explaining your extenuating circumstances. Provide documentation of extenuating circumstances (keep copies of documentation for your records) that you think warrant an exception to policy.</li>
           <li>You may submit completed form and any accompanying documents in the following ways: submit it through the online format *******, email <a href="mailto:CLASUFOnline@advising.ufl.edu">CLASUFOnline@advising.ufl.edu</a>, or by fax 352-392-8791. The Petitions Committee typically meets once a week. Results will be sent to your ufl.edu email in a timely manner.</li>
         </ul>

         <h3 id="h3_petitionHeading">Petitions:</h3>
         <div class="container_petition"><h4>Drop</h4>

<p>Submit by the current semester’s published deadline, this can be found in the UF Undergraduate Catalog under "Dates and Deadlines."</p>

<p><b>**You should continue participating in the course(s) until you know the results of your petition.**</b></p>

<!-- ACTION UNSET -->

<p>Petition to drop the following course(s) from the current term by the published deadline:</p>
  <form method="post">
    <input type="text" name="course" value="" placeholder="Course Prefix">
    <input type="text" name="course" value="" placeholder="Course Number">
    <br><br>
    <p><a href="#">add course (+)</a></p>
    <input type="submit" name="drop_submit" value="submit">
  </form>
</div><div class="container_petition"><h4>Probation</h4>

<p><b>Continuation in CLAS on Academic Probation</b></p>


<p>Meet with an advisor to discuss:</p>

<ul>
  <li>GPA needed to remove all deficit points</li>
  <li>A realistic plan of how to get on-track for your major by the end of your next term of enrollment</li>
</ul>

<br><br>
<form method="post">
  Major: <input type="text" name="" value="" placeholder="Major">
  <br>
  <br>
  <input type="submit" name="" value="submit">
</form>
</div><div class="container_petition"><h4>Track</h4>
<p><b>Continuation in CLAS Major</b></p>

<p>Reach out to your undergraduate coordinator for your major and request they submit electronic feedback.</p>

<form method="post">

  off-track two consecutive terms in:
  <input type="text" name="" value="" placeholder="major">
  <br>
  <br>
  Two unsuccessful attempts of required course(s) for major:
  <br>
  <br>
  Course(s) <input type="text" name="" value="" placeholder="course"><input type="text" name="" value="" placeholder="course">
  <br>
  <br>
  <input type="submit" name="" value="submit">
</form>
</div><div class="container_petition"><h4>Break</h4>

<p>If your petition is approved:</p>
<ul>
  <li>Submit a transient form at www.floridashines.org for state colleges and universities or attach a hard copy transient form found at http://registrar.ufl.edu/forms.html for private or out-of-state institutions.</li>
</ul>
</div><div class="container_petition"><h4>Dual</h4>

<p><b>Dual Enroll at <input type="text" name="" value="" placeholder="institution"> to take:</b></p>
<form class="" action="index.html" method="post">
  <b>Courses:<br>
    <input type="text" name="" value="" placeholder="Course"><br>
    <input type="text" name="" value="" placeholder="Course"><br>
    <input type="text" name="" value="" placeholder="Course"><br>
    <input type="text" name="" value="" placeholder="Course"><br>
  <br>
  <br>
  <input type="submit" name="" value="submit">
</form>
</div><div class="container_petition"><h4>Other</h4>
<p>Discuss your petition with your academic advisor to determine if you should use this form. The advisor will instruct you what to list underneath “Other” if reasons necessitate a petition. Examples of “Other” reasons:</p>
<ul>
  <li>S/U after the deadline</li>
  <li>Catalog Year change</li>
  <li>additional flexible learning classes</li>
</ul>
</div>


        </div><!-- petition container -->

      </div><!-- page -->


    <footer>
      <p> &copy; <!--<a href="../include/print_glid.php">-->UF Online<!--</a>--></p>
    </footer>
  </body>
  <script type="text/javascript" src="../scripts/.js"></script>
  <script type="text/javascript" src="../scripts/show.js"></script>
</html>
