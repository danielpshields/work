


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaCE Transition Form | Ticket</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/ticket.css">
    <link rel="stylesheet" href="../css/resize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Welcome, <a href="../dashboard.php">acatalano2</a></h1>
        <a href="../index.php">
          <img src="../image/uf_logo.svg" alt="">
        </a>
      </div>
    </header>

  <h2>Transition Ticket</h2>
  <h3>Create a <b>transition</b> ticket for the student:</h3>

  <p>
    <script>document.write("alex");</script>

  </p>

  <form class="" action="messages/submitted.php" method="post">

          <div class="inputShell">
        <h3 class="orange">Student / Recipient</h3>
        <input required type="text" name="student_email" value="" placeholder="***@ufl.edu">
        <label for="student_email">Add student's gatorlink email</label>
      </div>

    <div class="inputShell">
      <h3 class="blue">Stipulation</h3>

  <div class="text inputShell">
    <h3 class="black">Written Stipulation</h3>
    <textarea name="" rows="8" placeholder="requirement statement"></textarea>
  </div>
        <div class="text inputShell">
    <h3 class="black">Course Requirements</h3>
    <input type="text" name="" value="" placeholder="add course">

<select class="course" name="">
  <option value="input" selected disabled>grade needed</option>
  <option value="grade_a">2.5</option>
  <option value="grade_b">2.8</option>
  <option value="grade_c">3.0</option>
  <option value="grade_d">3.3</option>
  <option value="grade_f">3.5</option>
</select>
    <div class="hideTheKids">
      <div id="newOptions" class="newOptions">
        <input type="text" name="" value="" placeholder="add course">

<select class="course" name="">
  <option value="input" selected disabled>grade needed</option>
  <option value="grade_a">2.5</option>
  <option value="grade_b">2.8</option>
  <option value="grade_c">3.0</option>
  <option value="grade_d">3.3</option>
  <option value="grade_f">3.5</option>
</select>
      </div><!-- new option -->
      <div id="newOptionsTwo" class="newOptions">
        <input type="text" name="" value="" placeholder="add course">

<select class="course" name="">
  <option value="input" selected disabled>grade needed</option>
  <option value="grade_a">2.5</option>
  <option value="grade_b">2.8</option>
  <option value="grade_c">3.0</option>
  <option value="grade_d">3.3</option>
  <option value="grade_f">3.5</option>
</select>
      </div><!-- new option -->
      <div id="newOptionsThree" class="newOptions">
        <input type="text" name="" value="" placeholder="add course">

<select class="course" name="">
  <option value="input" selected disabled>grade needed</option>
  <option value="grade_a">2.5</option>
  <option value="grade_b">2.8</option>
  <option value="grade_c">3.0</option>
  <option value="grade_d">3.3</option>
  <option value="grade_f">3.5</option>
</select>
      </div><!-- new option -->
      <div id="newOptionsFour" class="newOptions">
        <input type="text" name="" value="" placeholder="add course">

<select class="course" name="">
  <option value="input" selected disabled>grade needed</option>
  <option value="grade_a">2.5</option>
  <option value="grade_b">2.8</option>
  <option value="grade_c">3.0</option>
  <option value="grade_d">3.3</option>
  <option value="grade_f">3.5</option>
</select>
      </div><!-- new option -->
      <div id="newOptionsFive" class="newOptions">
        <input type="text" name="" value="" placeholder="add course">

<select class="course" name="">
  <option value="input" selected disabled>grade needed</option>
  <option value="grade_a">2.5</option>
  <option value="grade_b">2.8</option>
  <option value="grade_c">3.0</option>
  <option value="grade_d">3.3</option>
  <option value="grade_f">3.5</option>
</select>
      </div><!-- new option -->
      <div id="newOptionsSix" class="courseRequirements newOptions">
        <input type="text" name="" value="" placeholder="add course">

<select class="course" name="">
  <option value="input" selected disabled>grade needed</option>
  <option value="grade_a">2.5</option>
  <option value="grade_b">2.8</option>
  <option value="grade_c">3.0</option>
  <option value="grade_d">3.3</option>
  <option value="grade_f">3.5</option>
</select>
      </div><!-- new option -->
    </div>
    <p id="addCourse" class="addCourse"><i>(+) add course</i></p>
    <div class="hideTheKids">
      <p id="addCourseTwo" class="addCourse"><i>(+) add course</i></p>
      <p id="addCourseThree" class="addCourse"><i>(+) add course</i></p>
      <p id="addCourseFour" class="addCourse"><i>(+) add course</i></p>
      <p id="addCourseFive" class="addCourse"><i>(+) add course</i></p>
      <p id="addCourseSix" class="addCourse"><i>(+) add course</i></p>
    </div>

  </div><!-- input shell -->


  <div class="inputShell">
    <h3 class="black">GPA Requirements</h3>

    <p>Select needed GPAs:</p>

    <select class="" name="">
      <option value="input" selected disabled>Major GPA</option>
      <option value="grade_a">2.5</option>
      <option value="grade_b">2.8</option>
      <option value="grade_c">3.0</option>
      <option value="grade_d">3.3</option>
      <option value="grade_f">3.5</option>
    </select>

    <label for="">Major GPA</label>



    <select class="" name="">
      <option value="input" selected disabled>UF GPA</option>
      <option value="grade_a">2.5</option>
      <option value="grade_b">2.8</option>
      <option value="grade_c">3.0</option>
      <option value="grade_d">3.3</option>
      <option value="grade_f">3.5</option>
    </select>
    <label for="">UF GPA</label>



  </div><!-- input shell -->
    </div><!-- input shell -->


    <input hidden type="text" name="formType" value="transition">
    <input class="submitButton" type="submit" name="submit" value="email ticket">
  </form>

</div><!-- display: none; -->


    <footer>
      <p>PaCE Transition Form &copy; <a href="hold/glid.php">UF Online</a></p>
    </footer>


  </body>
  <script type="text/javascript" src="../scripts/dropdown.js"></script>
  <script type="text/javascript" src="../scripts/show.js"></script>
  <script type="text/javascript" src="../scripts/display.js"></script>
</html>
