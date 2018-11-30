<?php require("include/header.php"); ?>

  <h2>Thank you for submitting the form, <?php echo $firstName; ?>!</h2>
  <p>Your information has been accepted!</p>


  <form action="index.html" method="post">

    <p>Please provide a preferred phone number if you would like to be contacted by phone.</p>
    <div class="inputShell">
      <h3>Contact Informaton</h3>
      <input type="text" name="phoneNumber" value="" placeholder="( *** ) *** - ****">
      <label for="phoneNumber">Phone Number</label>
      <input type="text" value="<?php echo $email; ?>">
      <label for="email">Email</label>
    </div>
  </form>

<?php require("include/footer.php"); ?>
