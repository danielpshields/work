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

  <!-- <h2>Welcome, <?php echo $firstName; ?>!</h2> -->
  <h2>Hello, Alex!</h2>
  <form class="inputShell" action="a.php" method="post">
    <p>Please enter your UF ID number:</p>
    <input type="text" name="ufId" value="" placeholder="########">
    <label for="ufId">UF ID number</label>
    <p><?php echo $error; ?></p>
    <input id="submitButton" type="submit" name="submit" value="submit">
  </form>


<?php require("include/footer.php"); ?>
