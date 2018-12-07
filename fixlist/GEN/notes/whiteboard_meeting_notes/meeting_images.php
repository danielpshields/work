<?php require("include/header.php"); ?>

      <img id="slugImage" src="image/whiteboard.gif" alt="">
      <p class="centerSlug">Calendar / General Discussion Meetings</p>

      <div class="meetingShell">
        <img src="image/01_01.jpg" alt="">
        <!-- <img src="image/01_02.jpg" alt=""> -->
        <img class="marginTopImage" src="image/01_03.jpg" alt="">
        <h2>Meeting 1</h2>
        <p><i> Oct. 30, 2018</i></p>
      </div><!-- meeting shell -->


      <div class="meetingShell">
        <img src="image/02.jpg" alt="">
        <h2>Meeting 2</h2>
        <p><i>Nov. 11, 2018</i></p>
      </div><!-- meeting shell -->


      <div class="meetingShell">
        <a href="exploded.php">
          <img src="image/03.jpg" alt="">
        </a>
        <h2>Meeting 3</h2>
        <p><i>Nov. 29, 2018</i></p>
      </div><!-- meeting shell -->

      <div class="meetingShell">
        <img src="image/04.jpg" alt="">
        <h2>Meeting 4</h2>
        <p><i>Dec. 05, 2018</i></p>
      </div><!-- meeting shell -->


      <!--
      <div class="meetingShell">
        <img src="image/" alt="">
        <h2>Meeting No</h2>
        <p><i>date</i></p>
      </div>
      <!- - meeting shell -->

    </div><!-- overall page container -->
    <footer>
      <p class="centerSlug"><?php echo date('M j, Y'); ?></p>
    </footer>
  </body>
</html>
