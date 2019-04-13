
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
