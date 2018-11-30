<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>meeting images</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class="container">

      <h1>Whiteboard Images</h1>
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
        <img src="image/03.jpg" alt="">
        <h2>Meeting 3</h2>
        <p><i>Nov. 29, 2018</i></p>
      </div><!-- meeting shell -->

    </div><!-- container -->
    <footer>
      <p class="centerSlug"><?php echo date('M j, Y'); ?></p>
    </footer>
  </body>
</html>
