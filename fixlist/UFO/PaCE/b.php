<?php
  require("include/header.php");
  // include("include/functions.php");
  // $id = "";
  //
  //
  // if (isset($_POST)) {
  //   $id = $_POST["ufId"];
  //   if ($id !== $UFID) {
  //     $error = "Please re-enter UF ID!";
  //   } else {
  //     redirectTo("a.php");
  //   }
  // }
  // $error = "";

?>
  <?php
  foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n<br><br>";
}
?>
  <?php echo $svg; ?>

  <pre>

    <?php print_r($_POST); ?>

  </pre>




<h2>Transition Candidate Information</h2>

<div class="monospace">

  <p><?php echo $nameBusiness; ?></p>
  <p><?php echo $UFID; ?></p>
  <p><i><?php echo $email; ?></i></p>

</div><!-- monospace -->

    <h2>Terms of Transition</h2>

    <p>In order to transition to campus, you must meet all conditions of the Pathway to Campus Enrollment (PaCE) Contract:</p>

    <ul>
      <li>Earn a total of 60 credits (up to 45 credits may come from previous college credits earned through AP, IB, Dual Enrollment, or other accelerated methods)</li>

      <li>Enroll in UF Online for at least two semesters and earn at least 15 credit hours through UF Online</li>

      <li>Complete all prerequisite or tracking requirements with required grades for your selected PaCE major</li>

      <li>The University of Florida reserves the right to ask for additional information and the right to deny the request for transition to campus.</li>

      <li>If you have any questions about your eligibility or the transition process, please contact your academic advisor.</li>
    </ul>


<!-- start inputs  -->

    <div class="inputShell">
      <input type="text" name="phoneNumber" value="" placeholder="( *** ) *** - ****">
      <label for="phoneNumber">Phone Number</label>
    </div>

    <div class="inputShell">
      <input type="text" name="college" value="" placeholder="Agriculture, Arts, Business...">
      <label for="college">College</label>
    </div>

    <div class="inputShell">
      <input type="text" name="paceMajor" value="" placeholder="Accounting, Music, Zoology">
      <label for="paceMajor">PaCE Major</label>
    </div>

    <input id="submitButton" type="submit" name="submit" value="submit">

<!-- end inputs  -->

<?php require("include/footer.php"); ?>
