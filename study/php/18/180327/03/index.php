<?php require("functions.php");
  $errors = array();

  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);



    $fieldsRequired = array("username", "password");

    foreach ($fieldsRequired as $field) {
      $value = $_POST[$field];
      if (!thereIs($value)) {
        $errors[$field] = "{$field} cannot be blank";
      }
    }

    if (!rightPassword($password)) {
      $errors['passwordHope'] = "password incorrect";
    }

    if ($username === "alex" && $password === "password") {
      redirectTo("template.php");
    } else {
      $message = "great try! please try again";
    }
  } else {
     $message = "welcome, please log in";
   }
?>
<?php $title = "index"; $stylesheet = $title; include("../include/header.php"); ?>

  <p><?php echo $message; ?></p>
  <?php echo displayErrors($errors); ?>
  <form action="index.php" method="post">
    username: <input type="text" name="username" value=""><br>
    password: <input type="password" name="password" value=""><br>
    <input type="submit" name="submit" value="submit">
  </form>

<?php include("../include/footer.php"); ?>
