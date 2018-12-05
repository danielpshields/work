<?php require("include/header.php"); ?>

  <h2>Thank you for submitting the form!</h2>

  <p id="thankYou">Your information has been accepted, <?php echo $firstName; ?>!</p>

  <form action="https://admissions.ufl.edu/learn/pace/" method="post">

    <div class="inputShell">
      <h3>Contact Informaton</h3>

      <p>Please provide a preferred phone number if you'd like to be reached by phone.</p>

      <input type="text" name="phoneNumber" value="" placeholder="( *** ) *** - ****">

      <label for="phoneNumber">Phone Number</label>


    </div><!-- input shell -->

    <input class="submitButton" type="submit" name="submit" value="submit">

  </form>

<?php require("include/footer.php"); ?>
