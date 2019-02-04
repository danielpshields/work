<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/time.css">
  </head>
  <body>

    <?php
      $early = 30;
      $lunch = 60;
      $break = 15;
      $noBreak = $early + $lunch + ($break * 2); ?>
    ?>


    <table>
      <tr>
        <th>date</th>
        <th>in</th>
        <th>out</th>
        <th>in</th>
        <th>out</th>
        <th>current</th>
        <th>total</th>
      </tr>
      <tr>
        <td>start | 190204_monday</td><!-- probably need to put this into a database -- could be local -->
        <td>7:30 a.m.</td>
        <td></td>
        <td></td>
        <td>5 p.m.</td>
        <!-- this is such wrong math lol -->
        <!-- <td><?php //echo ($day - $lunch) - $break * 2; ?></td> -->
        <td><?php echo $noBreak; ?> minutes</td>
        <td><?php echo 5 * $noBreak; ?> minutes</td>
      </tr>
      <tr>
        <td>Monday Feb. 4	</td><!-- probably need to put this into a database -- could be local -->
        <td>7:30 a.m.</td>
        <td></td>
        <td></td>
        <td>5 p.m.</td>
        <!-- this is such wrong math lol -->
        <!-- <td><?php //echo ($day - $lunch) - $break * 2; ?></td> -->
        <td><?php echo $noBreak; ?> minutes</td>
        <td>5 </td>
      </tr>
      <tr>
        <td><?php echo date('l M. j'); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <!-- this is such wrong math lol -->
        <td></td>
        <td>5</td>
      </tr>

    </table>


  </body>
</html>
