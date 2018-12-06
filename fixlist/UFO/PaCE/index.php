<?php
  $page = "index";
  require("include/header.php");
?>

  <!-- <h2>Hello, <?php echo $firstName ;?>!</h2> -->

    <h2>Please select your preferred transition:</h2>

    <div class="inputShell">

      <h3 class="orange">Campus</h3>

      <p>Indicates that you intend to transition to a residential UF program.</p>

      <form action="campus.php" method="post">
        <input class="submitButton" type="submit" name="submit" value="Transition to Campus">
      </form>

      <dl>
        <dt>
          <img src="image/arrow.png" alt="">
          <span>learn more</span>
        </dt>
        <dd>
          <h4>Residential Transition:</h4>
          <p>A residential transition entails lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </dd>
      </dl>
    </div><!-- input shell -->

    <div class="inputShell">
      <h3 class="blue">UF Online</h3>

      <p>Indicates that you intend to transition into a fully online <a href="https://ufonline.ufl.edu/degrees/undergraduate/" target="_blank">UF Online degree program</a>.</p>

      <form action="online.php" method="post">
        <input class="submitButton" type="submit" name="submit" value="UF Online Transition">
      </form>

      <dl>
        <dt>
          <img src="image/arrow.png" alt="">
          <span>learn more</span>
        </dt>
        <dd>
          <h4>UF Online Transition:</h4>
          <p>A UF Online transition entails lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </dd>
      </dl>

    </div><!-- input shell -->


    <p id="contactAdvisorSlug">Need help? Contact an <a href="#">advisor</a></p>

<?php require("include/footer.php"); ?>
