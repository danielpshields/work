<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
		<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Where Are We?</title>
  		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<!-- <link href="clas.css" rel="stylesheet" type="text/css"> -->
		<link rel="stylesheet" type="text/css" media="print" href="/css/print.css" />
		<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/css/manual.css" type="text/css" media="screen" />
		<link rel="icon" type="image/gif" href="/images/question.gif" />
		<style>
		body{background:none;}
		table.gridtable td{padding: 5px 0 0 0;}
		table.gridtable td:first-child{padding: 5px 8px 0 8px;}
		table.gridtable{width:100%;max-width:800px;margin:0px 0px 5px;}
		#mainContainer{width:100%;max-width:800px;}
		#manualcontent{width:100%;max-width:800px;}
		#header{width:100%;height:80px;}
		#header h3.left, #header h3.left a{color:white;float:left;margin-top:8px;}
		#header h3.right, #header h3.right a{color:white;float:right;margin-top:8px;}
		#header h3 a:hover{color:#FF4a00;}
</style>
</head>

<body>
<div id="header">
  <h3 class="left"><a href="/">A(lex)cademic Advising Center</a></h2>
  <h3 class="right"><a href="http://clas.ufl.edu">College of Liberal Arts and Sciences</a></h3>
</div>
<div id="mainContainer">
<div id="manualcontent">
<br />
<center><h3>Where Are We?</h3>
<p>Click the name to update your status.</p></center><br />

<?php
//db login

require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");

$count=mysql_query("select Name, status, DATE_FORMAT(wai_time,'%c/%e/%y') as date, DATE_FORMAT(wai_time,'%l:%i %p')as time, wai_note, gid from gidname where active='y' order by Name;");

if (mysql_affected_rows()!=0) {

	print '<table class="gridtable"><tr><th>Name</th><th>Status</th><th>Last Update</th><th>Note</th>';

	while(list($name, $status, $date, $time, $note, $gid) = mysql_fetch_row($count)) {
		if ($status=='in'){$status='<img src="in.jpg" />';$strong='';$unstrong='';}
		if ($status=='out'){$status='<img src="out.jpg" />';$strong='<strong>';$unstrong='</strong>';}
		if ($status == NULL){$status='<img src="unset.jpg" />';}
		print '<tr><td><a href="update.php?gid='.$gid.'">'.$name.'</a></td><td>'.$status.'</td><td>'.$date.'<br />'.$time.'</td><td>'.$strong.$note.$unstrong.'</td></tr>';
	}

	print '</table>';
}

mysql_close($con);
print '</div>';
?>

<!--#include virtual="/includes/analytics.html"-->
</div>
</body>
</html>
