<?php

  $date_auto = date("Y-m-d H:i:s");
  $name=$_SERVER["HTTP_UFSHIB_BUSINESSNAME"];
  include ("include/fgcontactform.php");

  $formproc = new FGContactForm();

  //1. Add your email address here. You can add more than one receipient.
  $formproc->AddRecipient('acatalano2@ufl.edu', 'alex.catalano2@gmail.com'); //<<---Put your email address here

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
