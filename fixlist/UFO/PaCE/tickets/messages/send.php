<?php
  $page = "submitted";
  $ticketPath = "../";
  $root = "../../";
  require("{$root}include/header.php");
  $to = $_POST['email'];
?>

    <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
      <input type="text" name="to" value="<?php echo $to; ?>">
      <?php include("include/inputTriggers.php"); ?>
      <input class="submitButton" type="submit" name="submit" value="submit">
    </form>


<?php require("{$root}include/footer.php"); ?>
