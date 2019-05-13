<?php
$gid=$_GET['gid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
		<head>
		<title>Where Are We?</title>
  		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<!-- <link href="clas.css" rel="stylesheet" type="text/css"> -->
		<link rel="stylesheet" type="text/css" media="print" href="/css/print.css" />
		<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/css/manual.css" type="text/css" media="screen" />
		<link rel="icon" type="image/gif" href="/images/question.gif" />
		</head>
	<body>
	<a name="top" id="top"></a>
<div id="header">
<h1 id="dept"><a href="http://www.clas.ufl.edu/"><img src="/images/unitHeader.gif"  alt="College of Liberal Arts and Sciences" border="0" height="50"
 width="285" /><span></span></a><a name="top" id="top"></a></h1>
<h2 id="aac"><a href="/"><span></span></a></h2>
</div>

<div id="mainContainer">
<div id="manualcontent">

<center><h3>Where Are We?</h3></center><br />
<?php

if (isset($_POST['update'])){
$gid=$_POST['gid'];
$status=$_POST['status'];
$wai_time=date('Y-m-d H:i:s');
$email=$_POST['email'];
$note=$_POST['wai_note'];
$name1=$_POST['name1'];

require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");
$count=mysql_query("update acadvise.gidname set status='".mysql_real_escape_string($status)."', wai_time='".mysql_real_escape_string($wai_time)."', wai_note='".mysql_real_escape_string($note)."' where gid='$gid';");
mysql_close($con1);

//now email if chosen
if($email=='on'){

$to = 'danshields@advising.ufl.edu';





$subject = "[Where Am I?] ".$name1." is ".$status;
$body = $name1." changed status to ".$status." and said:\n\"".$note."\"\n";
$headers = "From: clas@nersp.cns.ufl.edu\r\n" .
   "BCC: PV-AAC-StaffUsers@ad.ufl.edu\r\n" .
   "Reply-To: danshields@advising.ufl.edu\r\n" .
   'X-Mailer: PHP/'.phpversion();
	if (mail($to, $subject, $body, $headers, "-f please-do-not-reply@ufl.edu")) {
}
}
print '<meta http-equiv="refresh" content="0; url=wai.php"';
}

//print details
if (!isset($_POST['update'])){
require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");
$count=mysql_query("select Name, status, wai_note, gid from gidname where gid='$gid' and active='y';");
if (mysql_affected_rows()==0){
print '<center><h3>You entered an incorrect parameter.<br />Go back to the <a href="wai.php">main page</a> or <br />check with the AAC Tech Team.</h3></center>';
}



if (mysql_affected_rows()!=0){
print '
<form name="whereami" method="post" action="update.php">';
while(list($name, $status, $note, $gid) = mysql_fetch_row($count))
	{
	if ($status=='in'){$statusvaluein='checked';}
	if ($status=='out'){$statusvalueout='checked';}	
	print '<p><strong>Name: '.$name.'</strong><br /><img src="/images/staff/'.$gid.'.jpg" alt="'.$name.'" title="'.$name.'" /></p>
	<p><strong>Status: </strong><label><input type="radio" value="in" name="status" '.$statusvaluein.'/> In</label>&nbsp;&nbsp;&nbsp;<label><input type="radio" value="out" name="status" '.$statusvalueout.' /> Out</label></p>
	<p><strong>Remove check to NOT email the update: </strong><input type="checkbox" name="email" checked="checked" /></p>
	<p><strong>Message: </strong><input type="text" name="wai_note" value="'.$note.'" size="60" maxlength="140" /></p>
	<p><input type="hidden" name="name1" value="'.$name.'"/></p>
	<p><input type="hidden" name="gid" value="'.$gid.'" /><input type="submit" name="update" value="Update Status" /></p></form>';
}
		
}
mysql_close($con);
}
print '</div>';
?>

<!--#include virtual="/includes/analytics.html"-->
</div>
</body>
</html>