<?php
  $root = "../../";
  $page = "index";
  require("{$root}include/header.php");
?>

  <h2>Hello, <?php echo $firstName ;?>!</h2>


    <h2>Please select your preferred transition:</h2>

    <div class="inputShell">

      <h3 class="orange">Campus</h3>

      <p>Indicates that you intend to transition to a residential UF program.</p>

      <form action="campus.php" method="post">
        <input class="submitButton" type="submit" name="campusTransition" value="Transition to Campus">
      </form>

      <dl>
        <dt>
          <img src="image/arrow.png" alt="">
          <span>learn more</span>
        </dt>
        <dd>
          <h4>Residential Transition:</h4>
          <p>By selecting the Transition to Campus option, you’ll be indicating to your advisor that you would like to transition to UF residential coursework for a future term. This form will serve as your approval for your advisor and the Registrar’s Office to set you up to register for campus courses for your indicated term.</p>
          <p>Before submitting this form, please make sure to drop any future UF Online courses for which you have registered, since you will not be able to take those courses once you transition to campus coursework. If you do not drop these courses before transition, you will be held financially responsible for these classes, since you will not be able to take UF Online courses once you have transitioned to campus.</p>
          <p>Additionally, please note that, by transitioning to campus, you will be expected to graduate through the UF residential program and not the UF Online program.</p>
        </dd>
      </dl>
    </div><!-- input shell -->

    <div class="inputShell">
      <h3 class="blue">UF Online</h3>

      <p>Indicates that you intend to transition into a fully online <a href="https://ufonline.ufl.edu/degrees/undergraduate/" target="_blank">UF Online degree program</a>.</p>

      <form action="online.php" method="post">
        <input class="submitButton" type="submit" name="onlineTransition" value="UF Online Transition">
      </form>

      <dl>
        <dt>
          <img src="image/arrow.png" alt="">
          <span>learn more</span>
        </dt>
        <dd>
          <h4>UF Online Transition:</h4>
          <p>By selecting the UF Online Transition option, you’ll be indicating to your advisor that you would like to stay in one of the fully online UF Online degree programs, and that you plan to graduate in one of the fully online UF Online degree programs. Please note that the list of majors available in UF Online is different than the list of majors available to PaCE students.</p>
        </dd>
      </dl>

    </div><!-- input shell -->


    <p id="contactAdvisorSlug">Need help? Contact an <a href="#">advisor</a></p>

<?php require("{$root}include/footer.php"); ?>
