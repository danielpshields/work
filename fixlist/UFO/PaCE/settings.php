<?php
  $root = "";
  $page = "settings";
  require("include/header.php");
?>

  <h2>User Settings</h2>

    <form class="" action="login.php" method="post">
      <div class="inputShell">
        <h3 class="blue">Edit Password</h3>
        <input type="text" name="" value="">
        <label for="">previous password</label>

        <div class="divider"></div>

        <input type="text" name="" value="">
        <label for="">new password</label>
        <input type="text" name="" value="">
        <label for="">new password</label>
      </div><!-- input shell -->

    
      <input class="submitButton" type="submit" name="submit" value="submit">

    </form>

<?php require("include/footer.php") ;?>
