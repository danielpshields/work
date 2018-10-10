<?php

    //allows no file to be uploaded and the form to continue
    $yourDocument = "";

    //ensure the page was reached via the previous page
    //pulls in redirect
    require("include/functions.php");
    if (!isset($_POST['formFive'])) {
      redirectTo("index.php");
    }

   	$thisPage = "6";
    $submitted = 0;
    $page = "submit";
    // page's header
    require_once("include/header.php");

    require("include/contactForm.php");

    $formproc = new FGContactForm();

    //1. Add your email address here. You can add more than one receipient.
    $formproc->AddRecipient('acatalano2@ufl.edu'); //<<---Put your email address here

    //2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
    // and put it here
    $formproc->SetFormRandomKey('xdvgMTQYvH3VfOm');

    //3. Identify the types and size of file allowed for sending
    $formproc->AddFileUploadField('file','jpg,gif,pdf,docx,png',220024);

    if(isset($_POST['formFive']))
    {
       if($formproc->ProcessForm())
       {
            $formproc->RedirectToURL("7.php");
       }
    }

    $majorSelected = $_POST['majorSelected'];
    $writtenResponse = $_POST['writtenResponse'];
    $writtenResponse = htmlspecialchars($writtenResponse, ENT_QUOTES);

?>


    <form action="7.php" method="post">
      <h2>Submit</h2>
      <p>This completes the acknowledgement form. Select the button below to submit and move on to the next step in the program change request.</p>


      <ul>
        <li>You selected:<br><b><?php echo $majorSelected; ?></b> as your intended UF Online major.</li>

        <?php
            foreach ($_FILES as $file => $secondArray) {
              foreach ($secondArray as $key => $value) {
                if ($key === "name" && $value !== "") {
                  if ($key === "name") { ?>
                  <li>You submitted:<br><b><?php echo "\"" . $value . "\""; ?></b> for review</li>
                  <?php $yourDocument = $value; ?>
            <?php }
                }
              }
            }
        ?>
      </ul>
      <input class="displayNone" name="majorSelected" value="<?php $majorSelected; ?>">
      <input class="displayNone" name="writtenResponse" value='<?php echo htmlentities($writtenResponse, ENT_QUOTES); ?>'>
      <input class="displayNone" name="yourDocument" value="<?php echo $yourDocument; ?>">
      <input type="submit" name="submit" value="submit this information">
    </form>

<?php require_once("include/footer.php"); ?>
