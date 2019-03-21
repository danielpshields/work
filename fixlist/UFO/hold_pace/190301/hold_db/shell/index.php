<?php
$connection = mysqli_connect("ict-prod-hosting03.mysql.osg.ufl.edu", "acadvise", "PodWVF06s4cfU156p1Bb","test",3360);
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); } else { echo "connection ok"; }
if (isset($_POST['submit'])) {
  $myname = $_POST['myname'];
  $query  = "INSERT INTO alex (name) VALUES ('{$myname}')";
  $spitIt = mysqli_query($connection, $query);
  if (!$spitIt) { die ("<br>query failed"); } else {echo "success!";}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Test DB</h1>
    <form action="index.php" method="post">
      <input type="text" name="myname" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
