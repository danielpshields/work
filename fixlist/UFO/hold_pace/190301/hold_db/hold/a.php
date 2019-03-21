<?php
  include("include/header.php");
  $error = "";

  if (isset($_POST['submit'])) {
    $id = $_POST["ufId"];
    if ($id !== $UFID) {
      $error = "ID was incorrect, please try again!";
    } else {
      header("Location: c.php");
      $svg = include("image/uf_logo.svg");
      exit;
    }
  }

?>

  <h2>Hello, <?php echo $firstName; ?>!</h2>

  <form  action="index.php" method="post">


        <div class="inputShell">
          <p>Please enter your UF ID number:</p>
          <input type="text" name="ufId" value="" placeholder="########">
          <label for="ufId">UF ID number</label>
          <p id="loginError"><?php echo $error; ?></p>
        </div><!-- input shell -->


    <input class="submitButton" type="submit" name="submit" value="submit">
  </form>


<?php require("include/footer.php"); ?>
