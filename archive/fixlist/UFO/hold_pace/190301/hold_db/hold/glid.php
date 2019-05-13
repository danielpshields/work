<?php
  $root = "../";
  $page = "glid";
  include("{$root}include/header/header.php"); ?>

  <div id="variablesShell">
    <ul>
      <li><?php echo $date_auto    ; ?></li>
      <li><?php echo $UFID         ; ?></li>
      <li><?php echo $email        ; ?></li>
      <li><?php echo $firstName    ; ?></li>
      <li><?php echo $nameGiven    ; ?></li>
      <li><?php echo $nameBusiness ; ?></li>
    </ul>
  </div><!-- variables shell -->

<?php include("{$root}include/footer.php"); ?>
