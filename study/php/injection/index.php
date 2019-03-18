<?php
include '../include/db.php';
include '../validations/validations.php';

  $checkbox = "";
  $checkbox2 = "";
  $user = "";
  $pass = "";
  $sort = "";

  if (isset($_POST['submit'])) {
    echo "<pre>";
    echo print_r($_POST);
    echo "</pre>";
    $user = $_POST['user'];
    $user = mysqli_real_escape_string($connection, $user);
    $pass = $_POST['pass'];
    $pass = mysqli_real_escape_string($connection, $pass);
    $sort = $_POST['sort'];
    $sort = mysqli_real_escape_string($connection, $sort);
    $responses = array($user, $pass, $sort);
    foreach ($responses as $key) {
      if (!isset($key) || empty($key)) {
        echo "fields cannot be empty";
      } else {
        $query = "INSERT INTO users (user, pass, sort) VALUES ('{$user}', '{$pass}', '{$sort}')";
        $postit = mysqli_query($connection, $query);
        if (!$postit) {die("query failed");}
      }
    }

  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <h1>Injection Validation</h1>
    <p><?php addslashes("add's slashes"); ?></p>
    <p><?php mysqli_real_escape_string($connection, "add's slashes"); ?></p>

    <?php $checkbox = "checkbox"; ?>

    <form action="index.php" method="post">
      <input type="text" name="user" placeholder="user" value="<?php echo $user; ?>"><br>
      <input type="text" name="pass" placeholder="pass" value="<?php echo $pass; ?>"><br>
      <input type="text" name="sort" placeholder="sort" value="<?php echo $sort; ?>"><br>
      <input type="checkbox" name="checkbox" value="<?php echo $checkbox; ?>"<?php if(isset($_POST['checkbox'])) {echo "checked='checked'"; } ?>  /><br />
      <input type="checkbox" name="checkbox2" value="<?php echo $checkbox . "2"; ?>"<?php if(isset($_POST['checkbox2'])) {echo "checked='checked'"; } ?>  /><br />

      <input type="submit" name="submit" value="submit">
    </form>


    <table>
      <?php
      $read = "SELECT * FROM users ORDER BY id DESC";
      $readDB = mysqli_query($connection, $read);
      while ($row = mysqli_fetch_assoc($readDB)) { ?>
        <tr><td><?php echo $row['id']; ?></td><td><?php echo $row['user']; ?></td><td><?php echo $row['pass']; ?></td><td><?php echo $row['sort']; ?></td></tr>
      <?php  }  ?>
    </table>

  </body>
</html>
