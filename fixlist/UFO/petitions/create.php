<?php
  $root  = "../";
  $path  = "";
  $title = "Create Petition";
  $page  = "";
  $style = "";
  require("{$root}include/header.php");
 ?>


  <div class="page">
    <?php include("{$path}include/nav.php"); ?>
    <form action="create.php" method="post">
      <input type="text" name="" value=""><br>
      <input type="text" name="" value=""><br>
      <input type="text" name="" value=""><br>
      <input type="text" name="" value=""><br>
      <input type="submit" name="createPetition" value="Create Petition">
    </form>
  </div><!-- page -->


<?php require("{$root}include/footer.php") ;?>
