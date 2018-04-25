<?php

$vendas = array(
	10,20,30,40,20
	);
$custos = array(
	8,15,37,98,35
	);


?><html>
<head>
	<title>Projeto Grafico</title>
</head>
<body>


	<div style="width:500px">
		<canvas id="grafico"></canvas>

	</div>

	<script type="text/javascript" src="Chart.min.js"></script>
	<script type="text/javascript">
		window.onload = function() {

			var contexto = document.getElementById("grafico").getContext("2d");
			var grafico = new Chart(contexto, {

				type:'line',
				data: {
					labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril','Maio'],
					datasets:[{
						label:'Vendas',
						backgroundColor:'#FF0000',
						borderColor:'#FF0000',
						data:[<?php echo implode(',', $vendas); ?>
						],
						fill:false

					}, {
						label:'Custos',
						backgroundColor:'#00FF00',
						borderColor:'#00FF00',
						data:[<?php echo implode(',', $custos); ?>
						

						],
						fill:false
					}]

				} 	
			});
		}
	
	</script>

</body>
</html>
