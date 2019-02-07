<?php
  $early = 30;
  $lunch = 60;
//  $break = 15;
  $noBreak = $early + $lunch;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/time.css">
  </head>
  <body>


    <input type="button" name="clockin" value="clock in">
    <input type="button" name="lunchout" value="lunch out">
    <input type="button" name="lunchin" value="lunch in">
    <input type="button" name="clockout" value="clock out">



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
        <td>start | 190204_monday</td><!-- probably need to put this into a database - - could be local -->
        <td>7:30 a.m.</td>
        <td></td>
        <td></td>
        <td>5 p.m.</td>
        <!-- this is such wrong math lol -->
        <!-- <td><?php //echo ($day - $lunch) - $break * 2; ?></td> -->
        <td><?php echo $noBreak; ?> minutes</td>
        <td>5 hours</td>
      </tr>
      <tr>
        <td>Monday Feb. 4	</td><!-- probably need to put this into a database - - could be local -->
        <td>7:30 a.m.</td>
        <td></td>
        <td></td>
        <td>5 p.m.</td>
        <td><?php echo $noBreak; ?> minutes</td>
        <td><?php echo $flex = ((5 * 60) + 30 + 60); ?> minutes</td>
      </tr>


      <tr>
        <td>Tuesday Feb. 5</td>
        <td>7:36 a.m.</td>
        <td></td>
        <td></td>
        <td>5:06</td>
        <td><?php echo $flex += 90; ?> minutes</td>
        <td><?php echo $total = $flex / 60; ?> hours</td>
      </tr>

      <tr>
        <td>Wednesday Feb. 6</td>
        <td>7:25 a.m.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>5:14 p.m., 6:42 p.m.</td>
      </tr>





      <!--

          loop through this ... i think it'll have to be two pages, one to enter, two to display, it's almost exactly what's happening with [lnote]

      <tr>
        <td><?php echo date('l M. j'); ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>5</td>
      </tr>

     -->

    </table>


  </body>
</html>
