<?php require_once("functions.php"); $errors = array(); $message = "";
 if (isset($_POST['submit'])) {
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);

   $requiredFields = array("username", "password");
   foreach ($requiredFields as $field) {
     $value = $_POST[$field];
     if (!hasPresence($value)) {
       $errors[$field] = $field . " cannot be blank";
     }
   }





   if (empty($errors)) {
     if ($username === "alex" && $password === "password") {
       redirectTo("template.php");
     } else {
       $message = "please try again";
     }
   }

 } else {
   $username = "";
   $message = "welcome! Please log in";
 }
?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>

  <p><?php echo $message; ?></p>

  <?php echo displayErrors($errors); ?>
  <form action="index.php" method="post">
    username: <input type="text" name="username" value="<?php echo $username; ?>"><br>
    password: <input type="password" name="password" value=""><br>
    <input type="submit" name="submit" value="submit">
  </form>

<?php include("../include/footer.php"); ?>
