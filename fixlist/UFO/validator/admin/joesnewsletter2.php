<?php
$glid=$_SERVER['HTTP_UFSHIB_GLID'];
$date_auto = date("Y-m-j-H-i-s");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Academic Advising Center Anderson Scholars | University of Florida</title>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<link rel="stylesheet" type="text/css" media="screen" href="basic.css" />
<link rel="stylesheet" type="text/css" media="print" href="print.css" />
<link rel="icon" type="image/jpg" href="/images/favicon.jpg" />
<link rel="stylesheet" href="/css/style.css" type="text/css">
<style type="text/css" media="screen">
	@import "/convocation/convo.css";
	.leftcol {width:33%;}
	#content {width:100%;}
	#content p.quote{margin-left:50px;}
</style>
</head>


	

	
<div id="mainContainer">
<div id="content">
<center><h3>Anderson Scholar Email</h3></center>
<p>Click the Send button to send the email to students for Anderson Scholars</p>

<p>Clicking this button gathers student first names and email addresses from the AAC table, "evaluation_emails," and sends a customized email to Anderson Scholars.</p>

<p>The email is formatted:</p>

<p class="quote">Dear Anderson Scholar:<br />
<br />
	
<br />
Sincerely,<br />
 <br />

Joseph Spillane<br />
Associate Dean, College of Liberal Arts and Sciences<br />
Director, Academic Advising Center</p>

<?php
//if the Submit button is clicked, then send the emails.
if (isset($_POST['submit'])) {
require ("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/login.cgi");
$result = mysql_query("select student_email as s_email from evaluation_emails where student_email='danshields@ufl.edu';");
mysql_close($con);
$num_rows = mysql_num_rows($result);
{
while(list($s_email) = mysql_fetch_row($result))
{
$to = $s_email;
$bcc= 'danshields@ufl.edu';
$subject = "Dean Spillane's News and Notes";
$body = '<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns:b="urn:schemas-microsoft-com:office:publisher"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Publisher.Document>
<meta name=Generator content="Microsoft Publisher 15">
<link rel=File-List href="Publication2_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
b\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Shields,Dan</o:Author>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:CustomDocumentProperties>
  <o:_TemplateID dt:dt="string">TC037243699991</o:_TemplateID>
 </o:CustomDocumentProperties>
</xml><![endif]--><!--[if pub]><xml>
 <b:Publication type="OplPub" oty="68" oh="256">
  <b:OhPrintBlock priv="30E">287</b:OhPrintBlock>
  <b:DptlPageDimensions type="OplPt" priv="1211">
   <b:Xl priv="104">5303520</b:Xl>
   <b:Yl priv="204">12115800</b:Yl>
  </b:DptlPageDimensions>
  <b:PtlRulerOrigin type="OplPt" priv="1311">
   <b:Xl>-7143</b:Xl>
  </b:PtlRulerOrigin>
  <b:OhGallery priv="180E">259</b:OhGallery>
  <b:OhFancyBorders priv="190E">261</b:OhFancyBorders>
  <b:OhCaptions priv="1A0E">257</b:OhCaptions>
  <b:OhQuillDoc priv="200E">282</b:OhQuillDoc>
  <b:OhMailMergeData priv="210E">262</b:OhMailMergeData>
  <b:OhColorScheme priv="220E">285</b:OhColorScheme>
  <b:DwNextUniqueOid priv="2304">3</b:DwNextUniqueOid>
  <b:IdentGUID priv="2A07">0``````````````````````</b:IdentGUID>
  <b:DpgSpecial priv="2C03">5</b:DpgSpecial>
  <b:FWorkpaneVisible priv="3900">False</b:FWorkpaneVisible>
  <![if pub11]>
  <b:OhoplRgNavBarProps priv="3B0E">331</b:OhoplRgNavBarProps>
  <![endif]>
  <b:CTimesEdited priv="3C04">29</b:CTimesEdited>
  <b:NuDefaultUnitsEx priv="4104">0</b:NuDefaultUnitsEx>
  <b:OhImpositionEngine priv="440E">292</b:OhImpositionEngine>
  <b:OhoplDocExOptions priv="490E">307</b:OhoplDocExOptions>
  <b:FPrintSettingsSaved priv="4A00">True</b:FPrintSettingsSaved>
 </b:Publication>
 <b:PrinterInfo type="OplPrb" oty="75" oh="287">
  <b:CDnb priv="104">2</b:CDnb>
  <b:Rgdnb type="OplDnb" priv="212">
   <b:OplDnb type="OplDnb" priv="11">
    <b:Ssz priv="103">1</b:Ssz>
    <b:Dptl type="OplPt" priv="213">
     <b:Xl>7772400</b:Xl>
     <b:Yl>10058400</b:Yl>
    </b:Dptl>
    <b:Sso priv="303">15</b:Sso>
    <b:FSszOK priv="600">True</b:FSszOK>
    <b:SzDevice priv="818">\\AP-SRV-USER-2\AAC-LJ4014</b:SzDevice>
    <b:DevmodeW priv="E10" cb="2">&quot;```</b:DevmodeW>
   </b:OplDnb>
   <b:OplDnb type="OplDnb" priv="111">
    <b:Ssz>1</b:Ssz>
    <b:Dptl type="OplPt">
     <b:Xl>7772400</b:Xl>
     <b:Yl>10058400</b:Yl>
    </b:Dptl>
    <b:Sso>15</b:Sso>
    <b:FSszOK>True</b:FSszOK>
    <b:SzDevice>\\AP-SRV-USER-2\AAC-LJ4014</b:SzDevice>
    <b:DevmodeW cb="2">&quot;```</b:DevmodeW>
   </b:OplDnb>
  </b:Rgdnb>
  <b:OhColorSepBlock priv="30E">288</b:OhColorSepBlock>
  <b:FKOBlackFills priv="A00">True</b:FKOBlackFills>
  <b:OpmOutsidePrintMode priv="B04">1</b:OpmOutsidePrintMode>
  <b:TlmTilingMode priv="D04">1</b:TlmTilingMode>
  <b:DptlPrintMargin type="OplPt" priv="E11">
   <b:Xl>1734772</b:Xl>
  </b:DptlPrintMargin>
  <b:FAllowBleeds priv="1800">True</b:FAllowBleeds>
  <b:FEnvUseDefaults priv="1C00">True</b:FEnvUseDefaults>
  <b:FEnvFeedLandscape priv="1D00">True</b:FEnvFeedLandscape>
  <b:DpiX priv="2203">0</b:DpiX>
  <b:DpiY priv="2303">0</b:DpiY>
  <b:DxlOverlap priv="2404">0</b:DxlOverlap>
  <b:DylOverlap priv="2504">0</b:DylOverlap>
 </b:PrinterInfo>
 <b:ColorSeperationInfo type="OplCsb" oty="79" oh="288">
  <b:Plates type="OplCsp" priv="214">
   <b:OplCsp type="OplCsp" priv="11">
    <b:EcpPlate type="OplEcp" priv="213">
     <b:Color priv="104">-1</b:Color>
    </b:EcpPlate>
   </b:OplCsp>
  </b:Plates>
  <b:DzlOverprintMost priv="304">304800</b:DzlOverprintMost>
  <b:CprOverprintMin priv="404">243</b:CprOverprintMin>
  <b:DzlTrap priv="C04">3175</b:DzlTrap>
  <b:DzlIndTrap priv="D04">3175</b:DzlIndTrap>
  <b:PctCenterline priv="E04">70</b:PctCenterline>
  <b:FMarksRegistration priv="F00">True</b:FMarksRegistration>
  <b:FMarksJob priv="1000">True</b:FMarksJob>
  <b:FMarksDensity priv="1100">True</b:FMarksDensity>
 </b:ColorSeperationInfo>
 <b:TextDocProperties type="OplDocq" oty="91" oh="282">
  <b:OhPlcqsb priv="20E">284</b:OhPlcqsb>
  <b:EcpSplitMenu type="OplEcp" priv="A13">
   <b:Color>134217728</b:Color>
  </b:EcpSplitMenu>
 </b:TextDocProperties>
 <b:StoryBlock type="OplPlcQsb" oty="101" oh="284">
  <b:IqsbMax priv="104">10</b:IqsbMax>
  <b:Rgqsb type="OplQsb" priv="214">
   <b:OplQsb type="OplQsb" priv="11">
    <b:Qsid priv="104">2</b:Qsid>
    <b:Scf priv="502">3</b:Scf>
    <b:TomfCopyfitBase priv="80B">-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2 priv="90B">-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="111">
    <b:Qsid>38</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="211">
    <b:Qsid>59</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="311">
    <b:Qsid>61</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="411">
    <b:Qsid>64</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="511">
    <b:Qsid>65</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="611">
    <b:Qsid>66</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="711">
    <b:Qsid>67</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="811">
    <b:Qsid>68</b:Qsid>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
   <b:OplQsb type="OplQsb" priv="911">
    <b:Qsid>70</b:Qsid>
    <b:FAutoHyphenate priv="400">False</b:FAutoHyphenate>
    <b:TomfCopyfitBase>-9999996.000000</b:TomfCopyfitBase>
    <b:TomfCopyfitBase2>-9999996.000000</b:TomfCopyfitBase2>
   </b:OplQsb>
  </b:Rgqsb>
 </b:StoryBlock>
 <b:ColorScheme type="OplSccm" oty="92" oh="285">
  <b:Cecp priv="104">8</b:Cecp>
  <b:Rgecp type="OplEcp" priv="214">
   <b:OplEcp priv="F">Empty</b:OplEcp>
   <b:OplEcp type="OplEcp" priv="111">
    <b:Color>3307511</b:Color>
   </b:OplEcp>
   <b:OplEcp type="OplEcp" priv="211">
    <b:Color>10819188</b:Color>
   </b:OplEcp>
   <b:OplEcp type="OplEcp" priv="311">
    <b:Color>9851400</b:Color>
   </b:OplEcp>
   <b:OplEcp type="OplEcp" priv="411">
    <b:Color>6723891</b:Color>
   </b:OplEcp>
   <b:OplEcp type="OplEcp" priv="511">
    <b:Color>16777215</b:Color>
   </b:OplEcp>
   <b:OplEcp type="OplEcp" priv="611">
    <b:Color>16777215</b:Color>
   </b:OplEcp>
   <b:OplEcp type="OplEcp" priv="711">
    <b:Color>16777215</b:Color>
   </b:OplEcp>
  </b:Rgecp>
  <b:IScheme priv="304">2006</b:IScheme>
  <b:FUserOwnsScheme priv="500">True</b:FUserOwnsScheme>
  <b:SzSchemeName priv="618">Email Newsletter</b:SzSchemeName>
 </b:ColorScheme>
 <![if pub11]>
 <![endif]>
 <![if pub11]>
 <b:otyImpEngine type="OplImpositionEngine" oty="138" oh="292">
  <b:Product type="OplPgsProduct" priv="411">
   <b:Type priv="204">161</b:Type>
   <b:Layouts priv="404">65536</b:Layouts>
   <b:Name priv="518">Current</b:Name>
   <b:Description priv="618">Standard Paper</b:Description>
   <b:ID priv="704">7</b:ID>
   <b:Unit priv="804">2</b:Unit>
   <b:FVisibleForAllUnits priv="900">True</b:FVisibleForAllUnits>
   <b:BindEdge priv="A04">0</b:BindEdge>
   <b:CMasterPanels priv="1104">1</b:CMasterPanels>
   <b:MasterPanels type="OplPgsMasterPanel" priv="1212">
    <b:OplPgsMasterPanel type="OplPgsMasterPanel" priv="11">
     <b:DxPanel priv="304">5303520</b:DxPanel>
     <b:DyPanel priv="404">12115800</b:DyPanel>
     <b:DyMarginT priv="604">457200</b:DyMarginT>
     <b:DxMarginL priv="704">457200</b:DxMarginL>
     <b:DyMarginB priv="804">457200</b:DyMarginB>
     <b:DxMarginR priv="904">457200</b:DxMarginR>
    </b:OplPgsMasterPanel>
   </b:MasterPanels>
  </b:Product>
  <b:Prity priv="504">1</b:Prity>
  <b:OhplImposedSheets priv="60E">293</b:OhplImposedSheets>
 </b:otyImpEngine>
 <![endif]>
 <![if pub11]>
 <b:otyPlImposedSheets type="OplOhplImposedSheets" oty="139" oh="293">
  <b:CImposedSheets priv="103">1</b:CImposedSheets>
  <b:RgImposedSheets type="OplImposedSheet" priv="214">
   <b:OplImposedSheet type="OplImposedSheet" priv="11">
    <b:OhplImposedPages priv="10D">305</b:OhplImposedPages>
   </b:OplImposedSheet>
  </b:RgImposedSheets>
 </b:otyPlImposedSheets>
 <![endif]>
 <![if pub11]>
 <![endif]>
</xml><![endif]-->
<title>Page Title</title>
<!--[if pub]><xml>
 <b:Page type="OplPd" oty="67" oh="266">
  <b:PtlvOrigin type="OplPt" priv="511">
   <b:Xl>22854285</b:Xl>
   <b:Yl>22860000</b:Yl>
  </b:PtlvOrigin>
  <b:Oid priv="605">(`0`````````</b:Oid>
  <b:OhoplWebPageProps priv="90E">267</b:OhoplWebPageProps>
  <b:OhoplFormProperties priv="B0E">268</b:OhoplFormProperties>
  <b:OhpdMaster priv="D0D">263</b:OhpdMaster>
  <b:PgtType priv="1004">5</b:PgtType>
  <b:PtlvOriginEx type="OplPt" priv="1111">
   <b:Xl>110179485</b:Xl>
   <b:Yl>110185200</b:Yl>
  </b:PtlvOriginEx>
 </b:Page>
 <b:otyFormProperties type="OplOdpoFormControl" oty="119" oh="268">
  <b:FCOSubmitType priv="C04">2</b:FCOSubmitType>
  <b:FCOEmailAddr priv="E18">someone@example.com</b:FCOEmailAddr>
  <b:FCOEmailTitle priv="F18">Web Site Form Response</b:FCOEmailTitle>
  <b:FCOConfirmText priv="1018">Your information was received</b:FCOConfirmText>
  <b:FCOResultsFile priv="1318">FORMDATA.HTM</b:FCOResultsFile>
  <b:FCOPageNumber priv="1704">1</b:FCOPageNumber>
  <b:FCOSubmitUrl priv="1818">http://example.com/~user/ispscript.cgi</b:FCOSubmitUrl>
 </b:otyFormProperties>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
@font-face
	{font-family:Arial;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	panose-1:2 11 6 4 2 2 2 2 2 4;
	mso-font-signature:-536839425 -1073711037 9 0 1073742335 -65536;}
 /* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:10.0pt;
	line-height:125%;
	text-align:left;
	font-family:Arial;
	mso-default-font-family:Arial;
	mso-ascii-font-family:Arial;
	mso-latin-font-family:Arial;
	mso-greek-font-family:Arial;
	mso-cyrillic-font-family:Arial;
	mso-armenian-font-family:Arial;
	mso-hebrew-font-family:Arial;
	mso-arabic-font-family:Arial;
	mso-devanagari-font-family:Mangal;
	mso-bengali-font-family:Vrinda;
	mso-gurmukhi-font-family:Raavi;
	mso-oriya-font-family:Kalinga;
	mso-tamil-font-family:Latha;
	mso-telugu-font-family:Gautami;
	mso-kannada-font-family:Tunga;
	mso-malayalam-font-family:Kartika;
	mso-thai-font-family:BrowalliaUPC;
	mso-lao-font-family:DokChampa;
	mso-tibetan-font-family:"Microsoft Himalaya";
	mso-georgian-font-family:Sylfaen;
	mso-hangul-font-family:"Malgun Gothic";
	mso-kana-font-family:"MS Mincho";
	mso-bopomofo-font-family:PMingLiU;
	mso-han-font-family:SimSun;
	mso-halfwidthkana-font-family:"MS Mincho";
	mso-syriac-font-family:"Estrangelo Edessa";
	mso-thaana-font-family:"MV Boli";
	mso-sinhala-font-family:"Iskoola Pota";
	mso-ethiopic-font-family:Nyala;
	mso-cherokee-font-family:"Plantagenet Cherokee";
	mso-canadianabor-font-family:"Euphemia Regular CAS";
	mso-khmer-font-family:DaunPenh;
	mso-mongolian-font-family:"Mongolian Baiti";
	mso-currency-font-family:Arial;
	mso-latinext-font-family:Arial;
	font-size:9.0pt;
	color:#4D4D4D;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#4D4D4D;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
h2
	{mso-style-parent:"";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:8.0pt;
	margin-bottom:8.0pt;
	line-height:110%;
	text-align:left;
	font-family:Arial;
	mso-default-font-family:Arial;
	mso-ascii-font-family:Arial;
	mso-latin-font-family:Arial;
	mso-greek-font-family:Arial;
	mso-cyrillic-font-family:Arial;
	mso-armenian-font-family:Arial;
	mso-hebrew-font-family:Arial;
	mso-arabic-font-family:Arial;
	mso-devanagari-font-family:Mangal;
	mso-bengali-font-family:Vrinda;
	mso-gurmukhi-font-family:Raavi;
	mso-oriya-font-family:Kalinga;
	mso-tamil-font-family:Latha;
	mso-telugu-font-family:Gautami;
	mso-kannada-font-family:Tunga;
	mso-malayalam-font-family:Kartika;
	mso-thai-font-family:BrowalliaUPC;
	mso-lao-font-family:DokChampa;
	mso-tibetan-font-family:"Microsoft Himalaya";
	mso-georgian-font-family:Sylfaen;
	mso-hangul-font-family:"Malgun Gothic";
	mso-kana-font-family:"MS Mincho";
	mso-bopomofo-font-family:PMingLiU;
	mso-han-font-family:SimSun;
	mso-halfwidthkana-font-family:"MS Mincho";
	mso-syriac-font-family:"Estrangelo Edessa";
	mso-thaana-font-family:"MV Boli";
	mso-sinhala-font-family:"Iskoola Pota";
	mso-ethiopic-font-family:Nyala;
	mso-cherokee-font-family:"Plantagenet Cherokee";
	mso-canadianabor-font-family:"Euphemia Regular CAS";
	mso-khmer-font-family:DaunPenh;
	mso-mongolian-font-family:"Mongolian Baiti";
	mso-currency-font-family:Arial;
	mso-latinext-font-family:Arial;
	font-size:10.0pt;
	color:#085296;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#085296;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	font-weight:bold;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-parent:"";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:4.0pt;
	line-height:110%;
	text-align:left;
	font-family:Arial;
	mso-default-font-family:Arial;
	mso-ascii-font-family:Arial;
	mso-latin-font-family:Arial;
	mso-greek-font-family:Arial;
	mso-cyrillic-font-family:Arial;
	mso-armenian-font-family:Arial;
	mso-hebrew-font-family:Arial;
	mso-arabic-font-family:Arial;
	mso-devanagari-font-family:Mangal;
	mso-bengali-font-family:Vrinda;
	mso-gurmukhi-font-family:Raavi;
	mso-oriya-font-family:Kalinga;
	mso-tamil-font-family:Latha;
	mso-telugu-font-family:Gautami;
	mso-kannada-font-family:Tunga;
	mso-malayalam-font-family:Kartika;
	mso-thai-font-family:BrowalliaUPC;
	mso-lao-font-family:DokChampa;
	mso-tibetan-font-family:"Microsoft Himalaya";
	mso-georgian-font-family:Sylfaen;
	mso-hangul-font-family:"Malgun Gothic";
	mso-kana-font-family:"MS Mincho";
	mso-bopomofo-font-family:PMingLiU;
	mso-han-font-family:SimSun;
	mso-halfwidthkana-font-family:"MS Mincho";
	mso-syriac-font-family:"Estrangelo Edessa";
	mso-thaana-font-family:"MV Boli";
	mso-sinhala-font-family:"Iskoola Pota";
	mso-ethiopic-font-family:Nyala;
	mso-cherokee-font-family:"Plantagenet Cherokee";
	mso-canadianabor-font-family:"Euphemia Regular CAS";
	mso-khmer-font-family:DaunPenh;
	mso-mongolian-font-family:"Mongolian Baiti";
	mso-currency-font-family:Arial;
	mso-latinext-font-family:Arial;
	font-size:8.0pt;
	color:#595959;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#595959;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	letter-spacing:.15pt;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-parent:"";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	line-height:110%;
	text-align:left;
	font-family:Arial;
	mso-default-font-family:Arial;
	mso-ascii-font-family:Arial;
	mso-latin-font-family:Arial;
	mso-greek-font-family:Arial;
	mso-cyrillic-font-family:Arial;
	mso-armenian-font-family:Arial;
	mso-hebrew-font-family:Arial;
	mso-arabic-font-family:Arial;
	mso-devanagari-font-family:Mangal;
	mso-bengali-font-family:Vrinda;
	mso-gurmukhi-font-family:Raavi;
	mso-oriya-font-family:Kalinga;
	mso-tamil-font-family:Latha;
	mso-telugu-font-family:Gautami;
	mso-kannada-font-family:Tunga;
	mso-malayalam-font-family:Kartika;
	mso-thai-font-family:BrowalliaUPC;
	mso-lao-font-family:DokChampa;
	mso-tibetan-font-family:"Microsoft Himalaya";
	mso-georgian-font-family:Sylfaen;
	mso-hangul-font-family:"Malgun Gothic";
	mso-kana-font-family:"MS Mincho";
	mso-bopomofo-font-family:PMingLiU;
	mso-han-font-family:SimSun;
	mso-halfwidthkana-font-family:"MS Mincho";
	mso-syriac-font-family:"Estrangelo Edessa";
	mso-thaana-font-family:"MV Boli";
	mso-sinhala-font-family:"Iskoola Pota";
	mso-ethiopic-font-family:Nyala;
	mso-cherokee-font-family:"Plantagenet Cherokee";
	mso-canadianabor-font-family:"Euphemia Regular CAS";
	mso-khmer-font-family:DaunPenh;
	mso-mongolian-font-family:"Mongolian Baiti";
	mso-currency-font-family:Arial;
	mso-latinext-font-family:Arial;
	font-size:32.0pt;
	color:#085296;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#085296;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	font-weight:bold;
	text-transform:uppercase;
	mso-font-kerning:14.0pt;
	mso-char-tracking:95%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
h1
	{mso-style-parent:"";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	line-height:95%;
	text-align:left;
	font-family:Arial;
	mso-default-font-family:Arial;
	mso-ascii-font-family:Arial;
	mso-latin-font-family:Arial;
	mso-greek-font-family:Arial;
	mso-cyrillic-font-family:Arial;
	mso-armenian-font-family:Arial;
	mso-hebrew-font-family:Arial;
	mso-arabic-font-family:Arial;
	mso-devanagari-font-family:Mangal;
	mso-bengali-font-family:Vrinda;
	mso-gurmukhi-font-family:Raavi;
	mso-oriya-font-family:Kalinga;
	mso-tamil-font-family:Latha;
	mso-telugu-font-family:Gautami;
	mso-kannada-font-family:Tunga;
	mso-malayalam-font-family:Kartika;
	mso-thai-font-family:BrowalliaUPC;
	mso-lao-font-family:DokChampa;
	mso-tibetan-font-family:"Microsoft Himalaya";
	mso-georgian-font-family:Sylfaen;
	mso-hangul-font-family:"Malgun Gothic";
	mso-kana-font-family:"MS Mincho";
	mso-bopomofo-font-family:PMingLiU;
	mso-han-font-family:SimSun;
	mso-halfwidthkana-font-family:"MS Mincho";
	mso-syriac-font-family:"Estrangelo Edessa";
	mso-thaana-font-family:"MV Boli";
	mso-sinhala-font-family:"Iskoola Pota";
	mso-ethiopic-font-family:Nyala;
	mso-cherokee-font-family:"Plantagenet Cherokee";
	mso-canadianabor-font-family:"Euphemia Regular CAS";
	mso-khmer-font-family:DaunPenh;
	mso-mongolian-font-family:"Mongolian Baiti";
	mso-currency-font-family:Arial;
	mso-latinext-font-family:Arial;
	font-size:9.0pt;
	color:white;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:white;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	font-weight:normal;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.MsoCaption, li.MsoCaption, div.MsoCaption
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	line-height:110%;
	text-align:left;
	font-family:Arial;
	font-size:7.0pt;
	color:#4D4D4D;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#4D4D4D;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.Masthead, li.Masthead, div.Masthead
	{mso-style-name:Masthead;
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	line-height:125%;
	text-align:left;
	font-family:Arial;
	font-size:6.0pt;
	color:#085296;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#085296;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	text-transform:uppercase;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.Caption20, li.Caption20, div.Caption20
	{mso-style-name:"Caption 2";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	text-align:left;
	font-family:Arial;
	font-size:7.0pt;
	color:#4D4D4D;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#4D4D4D;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.BodyText2closingbar, li.BodyText2closingbar, div.BodyText2closingbar
	{mso-style-name:"Body Text 2 \(closing bar\)";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:10.0pt;
	line-height:110%;
	text-align:left;
	font-family:Arial;
	font-size:8.0pt;
	color:#4D4D4D;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#4D4D4D;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.ParagraphBorder, li.ParagraphBorder, div.ParagraphBorder
	{mso-style-name:"Paragraph Border";
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	line-height:80%;
	text-align:left;
	font-family:Arial;
	font-size:8.0pt;
	color:#4D4D4D;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#4D4D4D;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
p.ClosingParagraphBorder, li.ClosingParagraphBorder, div.ClosingParagraphBorder
	{mso-style-name:"Closing Paragraph Border";
	mso-style-next:Normal;
	margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:5.0pt;
	line-height:80%;
	text-align:left;
	font-family:Arial;
	font-size:8.0pt;
	color:#4D4D4D;
	mso-style-textfill-type:solid;
	mso-style-textfill-fill-color:#4D4D4D;
	mso-style-textfill-fill-alpha:100%;
	mso-style-textoutline-type:none;
	mso-style-textoutline-outlinestyle-dpiwidth:0pt;
	mso-style-textoutline-outlinestyle-linecap:round;
	mso-style-textoutline-outlinestyle-join:bevel;
	mso-style-textoutline-outlinestyle-dash:solid;
	mso-style-textoutline-outlinestyle-compound:simple;
	mso-font-kerning:14.0pt;
	mso-char-tracking:100%;
	mso-font-width:100%;
	mso-ligatures:standard;
	mso-contextual-alternates:yes;
	mso-swash:no;}
ol
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
ul
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
@page
	{size:8.0302in 11.0in;
	mso-paper-source:15;
	mso-hyphenate:auto;}
-->
</style>
<!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="3074" fillcolor="#f77732 [1]"
  strokecolor="black [0]">
  <v:fill color="#f77732 [1]" color2="white [7]"/>
  <v:stroke color="black [0]" color2="white [7]" weight="2pt">
   <o:left v:ext="view" color="black [0]" color2="white [7]"/>
   <o:top v:ext="view" color="black [0]" color2="white [7]"/>
   <o:right v:ext="view" color="black [0]" color2="white [7]"/>
   <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
   <o:column v:ext="view" color="black [0]" color2="white [7]"/>
  </v:stroke>
  <v:shadow color="black [0]"/>
  <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
  <v:textbox inset="2.88pt,2.88pt,2.88pt,2.88pt"/>
  <o:colormru v:ext="edit" colors="#9aba24,#f77732,#7416a5,#c4260c,#999,#666,#085296"/>
 </o:shapedefaults><o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body style=\'tab-interval:.12in;margin:0\'>

<div style=\'position:absolute;width:5.-1237in;height:12.-789in\'>
<!--[if gte vml 1]><v:shapetype id="_x0000_t202" coordsize="21600,21600" o:spt="202"
 path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path gradientshapeok="t" o:connecttype="rect"/>
</v:shapetype><v:shape id="_x0000_s1025" type="#_x0000_t202" style=\'position:absolute;
 left:36pt;top:36pt;width:345.6pt;height:37.43pt;z-index:1;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\' filled="f"
 fillcolor="#f77732 [1]" stroked="f" strokecolor="#a6a6a6 [5 darken(166)]"
 strokeweight=".5pt" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke opacity=".5" color2="white [7]">
  <o:left v:ext="view" color="#a6a6a6 [5 darken(166)]" opacity=".5" color2="white [7]"
   weight=".5pt" joinstyle="miter"/>
  <o:top v:ext="view" color="#a6a6a6 [5 darken(166)]" opacity=".5" color2="white [7]"
   weight=".5pt" joinstyle="miter"/>
  <o:right v:ext="view" color="#a6a6a6 [5 darken(166)]" opacity=".5" color2="white [7]"
   weight=".5pt" joinstyle="miter"/>
  <o:bottom v:ext="view" color="#a6a6a6 [5 darken(166)]" opacity=".5" color2="white [7]"
   weight=".5pt" joinstyle="miter"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <v:textbox style=\'mso-column-margin:5.76pt\' inset=".72pt,1.44pt,0,0"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="295">
  <b:FUserChangedFmt priv="200">True</b:FUserChangedFmt>
  <b:FMoved priv="300">True</b:FMoved>
  <b:Txwp priv="402">0</b:Txwp>
  <b:Oid priv="C05">(```````````</b:Oid>
  <b:OidAssociated priv="D05">(```````````</b:OidAssociated>
  <b:Qsid priv="2704">2</b:Qsid>
  <b:FIrregOverlap priv="2D00">True</b:FIrregOverlap>
  <b:Qva priv="3504">1</b:Qva>
  <b:DxlMax priv="AA04">4389120</b:DxlMax>
  <b:DylMax priv="AB04">475426</b:DylMax>
  <b:ISptPictureShape priv="B704">0</b:ISptPictureShape>
 </b:otyEscherText>
 <![endif]>
</v:shape><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:1;left:48px;top:48px;width:461px;height:50px\'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=461 height=50 valign=middle style=\'vertical-align:top\'><![endif]>
  <div v:shape="_x0000_s1025" style=\'padding:1.44pt 0pt 0pt .72pt\' class=shape>
  <p class=MsoTitle style=\'mso-pagination:none;line-height:95%\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Trader News</span><span
  lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1026" type="#_x0000_t202"
 style=\'position:absolute;left:36pt;top:73.8pt;width:345.4pt;height:19.33pt;
 z-index:2;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\' fillcolor="#063d71 [3 darken(192)]"
 stroked="f" strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <v:textbox style=\'mso-column-margin:5.76pt\' inset="0,0,0,0"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="318">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qsid>59</b:Qsid>
  <b:Qva>1</b:Qva>
  <b:DxlMax>4386687</b:DxlMax>
  <b:DylMax>245444</b:DylMax>
  <b:ISptPictureShape>0</b:ISptPictureShape>
 </b:otyEscherText>
 <![endif]>
</v:shape><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:2;left:45px;top:96px;width:466px;height:31px\'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=466 height=31 valign=middle bgcolor="#063D71" style=\'vertical-align:
  top;background:#063D71\'><![endif]>
  <div v:shape="_x0000_s1026" style=\'padding:4.8749pt 0pt 0pt 0pt\' class=shape>
  <h1 style=\'mso-pagination:none;margin-left:4.32pt\'><span lang=en-US
  style=\'font-size:8.0pt;line-height:95%;font-family:Arial;language:en-US;
  mso-ansi-language:en-US;mso-ligatures:none\'>A monthly newsletter brought to you by (Company Name)</span><span
  lang=en-US style=\'font-size:8.0pt;line-height:95%;font-family:Arial;
  language:en-US;mso-ligatures:none\'><o:p></o:p></span></h1>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1027" type="#_x0000_t202"
 style=\'position:absolute;left:36.39pt;top:99.6pt;width:121.67pt;height:12.01pt;
 z-index:3;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\' filled="f"
 fillcolor="#f77732 [1]" stroked="f" strokecolor="black [0]" strokeweight="2pt"
 o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <v:textbox style=\'mso-column-count:2;mso-column-margin:5.76pt\' inset="4.32pt,0,0,0"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="300">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qsid>38</b:Qsid>
  <b:DxlMax>1545182</b:DxlMax>
  <b:DylMax>152540</b:DylMax>
  <b:ISptPictureShape>0</b:ISptPictureShape>
 </b:otyEscherText>
 <![endif]>
</v:shape><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:3;left:49px;top:133px;width:162px;height:16px\'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=162 height=16 style=\'vertical-align:top\'><![endif]>
  <div v:shape="_x0000_s1027" style=\'padding:0pt 0pt 0pt 4.32pt\' class=shape>
  <p class=Masthead style=\'mso-pagination:none\'><span lang=en-US
  style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Vol. 1, Issue 1</span><span
  lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1028" type="#_x0000_t202"
 style=\'position:absolute;left:259.74pt;top:99.6pt;width:121.66pt;height:12.01pt;
 z-index:4;visibility:visible;mso-wrap-distance-left:2.88pt;
 mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
 mso-wrap-distance-bottom:2.88pt\' filled="f" fillcolor="#f77732 [1]" stroked="f"
 strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <v:textbox style=\'mso-column-margin:5.76pt\' inset="4.32pt,0,4.32pt,0"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="319">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qsid>61</b:Qsid>
  <b:DxlMax>1545182</b:DxlMax>
  <b:DylMax>152540</b:DylMax>
  <b:ISptPictureShape>0</b:ISptPictureShape>
 </b:otyEscherText>
 <![endif]>
</v:shape><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:4;left:346px;top:133px;width:163px;height:16px\'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=163 height=16 style=\'vertical-align:top\'><![endif]>
  <div v:shape="_x0000_s1028" style=\'padding:0pt 4.32pt 0pt 4.32pt\'
  class=shape>
  <p class=Masthead style=\'mso-pagination:none;text-align:right;text-align:
  right\'><span lang=en-US style=\'language:en-US;mso-ansi-language:en-US;
  mso-ligatures:none\'><span dir=ltr></span>5.6.2016</span><span lang=en-US
  style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:rect id="_x0000_s1029" style=\'position:absolute;
 left:36pt;top:153.91pt;width:79.88pt;height:79.2pt;z-index:5;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\'
 o:preferrelative="t" filled="f" fillcolor="#f77732 [1]" stroked="f"
 strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:imagedata src="Publication2_files/image001.jpg" o:title="0031045F"
  cropleft="10914f" cropright="10914f"/>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <o:lock v:ext="edit" aspectratio="t"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="320">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qtf priv="3404">0</b:Qtf>
  <b:Ohlinfo priv="3A0E">294</b:Ohlinfo>
  <b:DxlMax>1014570</b:DxlMax>
  <b:DylMax>1005840</b:DylMax>
 </b:otyEscherText>
 <b:Filename type="OplFileName" oty="102" oh="294">
  <b:SzFileName priv="318">0031045F.jpg</b:SzFileName>
 </b:Filename>
 <![endif]>
</v:rect><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:5;left:45px;top:203px;width:112px;height:110px\'><img
width=112 height=110 src="Publication2_files/image002.jpg" v:shapes="_x0000_s1029"></span><![endif]><!--[if gte vml 1]><v:rect
 id="_x0000_s1030" style=\'position:absolute;left:124.56pt;top:153.91pt;width:79.92pt;
 height:79.2pt;z-index:6;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\'
 o:preferrelative="t" filled="f" fillcolor="#f77732 [1]" stroked="f"
 strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:imagedata src="Publication2_files/image003.jpg" o:title="00310451"
  croptop="21573f" cropbottom="254f"/>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <o:lock v:ext="edit" aspectratio="t"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="333">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qtf>0</b:Qtf>
  <b:Ohlinfo>298</b:Ohlinfo>
  <b:DxlMax>1014984</b:DxlMax>
  <b:DylMax>1005840</b:DylMax>
 </b:otyEscherText>
 <b:Filename type="OplFileName" oty="102" oh="298">
  <b:SzFileName>00310451.jpg</b:SzFileName>
 </b:Filename>
 <![endif]>
</v:rect><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:6;left:164px;top:203px;width:111px;height:110px\'><img
width=111 height=110 src="Publication2_files/image004.jpg" v:shapes="_x0000_s1030"></span><![endif]><!--[if gte vml 1]><v:rect
 id="_x0000_s1031" style=\'position:absolute;left:213.3pt;top:153.91pt;width:79.74pt;
 height:79.2pt;z-index:7;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\'
 o:preferrelative="t" filled="f" fillcolor="#f77732 [1]" stroked="f"
 strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:imagedata src="Publication2_files/image005.jpg" o:title="00310453"/>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <o:lock v:ext="edit" aspectratio="t"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="335">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qtf>0</b:Qtf>
  <b:Ohlinfo>302</b:Ohlinfo>
  <b:DxlMax>1012638</b:DxlMax>
  <b:DylMax>1005840</b:DylMax>
 </b:otyEscherText>
 <b:Filename type="OplFileName" oty="102" oh="302">
  <b:SzFileName>00310453.jpg</b:SzFileName>
 </b:Filename>
 <![endif]>
</v:rect><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:7;left:282px;top:203px;width:111px;height:110px\'><img
width=111 height=110 src="Publication2_files/image006.jpg" v:shapes="_x0000_s1031"></span><![endif]><!--[if gte vml 1]><v:rect
 id="_x0000_s1032" style=\'position:absolute;left:301.68pt;top:153.91pt;width:79.72pt;
 height:79.2pt;z-index:8;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\'
 o:preferrelative="t" filled="f" fillcolor="#f77732 [1]" stroked="f"
 strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:imagedata src="Publication2_files/image007.jpg" o:title="00310871"
  cropleft="10247f" cropright="17060f"/>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <o:lock v:ext="edit" aspectratio="t"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="337">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qtf>0</b:Qtf>
  <b:Ohlinfo>304</b:Ohlinfo>
  <b:DxlMax>1012551</b:DxlMax>
  <b:DylMax>1005840</b:DylMax>
 </b:otyEscherText>
 <b:Filename type="OplFileName" oty="102" oh="304">
  <b:SzFileName>00310871.jpg</b:SzFileName>
 </b:Filename>
 <![endif]>
</v:rect><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:8;left:400px;top:203px;width:111px;height:110px\'><img
width=111 height=110 src="Publication2_files/image008.jpg" v:shapes="_x0000_s1032"></span><![endif]><!--[if gte vml 1]><v:group
 id="_x0000_s1033" style=\'position:absolute;left:36pt;top:235.04pt;width:345.01pt;
 height:30.96pt;z-index:9\' coordorigin="1079849,1084851" coordsize="43816,3931"
 o:cliptowrap="t">
 <v:shape id="_x0000_s1034" type="#_x0000_t202" style=\'position:absolute;
  left:1079849;top:1084851;width:9651;height:3913;mso-wrap-distance-left:2.88pt;
  mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
  mso-wrap-distance-bottom:2.88pt\' filled="f" fillcolor="#f77732 [1]"
  stroked="f" strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
  <v:fill color2="white [7]"/>
  <v:stroke color2="white [7]">
   <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:column v:ext="view" color="black [0]" color2="white [7]"/>
  </v:stroke>
  <v:shadow color="black [0]"/>
  <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
  <v:textbox style=\'mso-column-margin:5.76pt\' inset="2.16pt,0,0,0">
   <div dir=ltr>
   <p class=MsoCaption style=\'mso-pagination:none\'><span lang=en-US
   style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Top Story Headline</span><br>
   (hyperlink<span
   lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'> to top story)</span><span
   lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></p>
   </div>
  </v:textbox>
  <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="299">
   <b:FUserChangedFmt>True</b:FUserChangedFmt>
   <b:FMoved>True</b:FMoved>
   <b:Txwp>0</b:Txwp>
   <b:Oid>(```````````</b:Oid>
   <b:OidAssociated>(```````````</b:OidAssociated>
   <b:Qsid>64</b:Qsid>
   <b:DxlMax>965153</b:DxlMax>
   <b:DylMax>391383</b:DylMax>
   <b:ISptPictureShape>0</b:ISptPictureShape>
  </b:otyEscherText>
  <![endif]>
 </v:shape><v:shape id="_x0000_s1035" type="#_x0000_t202" style=\'position:absolute;
  left:1091175;top:1084851;width:9652;height:3931;mso-wrap-distance-left:2.88pt;
  mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
  mso-wrap-distance-bottom:2.88pt\' filled="f" fillcolor="#f77732 [1]"
  stroked="f" strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
  <v:fill color2="white [7]"/>
  <v:stroke color2="white [7]">
   <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:column v:ext="view" color="black [0]" color2="white [7]"/>
  </v:stroke>
  <v:shadow color="black [0]"/>
  <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
  <v:textbox style=\'mso-column-margin:5.76pt\' inset="0,0,0,0">
   <div dir=ltr>
   <p class=MsoCaption style=\'mso-pagination:none\'><span lang=en-US
   style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Lorem Ipsum Headline</span><br>
   (hyperlink<span
   lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'> to next story</span>)<span
   lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></p>
   </div>
  </v:textbox>
  <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="326">
   <b:FUserChangedFmt>True</b:FUserChangedFmt>
   <b:FMoved>True</b:FMoved>
   <b:Txwp>0</b:Txwp>
   <b:Oid>(```````````</b:Oid>
   <b:OidAssociated>(```````````</b:OidAssociated>
   <b:Qsid>65</b:Qsid>
   <b:DxlMax>965153</b:DxlMax>
   <b:DylMax>393192</b:DylMax>
   <b:ISptPictureShape>0</b:ISptPictureShape>
  </b:otyEscherText>
  <![endif]>
 </v:shape><v:shape id="_x0000_s1036" type="#_x0000_t202" style=\'position:absolute;
  left:1102638;top:1084851;width:9651;height:3931;mso-wrap-distance-left:2.88pt;
  mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
  mso-wrap-distance-bottom:2.88pt\' filled="f" fillcolor="#f77732 [1]"
  stroked="f" strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
  <v:fill color2="white [7]"/>
  <v:stroke color2="white [7]">
   <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:column v:ext="view" color="black [0]" color2="white [7]"/>
  </v:stroke>
  <v:shadow color="black [0]"/>
  <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
  <v:textbox style=\'mso-column-margin:5.76pt\' inset="0,0,0,0">
   <div dir=ltr>
   <p class=MsoCaption style=\'mso-pagination:none\'><span lang=en-US
   style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Lorem Ipsum Headline</span><br>
   (hyperlink<span
   lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'> to story</span>)<span
   lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></p>
   </div>
  </v:textbox>
  <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="322">
   <b:FUserChangedFmt>True</b:FUserChangedFmt>
   <b:FMoved>True</b:FMoved>
   <b:Txwp>0</b:Txwp>
   <b:Oid>(```````````</b:Oid>
   <b:OidAssociated>(```````````</b:OidAssociated>
   <b:Qsid>66</b:Qsid>
   <b:DxlMax>965153</b:DxlMax>
   <b:DylMax>393192</b:DylMax>
   <b:ISptPictureShape>0</b:ISptPictureShape>
  </b:otyEscherText>
  <![endif]>
 </v:shape><v:shape id="_x0000_s1037" type="#_x0000_t202" style=\'position:absolute;
  left:1114088;top:1084851;width:9578;height:3931;mso-wrap-distance-left:2.88pt;
  mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
  mso-wrap-distance-bottom:2.88pt\' filled="f" fillcolor="#f77732 [1]"
  stroked="f" strokecolor="black [0]" strokeweight="2pt" o:cliptowrap="t">
  <v:fill color2="white [7]"/>
  <v:stroke color2="white [7]">
   <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
    joinstyle="miter"/>
   <o:column v:ext="view" color="black [0]" color2="white [7]"/>
  </v:stroke>
  <v:shadow color="black [0]"/>
  <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
  <v:textbox style=\'mso-column-margin:5.76pt\' inset="0,0,0,0">
   <div dir=ltr>
   <p class=MsoCaption style=\'mso-pagination:none\'><span lang=en-US
   style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Lorem Ipsum Headline</span><br>
   (hyperlink<span
   lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'> to story</span>)<span
   lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></p>
   </div>
  </v:textbox>
  <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="325">
   <b:FUserChangedFmt>True</b:FUserChangedFmt>
   <b:FMoved>True</b:FMoved>
   <b:Txwp>0</b:Txwp>
   <b:Oid>(```````````</b:Oid>
   <b:OidAssociated>(```````````</b:OidAssociated>
   <b:Qsid>67</b:Qsid>
   <b:DxlMax>957719</b:DxlMax>
   <b:DylMax>393192</b:DylMax>
   <b:ISptPictureShape>0</b:ISptPictureShape>
  </b:otyEscherText>
  <![endif]>
 </v:shape><![if pub]><b:otyGroup type="OplPo" oty="48" oh="301">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:CPoGpoe priv="1404">4</b:CPoGpoe>
  <b:RgohpoGpoe type="OplRgOhpoOwner" priv="1514">
   <b:Data priv="E">299</b:Data>
   <b:Data priv="10E">326</b:Data>
   <b:Data priv="20E">322</b:Data>
   <b:Data priv="30E">325</b:Data>
  </b:RgohpoGpoe>
  <b:ISptPictureShape>0</b:ISptPictureShape>
 </b:otyGroup>
 <![endif]>
</v:group><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:9;left:48px;top:313px;width:460px;height:42px\'><img width=460
height=42 src="Publication2_files/image009.png" v:shapes="_x0000_s1033 _x0000_s1034 _x0000_s1035 _x0000_s1036 _x0000_s1037"></span><![endif]><!--[if gte vml 1]><v:shape
 id="_x0000_s1038" type="#_x0000_t202" style=\'position:absolute;left:36pt;
 top:125.66pt;width:345.01pt;height:21.86pt;z-index:10;visibility:visible;
 mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
 mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt\' filled="f"
 fillcolor="#f77732 [1]" stroked="f" strokecolor="black [0]" strokeweight="2pt"
 o:cliptowrap="t">
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
   joinstyle="miter"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <v:textbox style=\'mso-column-margin:5.76pt\' inset="0,0,0,0"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="313">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>0</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qsid>68</b:Qsid>
  <b:DxlMax>4381686</b:DxlMax>
  <b:DylMax>277620</b:DylMax>
  <b:ISptPictureShape>0</b:ISptPictureShape>
 </b:otyEscherText>
 <![endif]>
</v:shape><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:10;left:48px;top:168px;width:460px;height:29px\'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=460 height=29 style=\'vertical-align:top\'><![endif]>
  <div v:shape="_x0000_s1038" style=\'padding:0pt 0pt 0pt 0pt\' class=shape>
  <h2 style=\'mso-pagination:none\'><span lang=en-US style=\'language:en-US;
  mso-ansi-language:en-US;mso-ligatures:none\'>Top stories in this newsletter</span><span
  lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></h2>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]><!--[if gte vml 1]><v:shape id="_x0000_s1039" type="#_x0000_t202"
 style=\'position:absolute;left:36pt;top:272.93pt;width:345.01pt;height:651.9pt;
 z-index:11;visibility:visible;mso-wrap-edited:t;mso-wrap-distance-left:2.88pt;
 mso-wrap-distance-top:2.88pt;mso-wrap-distance-right:2.88pt;
 mso-wrap-distance-bottom:2.88pt\' wrapcoords="-47 -56 21647 -56 21647 21722 -47 21722 -47 -56"
 filled="f" fillcolor="#f77732 [1]" stroked="f" strokecolor="black [0]"
 strokeweight="2pt" o:clip="t" o:cliptowrap="t">
 <o:clippath o:v="m-47,-56r21694,l21647,21722r-21694,l-47,-56xe"/>
 <v:fill color2="white [7]"/>
 <v:stroke color2="white [7]">
  <o:left v:ext="view" color="black [0]" color2="white [7]"/>
  <o:top v:ext="view" color="black [0]" color2="white [7]"/>
  <o:right v:ext="view" color="black [0]" color2="white [7]"/>
  <o:bottom v:ext="view" color="black [0]" color2="white [7]"/>
  <o:column v:ext="view" color="black [0]" color2="white [7]"/>
 </v:stroke>
 <v:shadow color="black [0]"/>
 <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
 <v:textbox style=\'mso-column-margin:5.76pt\' inset="0,0,0,0"/>
 <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="297">
  <b:FUserChangedFmt>True</b:FUserChangedFmt>
  <b:FMoved>True</b:FMoved>
  <b:Txwp>3</b:Txwp>
  <b:Oid>(```````````</b:Oid>
  <b:OidAssociated>(```````````</b:OidAssociated>
  <b:Qsid>70</b:Qsid>
  <b:FIrregOverlap>True</b:FIrregOverlap>
  <b:DxlMax>4381686</b:DxlMax>
  <b:DylMax>8279141</b:DylMax>
  <b:ISptPictureShape>0</b:ISptPictureShape>
 </b:otyEscherText>
 <![endif]>
</v:shape><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;position:
absolute;z-index:11;left:48px;top:364px;width:460px;height:869px\'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=460 height=869 style=\'vertical-align:top\'><![endif]>
  <div v:shape="_x0000_s1039" style=\'padding:0pt 0pt 0pt 0pt\' class=shape>
  <h2 style=\'mso-pagination:none\'><span lang=en-US style=\'language:en-US;
  mso-ansi-language:en-US;mso-ligatures:none\'>Top Story Headline</span><!--[if gte vml 1]><v:rect
   id="_x0000_s1043" style=\'width:25.72897mm;height:17.15947mm;
   mso-wrap-edited:t;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
   mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt;
   mso-position-horizontal:left\' o:preferrelative="t" wrapcoords="-637 -466 -637 22226 23769 22275 23619 -61 -637 -466"
   filled="f" fillcolor="#f77732 [1]" stroked="f" strokecolor="black [0]"
   strokeweight="2pt" o:clip="t" o:cliptowrap="t">
   <o:clippath o:v="m-637,-466r,22692l23769,22275,23619,-61,-637,-466xe"/>
   <v:fill color2="white [7]"/>
   <v:stroke color2="white [7]">
    <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:column v:ext="view" color="black [0]" color2="white [7]"/>
   </v:stroke>
   <v:imagedata src="Publication2_files/image001.jpg" o:title="0031045F"/>
   <v:shadow color="black [0]"/>
   <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
   <o:lock v:ext="edit" ungrouping="t" aspectratio="t" grouping="t"/>
   <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="296">
    <b:FUserChangedFmt>True</b:FUserChangedFmt>
    <b:FMoved>True</b:FMoved>
    <b:Txws priv="502">4</b:Txws>
    <b:Oid>(```````````</b:Oid>
    <b:OidAssociated>(```````````</b:OidAssociated>
    <b:Qtf>0</b:Qtf>
    <b:Ohlinfo>346</b:Ohlinfo>
    <b:DxlMax>926243</b:DxlMax>
    <b:DylMax>617741</b:DylMax>
   </b:otyEscherText>
   <b:Filename type="OplFileName" oty="102" oh="346">
    <b:SzFileName>0031045F.jpg</b:SzFileName>
   </b:Filename>
   <![endif]>
  </v:rect><![endif]--><![if !word & !ppt & !excel & !vml]><img width=103
  height=70 src="Publication2_files/image010.png" class=shape v:dpi="96"><![endif]><span
  lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></h2>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptura. At vero eos et accusam et justo duo Dolores et ea rebum.<o:p></o:p></span></p>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.<o:p></o:p></span></p>
  <p class=ParagraphBorder style=\'mso-pagination:none\'><span lang=en-US
  style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>&nbsp;
  <!--[if pub]><xml>
   <b:RuleGroupAfter>
    <b:rule-size>0.50</b:rule-size>
    <b:rule-color>965208</b:rule-color>
   </b:RuleGroupAfter>
  </xml><![endif]--><o:p></o:p></span></p>

  <![if !pub]>
  <hr size=1 noshade color="#085296" style=\'color:#085296;size:.5pt\'>
  <![endif]>
  <h2 style=\'mso-pagination:none\'><span lang=en-US style=\'language:en-US;
  mso-ansi-language:en-US;mso-ligatures:none\'>Lorem Ipsum Headline</span><!--[if gte vml 1]><v:rect
   id="_x0000_s1040" style=\'width:25.72897mm;height:17.15947mm;
   mso-wrap-edited:t;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
   mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt;
   mso-position-horizontal:left\' o:preferrelative="t" wrapcoords="-637 -466 -637 22226 23769 22275 23619 -61 -637 -466"
   filled="f" fillcolor="#f77732 [1]" stroked="f" strokecolor="black [0]"
   strokeweight="2pt" o:clip="t" o:cliptowrap="t">
   <o:clippath o:v="m-637,-466r,22692l23769,22275,23619,-61,-637,-466xe"/>
   <v:fill color2="white [7]"/>
   <v:stroke color2="white [7]">
    <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:column v:ext="view" color="black [0]" color2="white [7]"/>
   </v:stroke>
   <v:imagedata src="Publication2_files/image003.jpg" o:title="00310451"
    croptop="36142f" cropbottom="243f"/>
   <v:shadow color="black [0]"/>
   <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
   <o:lock v:ext="edit" ungrouping="t" aspectratio="t" grouping="t"/>
   <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="315">
    <b:FUserChangedFmt>True</b:FUserChangedFmt>
    <b:FMoved>True</b:FMoved>
    <b:Txws>4</b:Txws>
    <b:Oid>(```````````</b:Oid>
    <b:OidAssociated>(```````````</b:OidAssociated>
    <b:Qtf>0</b:Qtf>
    <b:Ohlinfo>321</b:Ohlinfo>
    <b:DxlMax>926243</b:DxlMax>
    <b:DylMax>617741</b:DylMax>
   </b:otyEscherText>
   <b:Filename type="OplFileName" oty="102" oh="321">
    <b:SzFileName>00310451.jpg</b:SzFileName>
   </b:Filename>
   <![endif]>
  </v:rect><![endif]--><![if !word & !ppt & !excel & !vml]><img width=103
  height=70 src="Publication2_files/image011.png" class=shape v:dpi="96"><![endif]><span
  lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></h2>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptura. At vero eos et accusam et justo duo Dolores et ea rebum.<o:p></o:p></span></p>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptura. At vero eos et accusam et justo duo Dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<o:p></o:p></span></p>
  <p class=ParagraphBorder style=\'mso-pagination:none\'><span lang=en-US
  style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>&nbsp;
  <!--[if pub]><xml>
   <b:RuleGroupAfter>
    <b:rule-size>0.50</b:rule-size>
    <b:rule-color>965208</b:rule-color>
   </b:RuleGroupAfter>
  </xml><![endif]--><o:p></o:p></span></p>

  <![if !pub]>
  <hr size=1 noshade color="#085296" style=\'color:#085296;size:.5pt\'>
  <![endif]>
  <h2 style=\'mso-pagination:none\'><span lang=en-US style=\'language:en-US;
  mso-ansi-language:en-US;mso-ligatures:none\'>Lorem Ipsum Headline</span><!--[if gte vml 1]><v:rect
   id="_x0000_s1041" style=\'width:25.72897mm;height:17.15947mm;
   mso-wrap-edited:t;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
   mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt;
   mso-position-horizontal:left\' o:preferrelative="t" wrapcoords="-637 -466 -637 22226 23769 22275 23619 -61 -637 -466"
   filled="f" fillcolor="#f77732 [1]" stroked="f" strokecolor="black [0]"
   strokeweight="2pt" o:clip="t" o:cliptowrap="t">
   <o:clippath o:v="m-637,-466r,22692l23769,22275,23619,-61,-637,-466xe"/>
   <v:fill color2="white [7]"/>
   <v:stroke color2="white [7]">
    <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:column v:ext="view" color="black [0]" color2="white [7]"/>
   </v:stroke>
   <v:imagedata src="Publication2_files/image005.jpg" o:title="00310453"
    croptop="17125f" cropbottom="4702f"/>
   <v:shadow color="black [0]"/>
   <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
   <o:lock v:ext="edit" ungrouping="t" aspectratio="t" grouping="t"/>
   <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="327">
    <b:FUserChangedFmt>True</b:FUserChangedFmt>
    <b:FMoved>True</b:FMoved>
    <b:Txws>4</b:Txws>
    <b:Oid>(```````````</b:Oid>
    <b:OidAssociated>(```````````</b:OidAssociated>
    <b:Qtf>0</b:Qtf>
    <b:Ohlinfo>309</b:Ohlinfo>
    <b:DxlMax>926243</b:DxlMax>
    <b:DylMax>617741</b:DylMax>
   </b:otyEscherText>
   <b:Filename type="OplFileName" oty="102" oh="309">
    <b:SzFileName>00310453.jpg</b:SzFileName>
   </b:Filename>
   <![endif]>
  </v:rect><![endif]--><![if !word & !ppt & !excel & !vml]><img width=103
  height=70 src="Publication2_files/image012.png" class=shape v:dpi="96"><![endif]><span
  lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></h2>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptura. At vero eos et accusam et justo duo Dolores et ea rebum.<o:p></o:p></span></p>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptura. At vero eos et accusam et justo duo Dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<o:p></o:p></span></p>
  <p class=ParagraphBorder style=\'mso-pagination:none\'><span lang=en-US
  style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>&nbsp;
  <!--[if pub]><xml>
   <b:RuleGroupAfter>
    <b:rule-size>0.50</b:rule-size>
    <b:rule-color>965208</b:rule-color>
   </b:RuleGroupAfter>
  </xml><![endif]--><o:p></o:p></span></p>

  <![if !pub]>
  <hr size=1 noshade color="#085296" style=\'color:#085296;size:.5pt\'>
  <![endif]>
  <h2 style=\'mso-pagination:none\'><span lang=en-US style=\'language:en-US;
  mso-ansi-language:en-US;mso-ligatures:none\'>Lorem Ipsum Headline</span><!--[if gte vml 1]><v:rect
   id="_x0000_s1042" style=\'width:25.72897mm;height:17.15947mm;
   mso-wrap-edited:t;mso-wrap-distance-left:2.88pt;mso-wrap-distance-top:2.88pt;
   mso-wrap-distance-right:2.88pt;mso-wrap-distance-bottom:2.88pt;
   mso-position-horizontal:left\' o:preferrelative="t" wrapcoords="-637 -466 -637 22226 23769 22275 23619 -61 -637 -466"
   filled="f" fillcolor="#f77732 [1]" stroked="f" strokecolor="black [0]"
   strokeweight="2pt" o:clip="t" o:cliptowrap="t">
   <o:clippath o:v="m-637,-466r,22692l23769,22275,23619,-61,-637,-466xe"/>
   <v:fill color2="white [7]"/>
   <v:stroke color2="white [7]">
    <o:left v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:top v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:right v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:bottom v:ext="view" color="black [0]" color2="white [7]" weight="2pt"
     joinstyle="miter"/>
    <o:column v:ext="view" color="black [0]" color2="white [7]"/>
   </v:stroke>
   <v:imagedata src="Publication2_files/image007.jpg" o:title="00310871"
    cropleft="4109f" cropright="4109f"/>
   <v:shadow color="black [0]"/>
   <o:extrusion v:ext="view" backdepth="0" viewpoint="0,0" viewpointorigin="0,0"/>
   <o:lock v:ext="edit" ungrouping="t" aspectratio="t" grouping="t"/>
   <![if pub]><b:otyEscherText type="OplPo" oty="1" oh="303">
    <b:FUserChangedFmt>True</b:FUserChangedFmt>
    <b:FMoved>True</b:FMoved>
    <b:Txws>4</b:Txws>
    <b:Oid>(```````````</b:Oid>
    <b:OidAssociated>(```````````</b:OidAssociated>
    <b:Qtf>0</b:Qtf>
    <b:Ohlinfo>328</b:Ohlinfo>
    <b:DxlMax>926243</b:DxlMax>
    <b:DylMax>617741</b:DylMax>
   </b:otyEscherText>
   <b:Filename type="OplFileName" oty="102" oh="328">
    <b:SzFileName>00310871.jpg</b:SzFileName>
   </b:Filename>
   <![endif]>
  </v:rect><![endif]--><![if !word & !ppt & !excel & !vml]><img width=103
  height=70 src="Publication2_files/image013.png" class=shape v:dpi="96"><![endif]><span
  lang=en-US style=\'language:en-US;mso-ligatures:none\'><o:p></o:p></span></h2>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptura. At vero eos et accusam et justo duo Dolores et ea rebum.<o:p></o:p></span></p>
  <p class=MsoBodyText style=\'mso-pagination:none;margin-left:86.4pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptura. At vero eos et accusam et justo duo Dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<o:p></o:p></span></p>
  <p class=ClosingParagraphBorder style=\'mso-pagination:none\'><span lang=en-US
  style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>&nbsp;
  <!--[if pub]><xml>
   <b:RuleGroupAfter>
    <b:rule-offset-distance>3.00</b:rule-offset-distance>
    <b:rule-size>6.00</b:rule-size>
    <b:rule-color>713d06</b:rule-color>
    <b:rule-color-Ext>8000003</b:rule-color-Ext>
    <b:rule-color-ExtMod>10c001f4</b:rule-color-ExtMod>
   </b:RuleGroupAfter>
  </xml><![endif]--><o:p></o:p></span></p>

  <![if !pub]>
  <hr size=8 noshade color="#063d71" style=\'color:#063D71;size:6.0pt\'>
  <![endif]>
  <p class=BodyText2closingbar style=\'mso-pagination:none;margin-left:4.32pt\'><span
  lang=en-US style=\'language:en-US;mso-ansi-language:en-US;mso-ligatures:none\'>[Company Name]<br>
  email@companyname.com (hyperlink)<br>
  1234 Boulevard St, Austin, TX US 94901<br>
  (415) 555-0333<o:p></o:p></span></p>
  <p class=BodyText2closingbar style=\'mso-pagination:none;margin-left:4.32pt;
  margin-bottom:0pt\'><span lang=en-US style=\'language:en-US;mso-ansi-language:
  en-US;mso-ligatures:none\'>Click to unsubscribe (hyperlink)<br>
  Next edition: [Title here]<o:p></o:p></span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]>
</div>

</body>

</html>
';
$headers = 'From: '.'advisor@advising.ufl.edu'."\r\n" .
'Reply-To: '.'no-reply@ufl.edu'."\r\n" .
'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
'BCC: '.$bcc."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $body, $headers, "-f please-do-not-reply@ufl.edu"); 
}
$row++;
}
}

else {
if (($glid=='tsy') OR ($glid=='danshields')){
echo "<br /><br /><form name='evalemail' action='joesnewsletter2.php' method='POST'>
<p><input type='submit' onsubmit='return validate_form ( );' value='Send' name='submit' /></p>
</form>";
}
}

?>
</div>
<?php
include ("../../../includes/footer.html");
include ("../../../includes/analytics.html"); 
?>
</div>
</body>
</html>