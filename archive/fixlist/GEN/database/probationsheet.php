<?php
$UFID = $_POST['UFID'];
$term=$_POST['term'];
?>
    <html>
    <head>
    <style>
    @page {size:8.5in 11in; margin:0.5in;@bottom-right{content: counter(page) " of " counter(pages);}}
	div.page {page-break-after:left;font-family:Trebuchet MS, Arial, sans-serif;font-size:12px;line-height:18px;position:relative;}
	div.course {page-break-after:right;position:relative;}
	#topsection{height:70px;width:100%;}
	#scores{padding-left:422px;margin-top:-80px; width:140px;}
	#scores td{border-collapse:collapse;vertical-align:top;font-size:11px;}
	#holds {height:50px;width:250px; margin:-50px 80px 0px 600px;}
	#glid{float:left;}
	#transcripts{align:center;margin:0xp 190px 0px 190px;font-size:10px;}
	td{vertical-align:top;}
	#examdata{height:100%;}
	#examdata table{width:100%;height:94%;margin-top:-2px;}
	#examdata table.examdata{overflow:hidden;}
	#group ol li ul li{list-style: lower-alpha;margin-bottom:18px;}
	#title{width:50%;margin-left:25%;text-align:center;}
	#title h3{font-size:20px;margin-bottom:-10px;margin-top:0px;width:100%;}
	#initdate{float:right;border:1px solid #000; padding:3px;font-size:9px;}
	#majors{float:right;text-align:right;}
	#UFID{text-align:center;float:left;}
	#name{float:left; width:45%;}
	#text{margin-top:0px;}
	table.ap{width:100%;border:1px solid #CECECE;}
	table.ap td, table.ap th {border:1px solid #CECECE;border-collapse:collapse;text-align:center;}
	tr.shade td {background-color:#CECECE;}
	#namec{padding:0px 0px 0px 0px;width:400px;font-size:16px; float:left;}
	#courseleft {width:50%; float:left; height:550px;margin-top:15px;}
	#courseright {width:50%; float:right; height:550px;margin-top:15px;}
	ol li{margin-bottom:10px;}
	ol li ul li{list-style:lower-alpha;margin-bottom:0px;}
	p.revised{float:right;font-size:6px;margin-top:-10px;}
	span{background-color:#CECECE;}
@media screen{
div.page{margin-bottom:100px;max-width:8.5in;margin-left:20%;}
}
	</style>
    </head>
    <body>
    <div class="page">
    <?php

require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");

$resultstudent = mysql_query("SELECT UFID, email, firstname, lastname, UT_term, College, Major, Track, UFGPA, curr_deficit_points, remove_points, LSPROB,AppointmentDate, init_appt_date from probation where UFID='$UFID' and term='$term';");

$num_rows = mysql_num_rows($resultstudent);
if (!$num_rows){
 print "<center><h3>There's no data for that UFID or you did not input one.<br /><br />
 <a href='search.php'>Please try again</a>.";
}
else
{
//loop thru the results
    while(list($UFID,$email, $firstname, $lastname, $UTterm, $College, $Major, $Track, $UFGPA, $curr_deficit_points, $remove_points, $LSPROB, $AppointmentDate, $init_appt_date) = mysql_fetch_row($resultstudent))
{
if ($LSPROB=="1"){
	$goal="at least half of my";
	$mustcomplete='<li>I must complete the Academic Policies Exercise on Canvas.</li>';
	}
if ($LSPROB=="2"){
	$goal="all of my";
	$mustcomplete='<li>I must complete the Academic Policies Exercise on Canvas if not already completed.</li>';
	}

print '<div id="examdata">
<div id="initdate">
<center>Initial Advisor Meeting Deadline:<br />
<span>'.$init_appt_date.'</span><br />
</div>

<div id="title">
<h3>Spring 2018 Probation '.$LSPROB.' Contract</h3>
<p><strong>College of Liberal Arts and Sciences (CLAS)</strong></p>
</div>

<div id="topsection">

	<div id="name">
	<strong>Name: </strong>'.$firstname.' '.$lastname.'<br />
	<strong>Email:</strong> '.$email.'<br />
	<strong>College - Major: </strong>'.$College.' - '.$Major.'<br />

	</div>

	<div id="UFID">
	<strong>UFID:</strong> '.$UFID.'<br />
	</div>

	<div id="majors">
	UF GPA: '.$UFGPA.'<br />
	Current Deficit Points: '.$curr_deficit_points.'<br />
	</div>
</div>

<div id="text">
<strong>Probation Status: LSPROB'.$LSPROB.'<br />
Probation Goal: To remove '.$goal.' deficit points this semester.</strong> <br />
<br />
<strong>CONDITIONS OF PROBATION</strong><br />
<ol>
	<li>I must remove '.$remove_points.' deficit points this semester to remain a student in CLAS.  I must meet critical tracking criteria, as well as additional progress standards, to continue in my major.</li>

	<li>I must utilize the following <strong>two campus resources</strong>, complete a <strong>one page reflection paper</strong> regarding my experience using these resources and bring this paper back to my advisor during my follow-up visit.
		<ul>
			<li>___________________________________________________________________________________________
	     ___________________________________________________________________________________________ 	</li>
		 <li>___________________________________________________________________________________________
     ___________________________________________________________________________________________  </li>
	 </ul>
	 </li>
	 '.$mustcomplete.'
	 <li>I must meet with my professors <strong><span>the week prior to the follow-up meeting with my advisor</span></strong> to discuss my current grades.  Then, I will fill out the attached GPA calculation worksheet and bring this back to my advisor.</li>
	 <li>After completing 2-4 above, I must meet with my probation advisor,________________________________, by <strong><span>'.$AppointmentDate.'</span></strong>.  Additional meetings may be required at the advisor’s discretion.  To meet with my advisor, I must call the Academic Advising Center (352-392-1521) to schedule an appointment or to find out the walk-in hours for my advisor. <em>Note:  The Advising Center becomes extremely busy as the semester progresses and appointment times fill quickly.  It’s your responsibility to meet with your advisor well in advance of the deadline.</em></li>
	 <li>Any full-term withdrawal during the contract period will result in failing CLAS probation so please discuss this with an advisor before considering this option.</li>
	 <li>Other conditions: _____________________________________________________________________________
	____________________________________________________________________________________________
	____________________________________________________________________________________________</li>
	</ol>

	<p>I may not advance register for subsequent semesters if I do not meet conditions 2-5 above.  I understand my ability to advance register may be affected by additional holds, such as a universal tracking hold, financial hold, etc.  If I fail to fulfill contract requirements at any point during the contract period, I will fail CLAS probation and I will not be allowed to continue in CLAS.  If I have already registered for any courses for upcoming semesters, those courses <strong>will be cancelled</strong>.  Any petitions of extenuating circumstances may be directed to the CLAS Petitions Committee.  <em>Note:  petitions to extend probation are rarely approved</em>.</p>

	<p>	I have read and discussed the information above with an advisor in CLAS. </p>

	<p>_____________________________________________________________________________________________________<br />
	STUDENT SIGNATURE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADVISOR SIGNATURE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE</p>
	<p class="revised">Revised 09/2017</p>
</div>
</div>';

print'</div>';
print'<div class="page">';
//breaks the page for Course Selection content

//start page 2

//Now process those Courses that were selected

print '<div><center><h3>GPA Calculation Worksheet</h3></center>
<br />

Name: '.$firstname.' '.$lastname.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UF ID: '.$UFID.'<br />
<br />
GPA Calculation Worksheet<br />
During the week prior to your follow-up meeting with your advisor, you will need to meet with your professors to discuss your estimated course grades.  Once you have this information, enter it on the chart below to predict your GPA for the term.  Please remember to bring this completed worksheet back with you to your follow-up meeting with your advisor.<br />
<br />
(Do not include S/U hours in your totals.)<br />

<table class="ap">
<thead>
<tr>
	<th>Course</th>
	<th>Estimated Grade</th>
	<th>Grade Points per Credit Hour</th>
	<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
	<th>Credit Hours</th>
	<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
	<th>Grade Points></th>
	</tr>

<tr class="shade"><td>Example:<br />ENC1101</td><td>B</td><td>3.0</td><td>X</td><td>3</td><td>=</td><td>9</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>X</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>=</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>X</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>=</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>X</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>=</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>X</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>=</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>X</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>=</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Total</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Total</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
</table>
<br />
To predict your GPA for this semester, take the total number of grade points and divide by the total number of credit hours. <br />
<br />
Total Grade Points _____ divided by credit hours _____ = Predicted GPA _____ <br />
<br />
<strong>Grade point system:</strong><br />
A = 4.0 grade points per credit hour (removes 2 deficit points per credit hour) <br />
A- = 3.67 grade points per credit hour (removes 1.67 deficit points per credit hour) <br />
B+ = 3.33 grade points per credit hour (removes 1.33 deficit points per credit hour) <br />
B = 3.0 grade points per credit hour (removes 1 deficit point per credit hour) <br />
B- = 2.67 grade points per credit hour (removes .67 deficit points per credit hour) <br />
C+ = 2.33 grade points per credit hour (removes .33 deficit points per credit hour) <br />
C = 2.0 grade points per credit hour (does not affect deficit points) <br />
C- = 1.67 grade points per credit hour (adds .33 deficit points per credit hour) <br />
D+ = 1.33 grade points per credit hour (adds .67 deficit points per credit hour) <br />
D = 1.0 grade points per credit hour (adds 1 deficit point per credit hour) <br />
D- = .67 grade points per credit hour (adds 1.33 deficit points per credit hour) <br />
E = 0.0 grade points per credit hour (adds 2 deficit points per credit hour)
</p>
</div>';
//breaks the page for Course Selection content
}
}

?>
    </div>
    </body>
    </html>
