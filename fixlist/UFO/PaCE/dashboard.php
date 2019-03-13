<?php
  $root = "";
  $page = "dashboard";
  $pageName = "PaCE Dashboard";
  $key = $_COOKIE['key'];
  include("{$root}include/header/dashboard.php");
  require("{$root}include/header/header.php");
  include("{$root}include/credentials.php");
  include("{$root}include/header/admin_nav.php");
?>

  <p><?php echo $email; ?></p>

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
      <!--<div id="missingRequirements" class="ticketShell">
        <h4>Missing Requirements</h4>
        <p><img class="icon" src="image/edit.png"><!- - <a href="ticket/requirements.php">- ->make ticket<!- -</a>- -></p>
      </div>
      <!- - ticket shell -->

      <div class="ticketShell">
        <h4>Environmental Variables</h4>

        <?php if (true && true) { ?>
          <p><?php echo $_SERVER['HTTP_UFSHIB_EPPN']; ?><!-- "HTTP_UFSHIB_EPPN     | nraymond@ufl.edu" --></p>
          <p><?php echo $_SERVER['REDIRECT_UFShib_eppn'] ; ?><!-- "REDIRECT_UFShib_eppn | nraymond@ufl.edu" --></p>
          <p><?php echo $_SERVER['REDIRECT_UFShib_mail']; ?><!-- "REDIRECT_UFShib_mail | nraymond@advising.ufl.edu" --></p>
          <p><?php echo $_SERVER['HTTP_UFSHIB_MAIL']; ?><!-- "HTTP_UFSHIB_MAIL     | nraymond@advising.ufl.edu" --></p>
        <?php } ?>
      </div>


    </div><!-- dashboard container -->


      <!-- exploratory ticket shell -->
      <!-- send multiple \\ test email yourself \\ remove ticket  -->
      <!-- requirement ticket shell -->
      <!-- settings  - ->
      <div id="settings">
        <div class="settingOption">
          <img src="image/folder.png" alt="">
          <ul>
            <li><a href="tickets.php">all tickets</a></li>
          </ul>
        </div><!-- setting option - ->
        <div class="settingOption">
          <img src="image/user.png" alt="user settings icon">
          <ul>
            <li><a href="settings.php">user settings</a></li>
          </ul>
        </div><!-- setting option
      </div><!-- Settings  - ->

    </div><!-- input shell -->

<?php
  require("include/footer.php");
  if (isset($_POST['exploratoryEmail'])) {
    mysqli_close($connection);
  }
?>
