<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "supratt";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {die("connection died" . mysqli_connect_error() . mysqli_connect_errno());}

  $menu_name = "DeleteMe";
  $position = 5;
  $visible = 1;

  $query = "INSERT INTO subjects (menu_name, position, visible)
            VALUES ('{$menu_name}', '{$position}', '{$visible}')";

$result = mysqli_query($connection, $query);
if ($result) { echo "success redirect to somepage.php"; } else {die("query failed" . mysqli_error($connection));}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Widget Corp</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <h1>Widget Corp</h1>
      <ul>
        <?php while ($subject = mysqli_fetch_assoc($result)) { ?>
        <li><?php echo $subject["menu_name"]; ?></li>
        <?php } ?>
      </ul>
      <div class="clear"></div>
    </header>
  </body>
</html>
<?php mysqli_close($connection); ?>
