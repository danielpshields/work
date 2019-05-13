<?php

  $difference = $sent - $responded;
  $percentage = (round($approved / $sent , 4)) * 100 . "%";

  ?>

<script src="<?php echo $root; ?>scripts/highcharts.js"></script>

<div id="container" style=" height: 200px; max-width: 200px; margin: 0 auto;"></div>


<script type="text/javascript">

var submitted  = <?php echo json_encode($responded); ?>;
var difference = <?php echo json_encode($difference); ?>;
var approved   = <?php echo json_encode($approved); ?>;
var percentage = <?php echo json_encode($percentage); ?>;

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
tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        ['', approved],
        ['', submitted],
    ]
}]
});

</script>

<table>
<tbody>
  <tr>
    <th>Advisor Approved</th>
  </tr>
  <tr>
    <td><?php echo $approved; ?></td>
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
