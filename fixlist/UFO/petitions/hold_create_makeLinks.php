<?php
           $menuOptions = array();
           foreach ($selectedOptions   as $number   => $option) {
             foreach ($petitionOptions as $petition => $description) {
               if (!in_array($petition, $selectedOptions)) {
                 $menuOptions[$petition] = $description;
               }
             }
             break;
           }

           if (empty($menuOptions)) {
             foreach ($petitionOptions as $petition => $description) { ?>
               <tr>
                 <td><img src="image/icons/<?php echo $petition; ?>.png"></td>
                 <td><a href="<?php echo $path; ?>create.php?getSet=true<?php echo $savedUserInformation . "&" . $petition . "=true"; ?>"><?php echo $description; ?></a></td>
               </tr>
             <?php }
           } else {
             foreach ($menuOptions as $name => $menu) { ?>
               <tr>
                 <td><img src="image/icons/<?php echo $name; ?>.png"></td>
                 <td><a href="<?php echo $path; ?>create.php?getSet=true<?php echo $savedUserInformation . "&" . $name . "=true"; ?>"><?php echo $menu; ?></a></td>
               </tr>
           <?php }
          } ?>
