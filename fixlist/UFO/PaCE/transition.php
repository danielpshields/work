<?php
  $UFID         = $_SERVER['HTTP_UFSHIB_UFID'];
  $date_auto    = date("Y-m-d H:i:s");
  $nameBusiness = $_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
  $email        = $_SERVER['HTTP_UFSHIB_MAIL'];
  $firstName    = $_SERVER['HTTP_UFSHIB_GIVENNAME'];
  $lastName     = $_SERVER['HTTP_UFSHIB_SN'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PaCE Transition Form</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <div id="uf_logo"><?php include("image/uf_logo.svg"); ?></div>
      <h1>PaCE Transition Form</h1>
      <div class="clear"></div>
    </header>
    <p>Date: <?php echo  $date_auto . "<br>"; ?></p>

<!--

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

-->

    <label for="">UF ID:</label>
    <input type="text" name="<?php echo $UFID; ?>" value="<?php echo $UFID; ?>">
    <br>
    <label for="">College:</label>

    <label for="">PaCE Major:</label>
    <input type="text" name="<?php ; ?>" value="">
    <input type="text" name="<?php ; ?>" value="">
    <br>
    <label for="">First Name:</label>
    <input type="text" name="<?php echo $firstName; ?>" value="<?php echo $firstName; ?>">
    <br>
    <label for="">Last Name:</label>
    <input type="text" name="<?php echo $lastName;?>" value="<?php echo $lastName;?>">
    <br>
    <label for="">Email:</label>
    <input type="text" name="<?php echo $email; ?>" value="<?php echo $email; ?>">
    <br>
    <label for="">Phone:</label>
    <input type="text" name="<?php ; ?>" value="">

    <h2>Transition Decision and Statement of Understanding</h2>
    <p><b>Please read and initial either Option A or Option B</b></p>

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

  <br>

  <input type="checkbox">
  If I want to start on campus in a non-PaCE major, I understand that I must apply to campus as a transfer student in that major by the published transfer deadline, and be accepted into that major.

  <br>

  <input type="checkbox">
  If I am currently enrolled in any UF Online courses for upcoming semesters, I will drop those courses before I submit this contract to my advisor.


  Option B. _____ I would like to remain in UF Online in the __________________ UF Online degree program. If I want to enroll in a campus degree program, I understand that I will need to reapply as a campus transfer.


Signatures:
 _________________________ 		_______________________________


  </body>
</html>
