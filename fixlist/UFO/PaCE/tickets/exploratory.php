<?php
  $root = "../";
  $page = "exploratory";
  require("{$root}include/header.php");
  $name = "";
  $email = "";
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
  }
  $to = $email;
  $advisor = "nicole";
?>
  <h2>Preview: Exploratory Ticket</h2>

  <pre>
    <?php print_r($_POST); ?>
  </pre>


  <?php
    // $emailBodyFormType = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit a end end end</p>';
    // $emailBodyFormType = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a end end end</p>';

    // $emailBodyFormType = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a >Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a end end end</p>';
    // $emailBodyFormType = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a end end end</p>';

    // $emailBodyFormType = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit aLorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a end end end</p>';


    // $emailBodyFormType = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit aLorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing end end end</p>';

    $emailBodyFormType = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit aLorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur adipisicing elit a Lorem ipsum dolor sit amet, consectetur end end end</p>';



  ?>


  <p><?php echo $emailBodyFormType . " : " . strlen($emailBodyFormType); ?></p>
  <!--

  Redirects:

    3078 failed (gen formatting)
    3073 passes (gen formatting)

    136  (one line / <p> ) == passes
    1088 (one line / <p> ) == passes
    2142 (one line / <p> ) == passes

    4265 (one line / <p> ) == fails
    3078 (one line / <p> ) == fails
    3066 (one line / <p> ) == fails

    3066




  -->




  <?php $troubleMaker = '<p>NOTE: This communication may contain information that is legally protected from unauthorized disclosure. If you are not the intended recipient, please note that any dissemination, distribution or copying of this communication is strictly prohibited. If you have received this message in error, you should notify the sender immediately by telephone or by return email and delete this message from your computer.</p>'; ?>


  <?php
    include("{$root}include/email/email.php");
  ?>

  <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <?php include("{$root}include/email/inputTriggers.php"); ?>
    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>



<?php require("{$root}include/footer.php") ;?>
