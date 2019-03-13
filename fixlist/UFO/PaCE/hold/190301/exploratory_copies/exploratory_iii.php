<?php
  $root = "../";
  $page = "exploratory";
  require("{$root}include/header.php");
  $name = "";
  $email = "";
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
  }
  $to = $email;
  $advisor = "nicole";
?>
  <h2>Preview: Exploratory Ticket</h2>

  <pre>
    <?php print_r($_POST); ?>
  </pre>



  <p>Hi,  . ucfirst(strtolower($name)) . !</p>

  <p>Hope classes are going well! Based on how many credits you’ve already earned, and the credits you’re currently taking, you’ll have 60 or more credit hours at the end of this semester (assuming you pass your current classes, which I’m sure you will! :).</p>

  <p><b>However, we currently have you listed as an Exploratory/Undecided student. In order to transition to campus, you must declare a PaCE major, and meet the transition requirements for that major. You will not be able to register for future classes (either campus or UF Online classes) until you declare a major.</b></p>

  <p>Please review at all of the majors offered in the program, which can be found at this link: http://www.admissions.ufl.edu/learn/pace/majors.html</p>

  <p>Take some time to look over each major, and identify major(s) of interest. If you click on the college or major, most will send you to a link listing that program’s requirements. The dedicated page for our College of Liberal Arts and Sciences PaCE program can be found at this link: https://www.advising.ufl.edu/pace-pathways-to-campus-enrollment/</p>

  <p>Remember, the guarantee provided by PaCE is that you have a seat in your PaCE major on campus once you’ve met the general and major specific transition requirements. There may or may not be opportunities to change majors after transitioning to campus, so it is important to declare a major in which you’re interested, and one that you could potentially graduate with a degree in that program.</p>

  <p>I’m more than happy to help through this process; however, my expectation is that you come ready to our appointment with a list of majors in which you are interested, and a general understanding of the transition requirements for each major.</p>

  <p>If you are looking to declare a major outside of the College of Liberal Arts and Sciences, please reach out to that college's advising office using the contact information at this link: http://handbook.ufonline.ufl.edu/advising/pace-advisors-contacts/</p>

  <p>If you’d like to schedule an appointment with me, please call us at 352-294-2205. Unfortunately, due to the volume of my student caseload, I’m unable to schedule appointments via email at this time. Regardless, make sure to start the steps above soon, as you will not be able to register for future classes until you have declared a PaCE major.</p>

  <p>Please let me know if you have any questions, and Go Gators!</p>
  <p>Nicole Raymond | Academic Advisor, UF Online and PaCE</p>

  <p>University of Florida College of Liberal Arts & Sciences | Academic Advising Center</p>

  <p>205 Fletcher Drive | Farrior Hall | PO Box 112015 | Gainesville, FL 32611-2015</p>

  <p>Appointment Scheduling: 352.294.2205 | F: 352.392.2905 | E: nraymond@advising.ufl.edu</p>

  <p>Explore: UF Undergraduate Catalog | UF Online Student Handbook | UF Online</p>

  <p>Pronouns: She/Her/Hers</p>

  <p>Note: This communication may contain information that is legally protected from unauthorized</p>

  <p>NOTE: This communication may contain information that is legally protected from unauthorized disclosure. If you are not the intended recipient, please note that any dissemination, distribution or copying of this communication is strictly prohibited. If you have received this message in error, you should notify the sender immediately by telephone or by return email and delete this message from your computer.</p>

  ';
?>

  <?php
    include("{$root}include/email/email.php");
  ?>

  <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <?php include("{$root}include/email/inputTriggers.php"); ?>
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>



<?php require("{$root}include/footer.php") ;?>
