<?php
  require_once("include/emailcode.php");
	require_once("include/header.php");
?>


  <form  action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

  
  <input type="text" name="name">
  <p>name</p>
  <input type="text" name="password">
  <p>password</p>
  <input type="text" name="email">
  <p>email</p>


  <input type='hidden' name='submitted' id='submitted' value='1'/>

  <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
  <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>

  <input type="file" name='photo' id='photo' tabindex=6/><br/>
  <p>upload a file 2MB or less<br>We accept only PNG, PDF, JPG, GIF, or DOCX.</p>
  <!-- <label for='photo' >Upload a document. It <em>must</em> be 2MB or less. We accept only PNG, PDF, JPG, GIF, or DOCX.</label> <span id='contactus_photo_errorloc' class='error'></span><br/> -->

  <input type='submit' name='Submit' value='submit this information' tabindex=10 />
</form>

<?php require_once("include/footer.php"); ?>
