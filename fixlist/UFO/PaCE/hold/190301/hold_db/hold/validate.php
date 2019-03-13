$error = "";
if (isset($_POST['submit'])) {
  $id = $_POST["ufId"];
  if ($id !== $UFID) {
    $error = "ID was incorrect, please try again!";
  } else {
    header("Location: thankYou.php");
    exit;
  }
}
