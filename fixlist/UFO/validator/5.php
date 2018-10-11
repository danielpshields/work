<?php
  require("include/functions.php");

  // if (!isset($_POST['formFour'])) {
  //   redirectTo("index.php");
  // }

  $page = "statement";
 	$thisPage = "5";
  $submitted = 0;
  require("include/glid.php");
  $date_auto = date("Y-m-d H:i:s");
  $name=$_SERVER["HTTP_UFSHIB_BUSINESSNAME"];
  include ("include/fgcontactform.php");

  $formproc = new FGContactForm();

  //1. Add your email address here. You can add more than one receipient.
  $formproc->AddRecipient('CLASUFOnline@advising.ufl.edu'); //<<---Put your email address here

  //2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
  // and put it here
  $formproc->SetFormRandomKey('xdvgMTQYvH3VfOm');

  //3. Identify the types and size of file allowed for sending
  $formproc->AddFileUploadField('photo','jpg,gif,pdf,docx,png',2024);

  if(isset($_POST['submitted']))
  {
     if($formproc->ProcessForm())
     {
          $formproc->RedirectToURL("7.php");
     }
  }
	require_once("include/header.php");
?>
      <h2><span class="orange"><?php echo $thisPage; ?>.</span> Statement</h2>

      <section>
        <form method="post" enctype="multipart/form-data">
          <p>Please indicate your desired UF College of Liberal Arts and Sciences Online major:</p>
          <select required id="selectMajor" name="majorSelected">
            <option disabled selected value="">Please select a major</option>
            <option value="Anthropology">Anthropology</option>
            <option value="Biology">Biology</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Criminology">Criminology</option>
            <option value="Geography">Geography</option>
            <option value="Geology">Geology</option>
            <option value="Psychology">Psychology</option>
            <option value="Sociology">Sociology</option>
          </select>
          <textarea required id="writtenResponse" name="writtenResponse" placeholder="Please explain why you are unable to remain in our current residential program."></textarea>
          <p>If you would like to upload any supporting documentation to email to an advisor:</p>

          <!-- Form Code Start -->
          <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>


          <fieldset >

          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
          <!-- <input type='text'  class='spmhidip' name='<?php //echo $formproc->GetSpamTrapInputName(); ?>' /> -->


          <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>



              <label for='photo' >Upload a document. It <em>must</em> be 2MB or less. We accept only PNG, PDF, JPG, GIF, or DOCX.</label> <span id='contactus_photo_errorloc' class='error'></span><br/>
              <input type="file" name='photo' id='photo' tabindex=6/><br/>

              <input type='submit' name='Submit' value='submit this information' tabindex=10 />
          </div>
        </form>

<?php require_once("include/footer.php"); ?>
