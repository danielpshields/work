<?php
  $root = "";
  $page = "dashboard";
  $pageName = "Advisor Dashboard";
  include("{$root}include/header/dashboard.php");
  require("{$root}include/header/header.php");

  if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    require("{$root}include/db.php");
    //no longer accepting Exploratory -- when to start exploratory
    $query = "INSERT INTO exploratory (name, email) VALUES ('{$name}', '{$email}')";
    $spitResults = mysqli_query($connection, $query);
    if (!$spitResults) { die ("query failed"); } else {echo "success!";}
    include("test/email.php");
}

?>

  <div class="container">

    <div class="ticketShell">
      <h4>Transition</h4>
      <p><img class="icon" src="image/edit.png"><a href="ticket/transition.php">make ticket</a></p>
      <p id="recordsTop"><img class="icon" src="image/database.png"><a href="records/transition.php">records</a></p>
      <p style="font-size: .8rem;"><img class="icon" src="image/document.png">PDF</p>
    </div><!-- transition ticket shell -->

  </div>


  <div class="inputShell">
    <h3 class="blue">Tickets &amp; Records</h3>

       <div class="ticketShell">
        <h4>Exploratory Students</h4>
        <form class="" action="dashboard.php" method="post">
          <input type="text" name="name" value="" placeholder="student's first name">
          <label for="name">Add student's first name</label>
          <input type="email" name="email" value="" placeholder="student's email address">
          <label for="email">Add student's gatorlink email</label>
          <input tabindex="1" class="submitButton" type="submit" name="submit" value="send email">
        </form>
        <ul>
          <li><img src="image/database.png"><a href="records/exploratory.php">exploratory records</a></li>
        </ul>
      </div> -->

      <!-- exploratory ticket shell - ->

      <!-- send multiple \\ test email yourself \\ remove ticket  - ->

      <!-- <div class="ticketShell">
        <h4>Missing Requirements</h4>
        <ul>
          <li><img src="image/edit.png"><a href="tickets/requirements.php">requirement ticket</a></li>
          <li><img src="image/database.png"><a href="records/index.php">requirement records</a></li>
        </ul>
      </div> - ->
      <!-- requirement ticket shell - ->

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
        </div><!-- setting option - ->
      </div><!-- Settings - ->

    </div><!-- input shell - ->
-->
<?php
  require("include/footer.php");
  if (isset($_POST['exploratoryEmail'])) {
    mysqli_close($connection);
  }
?>
