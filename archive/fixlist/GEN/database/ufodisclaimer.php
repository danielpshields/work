<?php
	$glid = $_SERVER['HTTP_UFSHIB_GLID'];
	if (isset($_POST['submit'])){
		print 'booyah!';
	//HERE'S WHERE ALL THE PROCESSING NEEDS TO GO

	}
	//PATH TO CONNECTION STRING
	require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");
	$result=mysql_query("SELECT Academic_Plan, Academic_SUBPLAN, COURSE FROM multi_attempt;");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>AAC Multi Attempt Form</title>
		<link rel="stylesheet" href="css/master.css">
	</head>
	<body>
		<h1>Multi Attempt</h1>
		<div class="spitShell">
<?php
	$i = 0;
	if (mysql_affected_rows()!=0){

		while(list($plan,$sub,$course) = mysql_fetch_row($result)) {
		 $i++;
			print
			'<form name="multi" method="post" action="multiattempt.php">
					<input id="count" type="text" name="plan" value="'.$i.'" />
					<input type="text" name="plan" value="'.$plan.'" />
					<input type="text" name="plan" value="'.$sub.'" />
					<input type="text" name="plan" value="'.$course.'" /><br>
			';
			}
			print '</form>';
		}

?>
</div>
	<input class="submit" type="submit" name="submit" value="submit">

	</body>
</html>
