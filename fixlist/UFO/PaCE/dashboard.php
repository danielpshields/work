<?php
  $root = "";
  $page = "Dashboard";
  require("include/header.php");
?>
  <h2>Advisor Dashboard</h2>

  <div class="inputShell">
    <h3 class="blue">Dashboard Options</h3>
    <h2>Make a Ticket:</h2>
    <ul>
      <!-- <a href="ticket.php"><img src="image/check-form.png" alt=""></a> -->
      <li><a href="ticket.php">Transition</a></li>
      <li><a href="tickets/missingRequirements.php">Missing Requirements</a></li>
      <li><a href="tickets/exploratory.php">Exploratory</a></li>
    </ul>
    <?php //include("include/print_glid.php"); ?>

    <div id="userSettings">
      <img id="userSettingsImg" src="image/user.png" alt="">
      <ul>
        <li><a href="settings.php">user settings</a></li>
      </ul>
      <div class="clear"></div>
    </div><!-- user settings -->
  </div>

<?php require("include/footer.php") ;?>
