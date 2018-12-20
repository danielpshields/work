<!-- "inputTriggers.php": needed to submit / email the form but dont affect the form fields / content" -->
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'>
<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
