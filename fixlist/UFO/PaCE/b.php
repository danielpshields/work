<?php
  require("include/header.php");
?>

  <h2><?php echo $firstName; ?>, please provide your:</h2>

 <!-- start inputs  -->

 <form action="c.php" method="post">

     <div class="inputShell">
       <input type="text" name="college" value="" placeholder="Agriculture, Arts, Business...">
       <label for="college">College*</label>
     </div>

     <div class="inputShell">
       <input type="text" name="paceMajor" value="" placeholder="Accounting, Music, Zoology">
       <label for="paceMajor">PaCE Major*</label>
     </div>

     <div class="inputShell">
       <input type="text" name="phoneNumber" value="" placeholder="( *** ) *** - ****">
       <label for="phoneNumber">Phone Number</label>
     </div>


     <input id="submitButton" type="submit" name="submit" value="submit">

 <!-- end inputs  -->

</form>


<?php require("include/footer.php"); ?>
