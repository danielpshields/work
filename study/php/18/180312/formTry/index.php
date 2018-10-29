<?php include("functions.php");

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    if ($username == "alex") {
      redirect_to("template.php");
    } else {
      $message = "username not found";
    }
  } else {
    $username = "";
    $message = "please log in";
  }

?>
<?php include("../include/header.php"); ?>
<h2>index</h2>

<p><i><?php echo $message; ?></i></p>

<form action="index.php" method="post">

  <input type="text" name="username">
  <input type="submit" name="submit" value="submit">

</form>


<?php include("../include/footer.php"); ?>
