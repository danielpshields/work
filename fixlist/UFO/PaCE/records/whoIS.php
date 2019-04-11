<?php if ($searchFor == "whoIS") { ?>
  <h3 class="black"><?php
    if (isset($whoIS)) {
      echo $whoIS;
    } else {
      echo "print_env";
    }
  ?></h3>
  <p style="font-family: monospace;">
    <?php
      echo $_SERVER['HTTP_UFSHIB_BUSINESSNAME'] . "<br>";
      echo $_SERVER['HTTP_UFSHIB_GIVENNAME']." ".$_SERVER['HTTP_UFSHIB_SN'] . "<br>";
      echo $_SERVER['HTTP_UFSHIB_GIVENNAME'] . "<br>";
      echo $_SERVER['HTTP_UFSHIB_UFID'] . "<br>";
      echo "(EPPN) " . $_SERVER['HTTP_UFSHIB_EPPN'] . "<br>";
      echo "(MAIL) " . $_SERVER['HTTP_UFSHIB_MAIL'] . "<br>";
    ?>
  </p>

<?php } ?>
