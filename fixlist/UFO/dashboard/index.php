<?php
	$title = "index";
	$stylesheet = $title;
	require_once("include/header.php");
?>
		<h2>Home</h2>

		<dl>
			<dt>
				<img src="image/circle_arrow.png" class="arrow">
				<span>UF Online Information and Reporting</span>
			</dt>
			<dd>
				<ul>
					<li><a href="docs/MajorsbyStartDate.xlsx">Majors by Start Date</a> (XLSX, 14KB)</li>
					<li><a href="https://uflorida.sharepoint.com/sites/ufonline/Shared Documents/Forms/AllItems.aspx?viewpath=%2Fsites%2Fufonline%2FShared%20Documents%2FForms%2FAllItems%2Easpx&id=%2Fsites%2Fufonline%2FShared%20Documents%2FFile%20Sharing%2FExternal%2FUFO_Student_Demographics%2F2018">Spring 2018 UF Online Student Demographics</a></li>
					<li><a href="https://cns-sql-reports.ad.ufl.edu/APIT_ReportMgr/Pages/Folder.aspx?ItemPath=%2fUFOnlineReports&ViewMode=Detail" target="_blank">UF Online Self-Service Reports</a>: Best viewed in Firefox or Internet Explorer.</li>
					<li><a href="http://handbook.ufonline.ufl.edu/advising/" target="_blank">UF Online Handbook</a></li>
					<li><a href="docs/MajorsbyTerm.xlsx" target="_blank">UF Online Majors by Term</a> (XLSX, 14KB)</li>
				</ul>
			</dd>

			<dt>
				<img src="image/circle_arrow.png" class="arrow">
				<span>Previous Demographics Reports</span>
			</dt>
			<dd>
				<ul>
					<li><a href="docs/20161StudentDemographics.xlsx">Spring 2016 Demographics</a> (XLSX, 28KB)</li>
					<li><a href="docs/UFODemographic201508.pdf" target="_blank">UF Online Demographics Fall 2015</a></li>
					<li><a href="docs/StudentDemographics201501.pdf" target="_blank">UF Online Demographics Spring 2015</a></li>
				</ul>
			</dd>

			<dt>
				<img src="image/circle_arrow.png" class="arrow">
				<span>UF Policies for UFO Students</span>
			</dt>
			<dd>
				<ul>
					<li><a href="docs/distanceguidelines.pdf" target="_blank">AAC Guidelines for Working With Students at a Distance</a> (PDF, 241 KB)</li>
					<li><a href="docs/CombinedDegreeEligibility.pdf" target="_blank">Combined Degree Eligibility & Processing for UF Online Students</a> (PDF, 81 KB)</li>
					<li><a href="docs/tuition.pdf" target="_blank">Tuition, Repeat Surcharge, and Excess Hours</a> (PDF, 89 KB)</li>
				</ul>
			</dd>
		</dl>

		<div id="rightColumn_mobile">
			<?php include("include/rightColumn.php"); ?>
		</div>


	<?php require_once("include/footer.php"); ?>
