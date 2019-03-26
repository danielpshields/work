<?php
  $root  = "../";
  $path  = "";
  $title = "Create Petition";
  $page  = "petitions";
  $style = "create";
  $post = "";
  $student_name = "";
  $student_email = "";
  $student_phone = "";
  $stripped = false;
  require("{$root}include/header.php");
  if (isset($_POST['submit'])) {
    include("{$path}include/sortingFunctions.php");
  }
 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

    <?php
      if (!$stripped) {
        $holdText =
        "Appointment Notes:\r
        Name:  First (Nickname) Last\n
        Major:  MJR\n
        Phone:  000-000-0000\n
        UF Email:  address@ufl.edu\n
        Status:  Continuing\n
        Reason for Appt: Reg question\n
        Other: Additional Information\n
        ";
    ?>
      <form id="stripText" action="create.php" method="post">
        <textarea name="stripText" rows="8" cols="80" placeholder="<?php echo $holdText; ?>" tabindex="1"></textarea>
        <input type="submit" name="submit" value="pull text" tabindex="2">
      </form>
    <?php } ?>

   <form id="setUp" action="create.php" method="post">
     Name : <input type="text" name="" value="<?php echo $student_name; ?>"><br>
     Email: <input type="text" name="" value="<?php echo $student_email; ?>"><br>
     Phone: <input type="text" name="" value="<?php echo $student_phone; ?>"><br>
   </form>


  </div><!-- page -->

  <!-- <input type="submit" name="createPetition" value="Create Petition"> -->

<?php require("{$root}include/footer.php") ;?>
