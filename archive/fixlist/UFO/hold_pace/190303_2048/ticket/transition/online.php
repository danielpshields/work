<?php
  $root = "../../";
  $page = "online";
  $pageName = "Transition: UF Online";
  require("{$root}include/header/header.php");
  require("{$root}include/db.php");

  if (isset($_POST['submit'])) {

    $ufoMajor = $_POST['ufoMajor'];
    $phone    = $_POST['phone'];
    $name     = $_POST['name'];

    $query  = "UPDATE pace_transition SET ";

    $query .= " studentID = ";
    $query .= "'" . $UFID . "',";

    $query .= " ufoMajor = ";
    $query .= "'" . $ufoMajor . "',";

    $query .= " phone = ";
    $query .= "'" . $phone . "',";

    $query .= " formSubmitted = ";
    $query .= "'" . $timeStamp . "',";

    $query .= " submitted = 1";

    $query .= " WHERE email = ";
    $query .= "'" . $email . "'";

    $spitQuery = mysqli_query($connection, $query);

    require("{$root}email/receipt/online/online_email.php");
    header("Location: success.php");
    exit;
  }
?>

  <form action="online.php" method="post">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="name" value="<?php echo $firstName; ?>">
    <div class="inputShell">
      <h3 class="blue">UF Online Major</h3>
      <p>Please select your desired UF Online major:</p>
      <select required name="ufoMajor">
        <option disabled selected value>Select a major</option>
        <option value="anthropology">Anthropology</option>
        <option value="biology">Biology</option>
        <option value="computerScience">Computer Science</option>
        <option value="criminology">Criminology</option>
        <option value="geography">Geography</option>
        <option value="geology">Geology</option>
        <option value="psychology">Psychology</option>
        <option value="sociology">Sociology</option>
      </select>
    </div><!-- input shell -->

    <div class="inputShell">
      <h3 class="orange">Remain in UF Online</h3>
      <p>I would like to remain in UF Online in the <a href="https://ufonline.ufl.edu/degrees/undergraduate/" target="_blank">UF Online degree program</a>.</p>
      <p>If I want to enroll in a campus degree program, I understand that I will need to reapply as a campus transfer.</p>
      <input required class="checkBox" type="checkbox" name="remain_ufOnline" value="">
    </div><!-- input shell -->

    <div class="inputShell">
      <h3 class="blue">Conditions</h3>
      <p>I understand that there may be conditions I need to meet in order to stay in good academic standing in my UF Online major, and my advisor will follow up with me to notify me of these conditions.</p>
      <input class="checkBox" type="checkbox" name="UFOconditions" value="">
    </div><!-- conditions input shell -->

    <div class="inputShell">
      <h3 class="orange">Contact Information</h3>
      <p>If your advisor needs to reach out to you regarding this form, please provide a preferred phone number.</p>
      <p><i>Your advisor will reach out to your UF email address as well if there are any updates regarding your transition to campus.</i></p>
      <input type="text" name="phone" value="" placeholder="( *** ) *** - ****">
      <label for="phoneNumber">Phone Number</label>
    </div><!-- input shell -->



    <input class="submitButton" type="submit" name="submit" value="submit">

  </form>
<?php require("{$root}include/footer.php"); ?>
