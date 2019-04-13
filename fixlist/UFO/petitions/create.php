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
  $option1 = "";
  $option2 = "";
  $option3 = "";
  $option4 = "";
  $option5 = "";
  $option6 = "";
  $optionA = "";
  $optionB = "";
  $optionC = "";
  $optionD = "";
  $optionE = "";
  $optionF = "";


  $i = "A";
  $petitionOptions = array(
    "drop"      => "Drop Courses",
    "probation" => "Academic Probation",
    "track"     => "Off-Track Continuation",
    "break"     => "Petition to Break Residency",
    "dual"      => "Dual Enrollment",
    "other"     => "Other"
  );

  if (isset($_GET['getSet'])) {
    $getSet = true;
    $infoUnsorted = false;

    $savedUserInformation  = "&id="    . $student_ID;
    $savedUserInformation .= "&name="  . $student_name;
    $savedUserInformation .= "&email=" . $student_email;
    $savedUserInformation .= "&phone=" . $student_phone;
    $getString = $savedUserInformation;

    foreach ($petitionOptions as $key => $value) {
      if (isset($_GET['option'.$i])) {
        $fooOption = $_GET['option'.$i];
        $barOption = "&option" . $i . "=";
        if ($key == $fooOption) {
          echo $getString .= $barOption . $fooOption;
        }
      }
    }

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

  }

 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

    <!-- only load the inputs if all empty -->
    <?php if ($infoUnsorted && !$getSet) {  include("{$path}include/create_unsorted.php");  } else {

        if (empty($student_ID)) {
          $getRely   = true;
          $get_ID    = $_GET['id'];
          $get_name  = $_GET['name'];
          $get_email = $_GET['email'];
          $get_phone = $_GET['phone'];
        }
    ?>

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

          <?php
            foreach ($petitionOptions as $key => $value) {
          ?>
              <tr>
                <td><img src="image/icons/<?php echo $key; ?>.png"></td>
                <td><a href="<?php echo $path; ?>create.php?getSet=true<?php echo $savedUserInformation; ?>&option<?php echo $i . "=" . $key; ?>"><?php echo $value; ?></a></td>
              </tr>
          <?php
              $i++;
            }
          ?>

          </tbody>
        </table>

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
              <!-- <tr>
                <td><b>Major:</b></td>
                <td><input type="text" value=""></td>
              </tr> -->
            </table>
            <p><i><?php echo "date: " . $date_auto; ?></i></p>

            <?php if ($getSet) { ?>

              <div id="ticket_option_selection">
                <table>
                  <tr>
                    <th colspan="3">Selected Options</th>
                  </tr>


                    <!-- <tr>
                      <td><img src="<?php echo $path; ?>image/icons/<?php echo $option . $i; ?>.png"></td>
                      <td><?php echo $option; ?></td>
                      <td><a href="">remove</a></td>
                    </tr>
         -->




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
