<?php

$query  = "SELECT * FROM pace_transition WHERE submitted = 1";
$spitIt = mysqli_query($connection, $query);

 while ($row = mysqli_fetch_assoc($spitIt)) {
   echo $row['paceMajor'];
 }

  ?>
