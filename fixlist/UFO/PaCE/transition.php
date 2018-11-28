<?php
  // $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $date_auto    = date("m-d-Y");
  // $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  // $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  // $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
  // $lastName     = $_SERVER['HTTP_UFSHIB_SN'];

  $UFID         = "40811353";
  // $date_auto    = "2018-11-27";
  // $date_auto    = date("m-d-Y H:i:s");
  $nameBusiness = "Catalano,Alex Hunter";
  $email        = "acatalano2@ufl.edu";
  $firstName    = "Alex";
  $lastName     = "Catalano";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaCE Transition Form</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <div id="uf_logo"><?php include("image/uf_logo.svg"); ?></div>
      <h1>PaCE Transition Form</h1>
      <div class="clear"></div>
    </header>

    <h2>Terms of Transition</h2>

    <p>In order to transition to campus, you must meet all conditions of the Pathway to Campus Enrollment (PaCE) Contract:</p>

    <ul>
      <li>Earn a total of 60 credits (up to 45 credits may come from previous college credits earned through AP, IB, Dual Enrollment, or other accelerated methods)</li>

      <li>Enroll in UF Online for at least two semesters and earn at least 15 credit hours through UF Online</li>

      <li>Complete all prerequisite or tracking requirements with required grades for your selected PaCE major</li>

      <li>The University of Florida reserves the right to ask for additional information and the right to deny the request for transition to campus.</li>

      <li>If you have any questions about your eligibility or the transition process, please contact your academic advisor.</li>
    </ul>

    <h2>Transition Candidate Information</h2>

    <div class="monospace">

      <p><?php echo $nameBusiness; ?></p>
      <p><?php echo $UFID; ?></p>
      <p><i><?php echo $email; ?></i></p>

    </div><!-- monospace -->

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

<!-- end inputs  -->

    <h2>Transition Decision and Statement of Understanding</h2>
    <p>Please read and initial either <script>Option A</script> or Option B</p>

      <p>Option A. ______ I give permission for my advisor to transition me to campus enrollment for the

      <b><?php echo "\$semester/\$term"; ?></b>

      <select class="" name="">
        <option value="spring">spring</option>
        <option value="summer">summer</option>
        <option value="fall">fall</option>

      </select>

      term in the PaCE major I listed above.
      ______ I understand that I must meet the following conditions in order to transition to campus:

  <ol>
    <li><?php echo "INSERT * \$STIPULATION"; ?></li>
    <li><?php echo "INSERT * \$STIPULATION"; ?></li>
    <li><?php echo "INSERT * \$STIPULATION"; ?></li>
  </ol>
  <input type="checkbox">
  If I want to return to UF Online in the future, I understand that I must reapply to UF Online.



  <input type="checkbox">
  If I want to start on campus in a non-PaCE major, I understand that I must apply to campus as a transfer student in that major by the published transfer deadline, and be accepted into that major.



  <input type="checkbox">
  If I am currently enrolled in any UF Online courses for upcoming semesters, I will drop those courses before I submit this contract to my advisor.


  Option B. _____ I would like to remain in UF Online in the __________________ UF Online degree program. If I want to enroll in a campus degree program, I understand that I will need to reapply as a campus transfer.


Signatures:
 _________________________ 		_______________________________


 <p><b>Date:</b> <?php echo  $date_auto . ""; ?></p>


  </body>
</html>
