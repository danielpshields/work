<?php require_once("functions.php"); $errors = array();

   if (isset($_POST['submit'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];

     if (!thereIs($username)) {
       $errors['presence'] = "username cannot be blank";
     }

    if ($username === "alex" && $password === "password") {
        redirectTo("template.php");
    } else {
      $message = "please try again";
    }

   } else {
     $username = "";
     $message = "welcome, please enter a username and password";
   }
?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>

<p><?php echo $message; ?></p>

<p><?php echo displayErrors($errors); ?></p>

<form action="index.php" method="post">
  <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
  <input type="password" name="password" value="">
  <input type="submit" name="submit" value="submit">
</form>

<?php include("../include/footer.php"); ?>
