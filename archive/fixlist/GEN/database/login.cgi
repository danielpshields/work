<?php
$con = mysql_connect("ict-prod-hosting03.mysql.osg.ufl.edu:3360","acadvise","PodWVF06s4cfU156p1Bb");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
mysql_select_db("acadvise", $con);
?>
