<?php include"../autoload.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Forma de Pago</title>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
	


<script>
// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Top 10 de formas de Pago'
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
        name: 'Brands',
        colorByPoint: true,
        data: [

         


        <?php foreach (Reporte::forma_pago() as $key => $value): ?>
        {
            name: '<?php echo $value["forma_pago"] ?>',
            y: <?php echo $value['cantidad'] ?>
        },	
        <?php endforeach ?>





        ]
    }]
});


</script>
</body>
</html>