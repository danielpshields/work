<?php
  $root = "";
  $page = "dashboard";
  require("include/header.php");
?>
  <h2>Advisor Dashboard</h2>

  <div class="inputShell">

    <h3 class="blue">My Tickets</h3>

      <div class="ticketShell">
        <h4>Transition</h4>
        <ul>
          <li><a href="records/.php">see records</a></li>
          <li>remove ticket</li>
          <li><a href="tickets/transition.php">new ticket</a></li>
        </ul>
      </div><!-- ticket shell -->

      <div class="ticketShell">
        <h4>Missing Requirements</h4>
        <ul>
          <li><a href="records/requirements.php">see records</a></li>
          <li>remove ticket</li>
          <li><a href="tickets/requirements.php">new ticket</a></li>
        </ul>
      </div><!-- ticket shell -->

      <div class="ticketShell">
        <h4>Exploratory</h4>
        <ul>
          <li><a href="records/exploratory.php">see records</a></li>
          <li>remove ticket</li>
          <li><a href="tickets/exploratory.php">new ticket</a></li>
        </ul>
      </div><!-- ticket shell -->


    </div><!-- input shell -->



    <div class="inputShell">

      <div id="tickets_available">
        <h3 class="orange">Available Tickets</h3>

        <h4>PaCE</h4>
        <ul>
          <li>Exploratory Ticket</li>
          <p class="aboutTicket">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e quis nostrud exercitation..</p>
          <li>Missing Requirements Ticket</li>
          <p class="aboutTicket">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e quis nostrud exercitation..</p>
          <li>Transition Ticket</li>
          <p class="aboutTicket">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e quis nostrud exercitation..</p>
        </ul>

        <h4>Pre-Health</h4>
        <ul>
          <li>Pre-Health Disclaimer</li>
          <p class="aboutTicket">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e quis nostrud exercitation..</p>
        </ul>

        <h4>UFO</h4>
        <ul>
          <li>Readmission Form</li>
          <p class="aboutTicket">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e quis nostrud exercitation..</p>
        </ul>

      </div><!-- add remove tickets-->


    <div id="settings">

      <div id="ticketEdit">
        <img src="image/check-form.png" alt="check form icon">
        <ul>
          <li><a href="records.php">tickets records</a></li>
        </ul>
      </div><!-- ticket edit -->

      <div id="userEdit">
        <img src="image/user.png" alt="user settings icon">
        <ul>
          <li><a href="settings.php">user settings</a></li>
        </ul>
      </div><!-- user edit -->

    </div><!-- Settings -->
  </div><!-- input shell -->



<?php require("include/footer.php") ;?>


<!-- <div id="navDashboard">
  <ul>
    <li id="tickets">Ticket (add/remove)</li>
  </ul>
</div> -->
<!-- nav dashboard -->
