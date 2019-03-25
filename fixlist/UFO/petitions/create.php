<?php
  $root  = "../";
  $path  = "";
  $title = "Create Petition";
  $page  = "";
  $style = "create";
  $post = "";
  $student_email = "";
  $student_phone = "";
  $stripped = false;
  require("{$root}include/header.php");
  if (isset($_POST['submit'])) {
    $post = $_POST['stripText'];
    $stripped = true;
    $split = explode(" ", $post);
    foreach ($split as $key => $value) {

      // get name
      // strpos("Name:");
      //   explode("space between");
      // strpos("Major:");


      // get phone number
      if (substr_count($value, "-") > 1) {
        $phone = $value;
        $student_phone = substr($phone, 0,12);
      }

      //  get email
      if (strpos($value, "@ufl.edu")) {
        $student_email = $value;
      }
    //  echo "<br>" . $key . " " . $value . "<br>";
    }
  }
 ?>
 <div class="page">
   <?php include("{$path}include/nav.php"); ?>

<!-- <pre>
     <?php print_r($split); ?>
   </pre> -->

   <?php if ($stripped) { ?>

   <form action="create.php" method="post">
     <input type="text" name="" value="<?php echo $student_phone; ?>"><br>
     <input type="text" name="" value="<?php echo $student_email; ?>"><br>
   </form>

    <?php } ?>


   <?php include("{$path}include/strip.php"); ?>
  </div><!-- page -->

  <!-- <input type="submit" name="createPetition" value="Create Petition"> -->

<?php require("{$root}include/footer.php") ;?>
