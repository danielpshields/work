<?php
if(isset($_POST['submit'])) {
  $name  = $_POST['name'];
  $email = $_POST['email'];
  require("include/db.php");
  $query  = "INSERT INTO exploratory (name, email) VALUES ('{$name}', '{$email}')";
  $spitResults = mysqli_query($connection, $query);
  if (!$spitResults) { die ("query failed"); }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Databases</title>
  </head>
  <body>
    <h1>Database:</h1>
    <form action="database_insert.php" method="post">
      <input type="text" name="name" value="" placeholder="name"><br>
      <input type="text" name="email" value="" placeholder="email"><br>
      <input type="submit" name="submit" value="submit">
    </form>
    <ul>
      <li><a href="#">here</a></li>
      <li><a href="database_results.php">exploratory recordsinclude/</a></li>
    </ul>
  </body>
</html>
<?php

  mysqli_close($connection);
?>
