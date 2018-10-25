<?php

/*
  About Email();

    1. "form.php":
      - form template, (+) add fields / inputs here within form

      1.2. "include/inputTirggers.php":
        - input / fields required to submit the form
        - display error information
          - Error Information: the field responses are lost upon triggering an error
            - use variables to store the information
            - use "required" "<input required type="">" for prelimary validations

    2. "includes/email.php":
      - edit the form recipient
      - edit the types of files submitted

    3. "includes/editSender.php":
      - line 336, edit the form's sumbitter
      - Validations: line 348, edit validation requirements

      - edit the email contents and style
      - style line 284

      - edit Subject: line 178

    4. "includes/mailEngine.php":
      - code that sends the email

*/

  require_once("include/email.php");
  require_once("include/header.php");

?>
  <?php $color = "blue"; ?>
  <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

    <!-- <input type="text" name="color" value="blue"> -->
    <select required name="color">
      <option disabled selected value="">Please select a color</option>
      <option value="blue">blue</option>
      <option value="red">red</option>
      <option value="gray">gray</option>
      <option value="green">green</option>
    </select>

    <br>
    <br>

    <input type="text" name="name" tabindex="2">
    <p>name</p>
    <input type="password" name="password" tabindex="3">
    <p>password</p>
    <input type="text" name="email" tabindex="4">
    <p>email</p>
    <input type="text" name="song" tabindex="4">
    <p>song</p>
    <!-- add a file as an attachment -->
    <input style="margin-bottom: 20px;" type="file" name='photo' id='photo' tabindex="6">
    <!-- "inputTriggers.php": needed to submit / email the form but dont affect the form fields / content" -->
    <?php require("include/inputTriggers.php"); ?>
    <input type='submit' name='Submit' value='submit this information' tabindex="10">
  </form><!-- form -->

<?php require_once("include/footer.php"); ?>
