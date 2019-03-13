<?php

  $dbhost = "ict-prod-hosting03.mysql.osg.ufl.edu:3360";
  $dbuser = "acadvise";
  $dbpass = "PodWVF06s4cfU156p1Bb";
  $dbname = "acadvise";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()) { die("connection failed " . mysqli_connect_error() . mysqli_connect_errno()); } else {
    echo "it works";
    
  }

?>

<?php
// $con = mysql_connect("ict-prod-hosting03.mysql.osg.ufl.edu:3360","acadvise","PodWVF06s4cfU156p1Bb");
// 	if (!$con)
// 	{
// 	die('Could not connect: ' . mysql_error());
// 	}
// mysql_select_db("acadvise", $con);
?>
