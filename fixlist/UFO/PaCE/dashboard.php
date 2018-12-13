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
        <li id="tickets">Add (+)</li>
        <li id="records">Remove (-)</li>
      </ul>
    </div><!-- nav dashboard -->

    <div class="wrap">

      <div id="show_tickets">
        <h2>Make a Ticket:</h2>
        <ul>
          <li><a href="tickets/transition.php">Transition</a></li>
          <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>
          <li><a href="tickets/requirements.php">Missing Requirements</a></li>
          <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>
          <li><a href="tickets/exploratory.php">Exploratory</a></li>
          <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>
        </ul>
        <p style="font-size: .8rem; text-align: right;"><i><a href="">(+) add ticket</a></i></p>

      </div><!-- show Tickets -->

      <div id="show_records">
        <h2>Tickets</h2>
        <form class="" action="dashboard.php" method="post">
            <h3 class="blue">Remove My Tickets:</h3>
            <ul>
              <li><a href="tickets/transition.php">Transition</a></li>
              <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>

              <input class="checkBox" type="checkbox" value="">
              <li><a href="tickets/missingRequirements.php">Missing Requirements</a></li>
              <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>

              <input class="checkBox" type="checkbox" value="">
              <li><a href="tickets/exploratory.php">Exploratory</a></li>
              <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>

              <input class="checkBox" type="checkbox" value="">
            </ul>

            <h3 class="orange">Add Tickets:</h3>
            <ul>
              <li><a href="tickets/transition.php">Transition</a></li>
              <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>

              <input class="checkBox" type="checkbox" value="">
              <li><a href="tickets/missingRequirements.php">Missing Requirements</a></li>
              <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>

              <input class="checkBox" type="checkbox" value="">
              <li><a href="tickets/exploratory.php">Exploratory</a></li>
              <p style="font-size: .8rem;"><i><a href="">remove ticket</a></i></p>

              <input class="checkBox" type="checkbox" value="">
            </ul>
          <input class="submitButton" type="submit" name="submit" value="submit">
        </form>


      </div><!-- show Records -->

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
