<?php
  $root = "";
  $page = "dashboard";
  $pageName = "PaCE Dashboard";
  $key = $_COOKIE['key'];
  include("{$root}include/header/dashboard.php");
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
?>

  <div id="dashboard_container">
      <div class="ticketShell">
        <h4>Transition</h4>
        <p><img class="icon" src="image/database.png"><a href="records/transition.php">records</a></p>
        <p id="recordsTop"><img class="icon" src="image/edit.png"><a href="ticket/transition.php">make ticket</a></p>
        <!-- <p style="font-size: .8rem;"><img class="icon" src="image/document.png">PDF</p> -->
      </div><!-- transition ticket shell -->
       <div id="exploratoryShell" class="ticketShell">
          <h4>Exploratory Student</h4>
          <form class="" action="processor.php" method="post">
            <input type="text" name="name" value="" placeholder="student's first name">
            <label for="name">Add student's first name</label>
            <input type="email" name="email" value="" placeholder="student's email address">
            <label for="email">Add student's gatorlink</label>
            <input tabindex="1" class="submitButton" type="submit" name="exploratoryDashboard" value="send email">
          </form>
          <p id="exploratoryRecordsLink"><img class="icon" src="image/database.png"><a href="records/exploratory.php">records</a></p>
        </div>
      <div id="missingRequirements" class="ticketShell">
        <h4>Missing Requirements</h4>
        <p><img class="icon" src="image/edit.png"><a href="ticket/requirements.php">make ticket</a></p>
      </div>
      <!-- ticket shell -->

    </div><!-- dashboard container -->


    <ul>
      <li>prehealth disclaimer</li>
      <li>readmission agreement</li>
      <p class="tiny">A brief discription Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <li>PaCE Transition</li>
      <li>College Petition</li>
    </ul>




<?php
  require("include/footer.php");
  if (isset($_POST['exploratoryEmail'])) {
    mysqli_close($connection);
  }
?>
