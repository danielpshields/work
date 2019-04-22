<!-- https://stackoverflow.com/questions/47435708/why-i-cant-display-same-result-twice-using-mysqli-fetch-assoc -->
<?php
  $dbhost = "69.195.124.129";
  $dbuser = "loneson6_admin";
  $dbpass = "@Roor1141";
  $dbname = "loneson6_ln";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()) { die("connection failed" . mysqli_connect_error() . mysqli_connect_errno()); }

  $db_query = "SELECT * FROM sweets";
  $query    = mysqli_query($connection, $db_query);
  if (!$query) {die("cannot query sweets");}

  $list = [];

  while($row=mysqli_fetch_assoc($query)) {
      $list[] = $row;
  }

  ksort($list);
  echo '<pre>';
  print_r($list);
  echo '</pre>';


  foreach ($list as $key) {
    echo $key['item'] . '<br>';
    echo $key['sort'] . '<br>';
    echo $key['id'] . '<br>';
  }

?>
