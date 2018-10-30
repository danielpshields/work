<?php
  $path = "../";
  $page = "docs";
  require_once("{$path}include/header.php");
?>

  <h2>Evaluation Emails</h2>



  <ol>
    <li>Gather info from the Sign in management console</li>
    <li>Insert into acadvise.evaluation_emails</li>
    <li>Activate <i>/emailscripts/sendeval.php</i></li>
  </ol>
  <ul>
    <li><b>ToDo</b>: <i>Automate();</i></li>
  </ul>

  <?php
    $frequency = "52";
    include("{$path}include/table.php");
    ?>


<?php include_once("{$path}include/footer.php"); ?>
