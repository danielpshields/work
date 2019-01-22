<?php
  $root = "";
  $page = "dashboard";
  require("{$root}include/header.php");

  if (isset($_POST['exploratoryEmail'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $name = $_POST['name'];
    include("test/email.php");
  }

  /* DB: C (R) U D 1. Cookie: Logged in */

?>
  <h2>Advisor Dashboard</h2>

  <div class="inputShell">

    <h3 class="blue">Tickets &amp; Records</h3>

      <div class="ticketShell">
        <h4>Transition</h4>
        <ul>
          <li><img src="image/edit.png"><a href="tickets/transition.php">ticket</a></li>
          <li><img src="image/database.png"><a href="records/index.php">records</a></li>
        </ul>
        <p class="removeTicket"><a href="dashboard.php">remove ticket</a></p>
      </div><!-- ticket shell -->

      <div class="ticketShell">
        <h4>Exploratory Students</h4>
        <form class="" action="dashboard.php" method="post">
          <input type="text" name="name" value="<?php echo $firstName; ?>" placeholder="student's name">
          <label for="name">Add student's name</label>
          <input type="email" name="email" value="<?php echo $email; ?>" placeholder="student's email address">
          <label for="email">Add student's gatorlink email</label>
          <input type="hidden" name="formType" value="exploratory">
          <input tabindex="1" class="submitButton" type="submit" name="exploratoryEmail" value="send email">
          <p><a href="">send multiple? (+)</a></p>
        </form>
        <!-- .checkTicket Class doesn't exist -->
        <p class="checkTicket"><a href="">test email yourself</a></p>
        <p class="removeTicket"><a href="dashboard.php">remove ticket</a></p>
        <ul>
          <li><img src="image/database.png"><a href="records/index.php"> exploratory records</a></li>
        </ul>
      </div><!-- ticket shell -->

      <div class="ticketShell">
        <h4>Missing Requirements</h4>
        <ul>
          <li><img src="image/edit.png"><a href="tickets/requirements.php">ticket</a></li>
          <li><img src="image/database.png"><a href="records/index.php">records</a></li>
        </ul>
        <p class="removeTicket"><a href="dashboard.php">remove ticket</a></p>
      </div><!-- ticket shell -->


      <div id="settings">
        <div class="settingOption">
          <img src="image/folder.png" alt="">
          <ul>
            <li><a href="tickets.php">all tickets</a></li>
          </ul>
        </div><!-- setting option -->
        <div class="settingOption">
          <img src="image/user.png" alt="user settings icon">
          <ul>
            <li><a href="settings.php">user settings</a></li>
          </ul>
        </div><!-- setting option -->
      </div><!-- Settings -->

    </div><!-- input shell -->

<?php require("include/footer.php") ;?>
