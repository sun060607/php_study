<!DOCTYPE html>
<html>
<head>
<title>NOCKANDA EXAMPLE</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

</head>
<body>
<div style="width:700px;">
<canvas id="line1"></canvas>
</div>


<script>
var ctx = document.getElementById('line1').getContext('2d');
var chart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: <?php echo json_encode($mylabel); ?>,
		datasets: [
				{
					label: 'tempidity',
					backgroundColor: 'transparent',
					borderColor: "red",
					data: <?php echo json_encode($mytemp); ?>
				},{
					label: 'humidity',
					backgroundColor: 'transparent',
					borderColor: "blue",
					data: <?php echo json_encode($myhumi); ?>
				}
		]
	},
	options: {}
});

function nockanda_forever(){
	var recv  = window.AppInventor.getWebViewString();
	chart.data.datasets[0].data.shift();
	chart.data.datasets[0].data.push(recv);
	//chart.data.labels.shift();
	chart.update();
}
</script>
</body>
</html>