
      <?php
      // rows
      while($row = mysqli_fetch_assoc($spitResults)) {
        $conditionsExist = true;
        // columns
        require("{$root}include/variables.php");
        $breakCreated = explode("|", $formCreated);
        $monthDay     = $breakCreated[0];
        $hourTime     = $breakCreated[1];
        ?>
          <div class="barrier">
            <dl>
              <dt>
                <div class="list_barrierHeader">
                  <?php
                    if ($submitted == 0) { $formUpdated = false; ?>
                    <p class="pending">pending</p>
                  <?php } else if ($submitted == 1) { $formUpdated = true;  ?>
                    <p class="submitted">campus</p>
                  <?php } else if ($submitted == 2) { $formUpdated = true; ?>
                    <p class="approved">approved</p>
                  <?php } else if ($submitted == 3) { $formUpdated = true;  ?>
                    <p class="ufoSelected">uf online</p>
                  <?php } else if ($submitted == 4) { $formUpdated = true; ?>
                    <p class="ufoApproved">approved</p>
                  <?php } ?>
                  <div class="studentIdentification">
                    <p class="studentID"><?php echo $db_ID; ?></p>
                    <h3><?php echo $db_email; ?></h3>
                  </div><!-- student Identification -->
                  <p class="timeCreated"><?php echo $monthDay; ?></p>
                </div><!-- barrier header -->
              </dt><!-- Barrier Header Dropdown -->
              <dd>
                <?php include("{$root}include/guts.php") ?>
                <?php
                  if ($formUpdated) {
                    $break_submitted = explode("|", $formSubmitted);
                    $monthDay     = $break_submitted[0];
                    $hourTime     = $break_submitted[1];
                    ?>
                    <div class="formCreated">
                      <p>student submitted: <b><?php echo $monthDay . "</b> at <b>" . $hourTime; ?></i></b></p>
                    </div><!-- form created -->
                <?php } else { ?>
                  <div class="formCreated">
                    <p>ticket is pending</p>
                  </div><!-- form created -->
                <?php }?>
              </dd>
              <div class="barrier_notes">
                <?php
                $loopNotes    = "SELECT * FROM pace_student_notes WHERE email = ";
                $loopNotes   .= "'" . $db_email . "'";
                $getNoteCountQuery = mysqli_query($connection, $loopNotes);
                ?>
                <p class="note_theConstant"><a href="<?php echo $root; ?>records/notes.php?id=<?php echo $db_ID; ?>&email=<?php echo htmlentities($db_email); ?>"><?php
                $i = 0;
                while ($thisRow = mysqli_fetch_assoc($getNoteCountQuery)) {
                   $i++;
                }
                if ($i > 0) {
                  echo "notes (" . $i . ")";
                } else {
                  echo "new note";
                }
                ?>
              </a></p>
                <div class="note_variants">
                  <div class="variantsContainer">
                    <p><!--<a href="<?php echo $root; ?>records/edit.php?id=<?php echo $db_ID; ?>&email=<?php echo htmlentities($db_email); ?>">--><?php echo $db_ID; ?><!--</a>--></p>
                    <p>
                      <?php
                        if ($submitted == 0) {
                          echo "pending";
                        } else if ($submitted == 1 || $submitted == 3) {
                          echo "<a href=\"approve.php?id=" . $db_ID . "&submitted=" . $submitted . "&email=" . htmlentities($db_email) . "\"><span class=\"approved\"><b>approve</b></span></a>";
                        } else if ($submitted == 2 || $submitted == 4)  {
                          echo "approved";
                        }
                      ?>
                    </p>
                  </div><!-- variants container -->
                </div><!-- note variants -->
              </div>
            </dl>
          </div><!-- master result Barrier -->

          <?php if (empty($row)) { echo "empty row"; } ?>
          <?php } ?><!-- end Grande while $row assoc -->
