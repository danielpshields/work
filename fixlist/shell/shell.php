<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body {width: 800px;margin: auto; padding-top: 50px;}
    </style>
  </head>
  <body>

  <ul>
    <a href="form.php">form</a></li>
  </ul>

  <?php

      $majors = array (
        "anthropology"    => "laura",
        "biology"         => "dylan",
        "computerScience" => "fallen",
        "criminology"     => "laura",
        "geography"       => "dylan",
        "geology"         => "dylan",
        "psychology"      => "fallen",
        "sociology"       => "nicole"
      );


      $advisors = array(
        "dylan"  => "#1e5419;",
        "fallen" => "#797979;",
        "laura"  => "#5e2d96;",
        "nicole" => "#1073e3;"
      );

      $selectedMajor = $_POST['major'];
      $advisor = $majors[$selectedMajor];
      $hex = $advisors[$advisor];

?>

  <div style="height: 100px; width: 100px; background: <?php echo $hex; ?>">
    <p><?php echo $advisor; ?></p>
  </div>



  </body>
</html>
