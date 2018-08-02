<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Probation Sheets | University of Florida</title>
		<meta name="description" content="The Academic Advising Center is the advising office for the University of Florida College of Liberal Arts and Sciences (CLAS). We provide advising services for CLAS students, exploratory students, Pre-Health and Pre-Law students, and other students interested in CLAS majors." />
		<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" media="print" href="/css/print.css" />
		<link rel="icon" type="image/jpg" href="/images/favicon.jpg" />

<style type="text/css" media="screen" title="Default">
	body{background:none;}
	#content{width:100%;max-width:760px;}
	#content textarea{margin-left:0px;}
	#probation{border:1px solid #FF4a00;background-color:#005496;padding:10px;color:white;width:60%;margin-left:20%;}
	#probation p{color:#FFF;text-align:left;line-height:30px;}
</style>

<script type="text/javascript">
<!--
function validate_form ( )
{
	valid = true;
        if ( document.singlesheet.UFID.value == "" )
        {
                alert ( "Enter a UFID.\nFormat: XXXXXXXX" );
                valid = false;
        }
        return valid;
}
//-->
</script>

</head>

<body>

<br /><center><h2>Probation Contracts</h2></center>
<br />
<div id='probation'>
</p>
<p><strong>Probation Contracts: enter a UFID. Term default is 20185, but you can search back to 20161. Then click "Display Probation Contract."</strong></p>
<br />
<form method='post' action='probationsheet.php' name='singlesheet' onsubmit='return validate_form ( ); onSubmit=stamp()' >
<p>UFID: <input type='text' name='UFID' maxlength='8' size='10' autofocus><br />
Term: <select name='term'>
<option value='20185'>20185, Summer A/C 2018</option>
<option value='20181'>20181, Spring 2018</option>
<option value='20178'>20178, Fall 2017</option>
<option value='20171'>20171, Spring 2017</option>
<option value='20168'>20168, Fall 2016</option>
<option value='20166'>20166, Summer B 2016</option>
<option value='20165'>20165, Summer A/C 2016</option>
<option value='20161'>20161, Spring 2016</option>

</select>
<br /><br />
<input type='submit' name='singlesubmit' onsubmit='return validate_form ( );' value='Display Probation Contract'></p>
</form>
<br />
</div>
<br />
</div>
</body>
</html>
