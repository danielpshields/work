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

  $getSet = false;

  $option = "";
  if (isset($_GET['getSet'])) {
    $infoUnsorted = false;
    $getSet = true;
    $option = $_GET['option'];
  }

 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

    <!-- only load the inputs if all empty -->
    <?php if ($infoUnsorted && !$getSet) { ?>

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

   <?php } else {

        //keep the GET values

        $savedInfo  = "&id="    . $student_ID;
        $savedInfo .= "&name="  . $student_name;
        $savedInfo .= "&email=" . $student_email;
        $savedInfo .= "&phone=" . $student_phone;

        if (empty($student_ID)) {
          $getRely   = true;
          $get_ID    = $_GET['id'];
          $get_name  = $_GET['name'];
          $get_email = $_GET['email'];
          $get_phone = $_GET['phone'];
        }

    ?>

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
      <h2>Create Ticket</h2>
      <!-- <h3>Select Petition Options</h3> -->
      <div id="ticket_head">
        <table id="petitionTable">
          <thead>
            <tr>
              <th colspan="2">Select Options</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!$option == "drop") { ?>
              <tr>
              <td><img src="image/icons/drop.png"></td>
              <td><a href="<?php echo $path; ?>create.php?getSet=true&option=drop<?php echo $savedInfo; ?>">Drop Courses</a></td>
              </tr>
            <?php } ?>

            <tr>
              <td><img src="image/icons/probation.png"></td>
              <td><a href="<?php echo $path; ?>create.php?getSet=true&option=probation">Academic Probation</a></td>
            </tr>
            <tr>
              <td><img src="image/icons/track.png"></td>
              <td><a href="<?php echo $path; ?>create.php?getSet=true&option=track">Off-Track Continuation</a></td>
            </tr>
            <tr>
              <td><img class="image_addOption_larger" src="image/icons/break.png"></td>
              <td><a href="<?php echo $path; ?>create.php?getSet=true&option=break">Petition to Break Residency</a></td>
            </tr>
            <tr>
              <td><img class="image_addOption_larger" src="image/icons/dual.png"></td>
              <td><a href="<?php echo $path; ?>create.php?getSet=true&option=dual">Dual Enrollment</a></td>
            </tr>
            <tr>
              <td><img src="image/icons/other.png"></td>
              <td><a href="<?php echo $path; ?>create.php?getSet=true&option=other">Other</a></td>
            </tr>
          </tbody>
        </table>

<!-- student information / TICKET SETUP -->
<!-- student information / TICKET SETUP -->
<!-- student information / TICKET SETUP -->

          <div id="student_information">
            <table>
              <tr>
                <th colspan="2">Ticket Information</th>
              </tr>
              <tr>
                <td><b>Name:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_name  : $student_name; ?>"></td>
              </tr>
              <tr>
                <td><b>UFID:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_ID    : $student_ID; ?>"></td>
              </tr>
              <tr>
                <td><b>Email:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_email : $student_email; ?>"></td>
              </tr>
              <tr>
                <td><b>Phone:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_phone : $student_phone; ?>"></td>
              </tr>
              <tr>
                <td><b>Major:</b></td>
                <td><input type="text" value=""></td>
              </tr>
            </table>
            <p><i><?php echo "date: " . $date_auto; ?></i></p>

            <?php if ($getSet) { ?>

              <div id="ticket_option_selection">
                <table>
                  <tr>
                    <th colspan="3">Selected Options</th>
                  </tr>
                  <tr>
                    <td><img src="<?php echo $path; ?>image/icons/<?php echo $option; ?>.png"></td>
                    <td><?php echo $option; ?></td>
                    <td><a href="">remove</a></td>
                  </tr>

                </table>
              </div><!-- ticket option selection -->
            <?php } ?>

                <input type="submit" name="submit" value="submit">
              </form>

          </div><!-- student information -->
      </div><!-- ticket Head -->

    </div><!-- page_ii -->

    <?php } ?>


  </div><!-- page -->

  <!-- <input type="submit" name="createPetition" value="Create Petition"> -->

<?php require("{$root}include/footer.php"); ?>
