<?php
  $root = "";
  $page = "dashboard";
  require("include/header.php");

  /*

   Database

   C (R) U D

   1. Cookie: Logged in

  */

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
        <h4>Missing Requirements</h4>
        <ul>
          <li><img src="image/edit.png"><a href="tickets/requirements.php">ticket</a></li>
          <li><img src="image/database.png"><a href="records/index.php">records</a></li>
        </ul>
        <p class="removeTicket"><a href="dashboard.php">remove ticket</a></p>
      </div><!-- ticket shell -->

      <div class="ticketShell">
        <h4>Exploratory</h4>
        <ul>
          <li><img src="image/edit.png"><a href="tickets/exploratory.php">ticket</a></li>
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
