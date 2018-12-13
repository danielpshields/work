<?php
  $root = "";
  $page = "dashboard";
  require("include/header.php");
?>
  <h2>Advisor Dashboard</h2>

  <div class="inputShell">
    <h3 class="blue">Dashboard Options</h3>

    <div id="navDashboard">
      <ul>
        <li id="tickets">Ticket (add/remove)</li>
      </ul>
    </div><!-- nav dashboard -->


    <h2>My Tickets</h2>
    <div class="wrap">

      <div id="my_tickets">
        <ul>
          <li>PaCE <a href="tickets/transition.php">Transition</a></li>
        </ul>


          <ul>
            <li>make ticket</li>
            <li>see records</li>
            <li>remove ticket</li>
          </ul>



          <li><a href="tickets/requirements.php">Missing Requirements</a></li>
          <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>
          <li><a href="tickets/exploratory.php">Exploratory</a></li>
          <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>
        </ul>

      </div><!-- show Tickets -->

      <div id="add_remove_tickets">
        <h3 class="black">Available Tickets</h3>

        <h4>PaCE</h4>
          <li>Exploratory</li>
          <p class="aboutTicket">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud e quis nostrud exercitation..</p>
          <li>Missing Requirements</li>
          <li>Transition</li>
        <h4>Pre-Health</h4>
          <li>Pre-Health Disclaimer</li>
        <h4>UFO</h4>
          <li>Readmission</li>

      </div><!-- add remove tickets-->

    </div><!-- wrap -->



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
