<?php
  $root = "";
  $page = "dashboard";
  $pageName = "PaCE Dashboard";
  $key = $_COOKIE['key'];
  include("{$root}include/header/dashboard.php");
  require("{$root}include/header/header.php");

  if (isset($_POST['exploratorySubmit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    require("{$root}include/db.php");
    $query = "INSERT INTO exploratory (name, email) VALUES ('{$name}', '{$email}')";
    $spitResults = mysqli_query($connection, $query);
    if (!$spitResults) { die ("query failed"); }
    include("{$root}email/ticket/exploratory/exploratory_email.php");
}

  include("{$root}include/header/admin_nav.php");

?>

  <div id="dashboard_container">
      <div class="ticketShell">
        <h4>Transition</h4>
        <p><img class="icon" src="image/edit.png"><a href="ticket/transition.php">make ticket</a></p>
        <p id="recordsTop"><img class="icon" src="image/database.png"><a href="records/transition.php">records</a></p>
        <p style="font-size: .8rem;"><img class="icon" src="image/document.png">PDF</p>
      </div><!-- transition ticket shell -->
       <div id="exploratoryShell" class="ticketShell">
          <h4>Exploratory Student</h4>
          <form class="" action="dashboard.php" method="post">
            <input type="text" name="name" value="" placeholder="student's first name">
            <label for="name">Add student's first name</label>
            <input type="email" name="email" value="" placeholder="student's email address">
            <label for="email">Add student's gatorlink</label>
            <input tabindex="1" class="submitButton" type="submit" name="exploratorySubmit" value="send email">
          </form>
          <p id="exploratoryRecordsLink"><img class="icon" src="image/database.png"><a href="records/exploratory.php">records</a></p>
        </div>
      <div id="missingRequirements" class="ticketShell">
        <h4>Missing Requirements</h4>
        <p><img class="icon" src="image/edit.png"><!-- <a href="ticket/requirements.php">-->make ticket<!--</a>--></p>
      </div><!-- ticket shell -->

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
