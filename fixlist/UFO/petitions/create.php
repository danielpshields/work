<?php
  $root  = "../";
  $path  = "";
  $title = "Petition: Create";
  $page  = "petitions";
  $style = "create";
  $tabIndex = 1;
  $post  = "";
  $post_name  = "";
  $post_email = "";
  $post_phone = "";
  $post_ID    = "";
  $selectedOptions    = array();
  $alphnfoUnsorted  = true;
  require("{$root}include/header.php");

  if (isset($_POST['strip_submit'])) {
    $alphnfoUnsorted = false;
    include("{$path}include/stripSubmit.php");
  }

  if (isset($_POST['manual_submit'])) {
    $alphnfoUnsorted = false;
    $post_name  = $_POST['manual_student_name'];
    $post_email = $_POST['manual_student_email'];
    $post_phone = $_POST['manual_student_phone'];
    $post_ID    = $_POST['manual_student_id'];
  }

  $getSet = false;
  if (isset($_GET['getSet'])) {
    $getSet = true;
    $alphnfoUnsorted = false;
  }

  // $petitionOptions;
  // $selectedOptions;
  // $menuOptions;

  // if ($) {
  //   $selectMenu  = false;
  //   $displayMenu = true;
  // }

 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

    <!-- only load the inputs if all empty -->
    <?php

    if ($alphnfoUnsorted && !$getSet) {

      include("{$path}include/create_unsorted.php");

    } else {

      $alph = "A";
      $petitionOptions = array(
        "drop"      => "Drop Courses",
        "probation" => "Academic Probation",
        "track"     => "Off-Track Continuation",
        "break"     => "Petition to Break Residency",
        "dual"      => "Dual Enrollment",
        "other"     => "Other"
      );


        // post vars exist
        if (!empty($post_ID)) {
          $savedUserInformation  = "&id="    . $post_ID;
          $savedUserInformation .= "&name="  . $post_name;
          $savedUserInformation .= "&email=" . $post_email;
          $savedUserInformation .= "&phone=" . $post_phone;
          // foreach ($petitionOptions as $key => $value) {
          //   $savedUserInformation .= "&option" . $alph++ . "=";
          // }
        } else {
          // post -- post vars -- set the information string to a get string
          $getRely   = true;
          $get_ID    = $_GET['id'];
          $get_name  = $_GET['name'];
          $get_email = $_GET['email'];
          $get_phone = $_GET['phone'];
          $savedUserInformation  = "&id="    . $_GET['id'];
          $savedUserInformation .= "&name="  . $_GET['name'];
          $savedUserInformation .= "&email=" . $_GET['email'];
          $savedUserInformation .= "&phone=" . $_GET['phone'];
          $resetGET = $savedUserInformation;
          $selectedOptions = array();
          foreach ($petitionOptions as $key => $value) {

            if (isset($_GET[$key])) {
              $savedUserInformation .= "&" . $key . "=true";
              array_push($selectedOptions, $key);
            }
          }
        }

        // echo "<pre>";
        // print_r($selectedOptions);
        // echo "</pre>";

    ?>

    <ul id="statusBar">
      <li style="background: #7AC0FF;">initialize</li>
      <li style="background: #FFF; color: #a0a0a0; border: 1px dotted #a0a0a0;">sent</li>
      <li style="background: #FFF; color: #a0a0a0; border: 1px dotted #a0a0a0;">receieved/commented</li>
      <li style="background: #FFF; color: #a0a0a0; border: 1px dotted #a0a0a0;">approved/denied</li>
    </ul>

    <div id="page_ii">
      <h2>Create Ticket</h2>
      <div id="ticket_head">
        <table id="petitionTable">
          <thead>
            <tr>
              <th colspan="2">Select Options</th>
            </tr>
          </thead>
          <tbody>
           <?php
              $menuOptions = array();
              foreach ($selectedOptions   as $number   => $option) {
                foreach ($petitionOptions as $petition => $description) {
                  if (!in_array($petition, $selectedOptions)) {
                    $menuOptions[$petition] = $description;
                  }

                  $i = 0;
                  echo $i;
                  $i++;


                }
                break;
              }

              if (empty($menuOptions)) {
                foreach ($petitionOptions as $key => $value) { ?>
                  <tr>
                    <td><img src="image/icons/<?php echo $key; ?>.png"></td>
                    <td><a href="<?php echo $path; ?>create.php?getSet=true<?php echo $savedUserInformation . "&" . $key . "=true"; ?>"><?php echo $value; ?></a></td>
                  </tr>
                <?php }
              } else {
                foreach ($menuOptions as $petition => $description) { ?>
                  <tr>
                    <td><img src="image/icons/<?php echo $petition; ?>.png"></td>
                    <td><a href="<?php echo $path; ?>create.php?getSet=true<?php echo $savedUserInformation . "&" . $petition . "=true"; ?>"><?php echo $description; ?></a></td>
                  </tr>
              <?php }
             } ?>

          </tbody>
        </table>

          <div id="student_information">
            <table>
              <tr>
                <th colspan="2">Ticket Information</th>
              </tr>
              <tr>
                <td><b>Name:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_name  : $post_name; ?>"></td>
              </tr>
              <tr>
                <td><b>UFID:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_ID    : $post_ID; ?>"></td>
              </tr>
              <tr>
                <td><b>Email:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_email : $post_email; ?>"></td>
              </tr>
              <tr>
                <td><b>Phone:</b></td>
                <td><input type="text" value="<?php echo isset($getRely) ? $get_phone : $post_phone; ?>"></td>
              </tr>
              <!--
                <tr>
                  <td><b>Major:</b></td>
                  <td><input type="text" value=""></td>
                </tr>
              -->
            </table>
            <p><i><?php echo "date: " . $date_auto; ?></i></p>

            <?php if ($getSet) { ?>

              <div id="ticket_option_selection">
                <table>
                  <tr>
                    <th colspan="3">Selected Options</th>
                  </tr>
                  <?php
                  foreach ($selectedOptions as $key => $value) {
                    foreach ($petitionOptions as $petition => $description) {
                      if ($value == $petition) { ?>

                        <tr>
                          <td><img src="<?php echo $path; ?>image/icons/<?php echo $value; ?>.png"></td>
                          <td><?php echo $description; ?></td>
                          <td><a href="#"><i>(delete)</i></a></td>
                        </tr>
                        <?php
                      }
                    }
                  }
                  ?>
                    <tr>
                      <td id="resetGET" colspan="3"><a href="create.php?getSet=true<?php echo $resetGET; ?>">reset selections</a></td>
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
