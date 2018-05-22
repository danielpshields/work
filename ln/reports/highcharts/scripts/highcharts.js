$(function () {

    $(document).ready(function () {

        // Build the chart
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'AAC Web Developer'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'total',
                colorByPoint: true,
                data: [{
                    name: 'code',
                    y: 30
                }, {
                    name: 'communications/social',
                    y: 20,
                }, {
                    name: 'multimedia',
                    y: 20
                }, {
                    name: 'testing features',
                    y: 20
                }, {
                    name: 'documentation',
                    y: 10
                }]
            }]
        });
    });
});
