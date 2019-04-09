<?php

  $difference = $sent - ($responded + $approved);
  $percentage = (round($approved / $sent, 3)) * 100 . "%";

  ?>

<script src="<?php echo $root; ?>scripts/highcharts.js"></script>

<div id="container" style=" height: 200px; max-width: 200px; margin: 0 auto;"></div>


<script type="text/javascript">

var difference = <?php echo json_encode($difference); ?>;
var submitted  = <?php echo json_encode($responded); ?>;
var approved   = <?php echo json_encode($approved); ?>;

var percentage = <?php echo json_encode($percentage); ?>;
Highcharts.setOptions({
 colors: ['#434348', '#90ed7d', '#7cb5ec']
});
Highcharts.chart('container', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: 0,
    plotShadow: false
},
title: {
    text: percentage,
    align: 'center',
    verticalAlign: 'middle',
    y: 40
},

plotOptions: {
    pie: {
        dataLabels: {
            enabled: false,
            distance: -50,
            style: {
                fontWeight: 'normal',
                color: 'white'
            }
        },
        startAngle: -90,
        endAngle: 90,
        center: ['50%', '75%'],
        size: '110%'
    }
},
series: [{
    type: 'pie',
    name: '',
    innerSize: '50%',
    data: [
        ['Pending', difference],
        ['Submitted', submitted],
        ['Approved', approved],
    ]
}]
});

</script>

<table>
<tbody>
  <tr>
    <th><a href="<?php echo $root; ?>records/sort/pending.php">Pending Tickets</a></th>
  </tr>
  <tr>
    <td><?php echo $pending; ?></td>
  </tr>
</tbody>
</table>

<table>
<tbody>
  <tr>
    <th><a href="<?php echo $root; ?>records/sort/submitted.php">Student Submitted</a></th>
  </tr>
  <tr>
    <td><?php echo $responded; ?></td>
  </tr>
</tbody>
</table>

<table>
  <tbody>
    <tr>
      <th><a href="<?php echo $root; ?>records/sort/approved.php">UF Online</a></th>
    </tr>
    <tr>
      <td><?php echo $approved; ?></td>
    </tr>
  </tbody>
</table>


<table>
  <tbody>
    <tr>
      <th><a href="<?php echo $root; ?>records/sort/approved.php">Advisor Approved</a></th>
    </tr>
    <tr>
      <td><?php echo $approved; ?></td>
    </tr>
  </tbody>
</table>

<table>
  <tbody>
    <tr>
      <th><a href="<?php echo $root; ?>records/transition.php">Total Tickets</a></th>
    </tr>
    <tr>
      <td><?php echo $sent; ?></td>
    </tr>
  </tbody>
</table>
