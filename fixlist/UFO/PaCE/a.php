<?php
  include("include/header.php");
  $error = "";

  if (isset($_POST['submit'])) {
    $id = $_POST["ufId"];
    if ($id !== $UFID) {
      $error = "please try again";
    } else {
      header("Location: b.php");
      $svg = include("image/uf_logo.svg");
      exit;
    }
  }

?>

  <h2>Welcome, <?php echo $firstName; ?></h2>
  <p>Please enter your UF ID number:</p>
  <form class="inputShell" action="a.php" method="post">
    <input type="text" name="ufId" value="" placeholder="########">
    <label for="ufId">UF ID number</label>
    <p><?php echo $error; ?></p>
    <input id="submitButton" type="submit" name="submit" value="submit">
  </form>


<?php require("include/footer.php"); ?>
