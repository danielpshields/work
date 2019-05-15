<header>
  <p>[ln]</p>
  <h2 id="date"><?php echo $date; ?></h2>
  <p><?php

  $bank = array();
  while ($row = mysqli_fetch_assoc($read)) {
      $credit = $row['credit'];
      $bank[] = $credit;
  }

  $total = array_sum($bank);
  echo "$" . $total;

 ?></p>


 </header>
