<?php
// $sent      = "50";
// $pending   = "35";
// $responded = "15";
// $approved  = "0";

// ['1', submitted],
// ['2', difference],
// ['3', approved],

  $pending    = $sent - $responded;

  $percentage = (round($pending / $sent, 3)) * 100 . "%";

  ?>

<script src="<?php echo $root; ?>scripts/highcharts.js"></script>

<div id="container" style=" height: 200px; max-width: 200px; margin: 0 auto;"></div>


<script type="text/javascript">

var responded  = <?php echo json_encode($responded); ?>;
var difference = <?php echo json_encode($difference); ?>;
var approved   = <?php echo json_encode($approved); ?>;
var percentage = <?php echo json_encode($percentage); ?>;
var pending = <?php echo json_encode($pending); ?>;




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
            enabled: true,
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
        ['', pending],
        ['', responded],
    ]
}]
});

</script>

<table>
<tbody>
  <tr>
    <th>Pending Tickets</th>
  </tr>
  <tr>
    <td><?php echo $pending; ?></td>
  </tr>
</tbody>
</table>

<table>
  <tbody>
    <tr>
      <th>Total Tickets</th>
    </tr>
    <tr>
      <td><?php echo $sent; ?></td>
    </tr>
  </tbody>
</table>
