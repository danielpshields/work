<?PHP
require("include/glid.php");
$date_auto = date("Y-m-d H:i:s");
$name=$_SERVER["HTTP_UFSHIB_BUSINESSNAME"];
include ("include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here. You can add more than one receipient.
$formproc->AddRecipient('acatalano2@ufl.edu'); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('xdvgMTQYvH3VfOm');

//3. Identify the types and size of file allowed for sending
$formproc->AddFileUploadField('photo','jpg,gif,pdf,docx,png',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>AAC Communications Form | University of Florida</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

<link rel="icon" type="image/jpg" href="/images/favicon.jpg" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/evalstyle.css" type="text/css" media="screen" />

<style type="text/css" media="screen">
	#content{width:760px;}
	#content textarea {margin-left:0px;}
	legend{font-weight:bold;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<!--PING A FILE TO KEEP THE PAGE ALIVE-->
<script type="text/javascript" src="scripts/email.js"></script>
</head>
<body>



<!-- <?php
//include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/header.html");
?> -->

<div id="mainContainer">
 <div id="content">


<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>


<fieldset >

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />


<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>


<div class='container'>
    <label for='photo' >Upload a document. It <em>must</em> be 2MB or less. We accept only PNG, PDF, JPG, GIF, or DOCX.</label> <span id='contactus_photo_errorloc' class='error'></span><br/>
    <input type="file" name='photo' id='photo' tabindex=6/><br/>
</div>



<div class='container'>
    <input type='submit' name='Submit' value='SEND EMAIL' tabindex=10 />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<!-- <script type='text/javascript' src="scripts/errors.js"></script> -->
</body>
</html>
