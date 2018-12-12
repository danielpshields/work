<?php
  $root = "../";
  $page = "glid";
  include("{$root}include/header.php"); ?>

<br>
    <?php echo $UFID         ; ?><br>
    <?php echo $email        ; ?><br>
    <?php echo $firstName   ; ?> <br>
    <?php echo $nameGiven    ; ?><br>
    <?php echo $nameBusiness ; ?><br>


<input style="height: 300px; width: 300px; display: block; margin: auto; margin-top: 2rem;" type="checkbox" name="checky" value="checky">

<?php include("{$root}include/footer.php"); ?>
