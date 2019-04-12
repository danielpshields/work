<?php
  $root  = "../";
  $path  = "";
  $title = "Petition: Create";
  $page  = "petitions";
  $style = "create";
  $tabIndex = 1;
  $post  = "";
  $student_name  = "";
  $student_email = "";
  $student_phone = "";
  $student_ID    = "";
  $infoUnsorted  = true;
  require("{$root}include/header.php");

  if (isset($_POST['strip_submit'])) {
    $infoUnsorted = false;
    include("{$path}include/stripSubmit.php");
  }

  if (isset($_POST['manual_submit'])) {
    $infoUnsorted = false;
    $student_name  = $_POST['manual_student_name'];
    $student_email = $_POST['manual_student_email'];
    $student_phone = $_POST['manual_student_phone'];
    $student_ID    = $_POST['manual_student_id'];
  }
 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

    <!-- only load the inputs if all empty -->
    <?php if ($infoUnsorted) { ?>

      <div id="infoUnsorted">

        <form class="addInfoBox" action="create.php" method="post">
          <h3>Manual Input</h3>
          <input type="text" name="manual_student_name"  value="" placeholder="Martha Gator" tabindex="<?php echo $tabIndex++; ?>">
          <p>Name</p>
          <input type="text" name="manual_student_id"    value="" placeholder="12344321" tabindex="<?php echo $tabIndex++; ?>">
          <p>UFID</p>
          <input type="text" name="manual_student_email" value="" placeholder="mgator@ufl.edu" tabindex="<?php echo $tabIndex++; ?>">
          <p>Email</p>
          <input type="text" name="manual_student_phone" value="" placeholder="202-555-0154" tabindex="<?php echo $tabIndex++; ?>">
          <p>Phone</p>
          <input class="submitButton" type="submit" name="manual_submit" value="Enter Text" tabindex="<?php echo $tabIndex++; ?>">
        </form>

        <form class="addInfoBox" action="create.php" method="post">
          <h3>Advisior Notes <i>(Strip)</i></h3>
          <input type="text" name="strip_student_id" value="" placeholder="12344321" tabindex="<?php echo $tabIndex++; ?>">
          <p>UFID</p>
          <textarea name="stripText" rows="8" placeholder="<?php echo $holdText; ?>" tabindex="<?php echo $tabIndex++; ?>"></textarea>
          <input class="submitButton" type="submit" name="strip_submit" value="Pull Content" tabindex="<?php echo $tabIndex++; ?>">
        </form>

      </div><!-- unsorted information section -->

   <?php } else { ?>


        <!-- <ul id="statusBar">
          <li style="background: #7AC0FF;">initialized</li>
          <li style="background: #8985FF;">sent</li>
          <li style="background: #FFDD70;">receieved/commented</li>
          <li style="background: #FFC470;">approved/denied</li>
        </ul> -->

        <ul id="statusBar">
          <li style="background: #7AC0FF;">initialize</li>
          <li style="background: #FFF; color: #a0a0a0; border: 1px dotted #a0a0a0;">sent</li>
          <li style="background: #FFF; color: #a0a0a0; border: 1px dotted #a0a0a0;">receieved/commented</li>
          <li style="background: #FFF; color: #a0a0a0; border: 1px dotted #a0a0a0;">approved/denied</li>
        </ul>


    <div id="page_ii">
      <h2>Ticket Information</h2>
      <div id="ticket_head">

        <table id="petitionTable">
          <thead>
            <tr>
              <th>Select</th>
              <th>Petition Options</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <!-- <td>A <img src="image/icons/rain.png"></td> -->
              <td><img src="image/icons/cancel.png"></td>
              <td>
                <h3>Drop Courses</h3>
                <p>Petition to drop the following course(s) from the current term by the published deadline:</p>

                <?php $i = 0; ?>

                <p id="addCoursesOption"><i>(+) add courses</i></p>
                <form action="index.html" method="post">

                  <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
                  <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">
<!--
                  <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
                  <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">

                  <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
                  <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">

                  <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
                  <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;">

                  <input type="text" name="drop_course_prefix_<?php echo ++$i; ?>" value="" placeholder="Prefix/Code">
                  <input type="text" name="drop_course_number_<?php echo $i; ?>" value="" placeholder="Course  &#35;"> -->
                </form>

              </td>

            </tr>
            <tr>
              <td><img src="image/icons/handcuffs.png"></td>
              <td>
                <h3>Academic Probation</h3>
                <input type="text" name="" value="" placeholder="Major">
              </td>

            </tr>
            <tr>
              <td><img src="image/icons/route.png"></td>
              <td>
                <h3>Off-Track Continuation</h3>
                Continuation in CLAS Major

                Off-track two consecutive terms in:
                <br>
                <input type="text" name="" value="" placeholder="major">
                <br>

                ☐Two unsuccessful attempts of required course(s) for major:
                <br>
                Course(s):
                <br>
                <input type="text" name="" value="course one">
                <br>
                <input type="text" name="" value="course two">
              </td>
            </tr>
            <tr>
              <td><img src="image/icons/escape.png"></td>
              <td><h3 title="• If your petition is approved:	Submit a transient form at www.floridashines.org for state colleges and universities or attach a hard copy transient form found at http://registrar.ufl.edu/forms.html for private or out-of-state institutions.
">Petition to Break Residency</h3></td>

            </tr>
            <tr>
              <td><img src="image/icons/moving.png"></td>
              <td>
                <h3>Dual Enrollment</h3>
                  <input type="text" name="" value="" placeholder="other institution name">
              </td>
              </tr>
              <tr>
                <td><img src="image/icons/information.png"></td>
                <td><h3>Other</h3></td>
              </tr>
              <tr>
                <td><img src="image/icons/comments.png"></td>
                <td>
                  <h3>Comments:</h3>
                  <textarea name="name" placeholder="there should be a second view where stipulations are input"></textarea>
                  <input type="submit" name="commentsSubmit" value="add comments">
                </td>
              </tr>
            </tbody>
          </table>

<!-- student information / TICKET SETUP -->
<!-- student information / TICKET SETUP -->
<!-- student information / TICKET SETUP -->

          <div id="student_information">
            <table>
              <tr>
                <td colspan="2"><i><?php echo "date: " . $date_auto; ?></i></td>
              </tr>
              <tr>
                <td><b>Name:</b></td>
                <td><input type="text" value="<?php echo $student_name; ?>"></td>
              </tr>
              <?php if (!empty($student_ID)) { ?>
              <tr>
                <td><b>UFID:</b></td>
                <td><input type="text" value="<?php echo $student_ID;  ?>"></td>
              </tr>
              <?php } ?>
              <tr>
                <td><b>Email:</b></td>
                <td><input type="text" value="<?php echo $student_email; ?>"></td>
              </tr>
              <tr>
                <td><b>Phone:</b></td>
                <td><input type="text" value="<?php echo $student_phone; ?>"></td>
              </tr>
            </table>


            <div id="ticket_option_selection">
              <?php $option = 0; ?>
              <div class=""><?php echo $option++; ?>
                <p style="color: green;">&#10004;</p>
              </div>
              <div class=""><?php echo $option++; ?></div>
              <div class=""><?php echo $option++; ?></div>
              <div class=""><?php echo $option++; ?></div>
              <div class=""><?php echo $option++; ?></div>
              <div class=""><?php echo $option++; ?></div>
            </div><!-- ticket option selection -->

            <input type="submit" name="submit" value="submit">

          </div><!-- student information -->
      </div><!-- ticket Head -->

    </div><!-- page_ii -->

    <?php } ?>


  </div><!-- page -->

  <!-- <input type="submit" name="createPetition" value="Create Petition"> -->

<?php require("{$root}include/footer.php"); ?>
