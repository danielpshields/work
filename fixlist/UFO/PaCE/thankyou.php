<?php
  $page = "thankyou";
  require("include/header.php");
?>

  <h2>Thank you for submitting the transition form!</h2>

  <p id="thankYou">Your information has been accepted, <?php echo $firstName; ?>!</p>

  <form action="https://admissions.ufl.edu/learn/pace/" method="post">

    <div class="inputShell">
      <h3>Contact Informaton</h3>

      <p>If you'd like to be contacted by phone, please provide a preferred phone number.</p>

      <input required type="text" name="phoneNumber" value="" placeholder="( *** ) *** - ****">

      <label for="phoneNumber">Phone Number</label>

      <p>Feel free to close the form and exit if you'd prefer to be contacted at: <b><?php echo $email; ?></b></p>

    </div><!-- input shell -->

    <input class="submitButton" type="submit" name="submit" value="submit phone number">

  </form>

<?php require("include/footer.php"); ?>
