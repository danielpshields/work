  <?php include("include/email.php"); ?>
  <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

    <!-- add inputs here -->

    <?php include("include/inputTriggers.php"); ?>
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>
