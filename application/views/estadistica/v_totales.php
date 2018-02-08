<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= bootstrap(); ?>" />
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<title>Totales</title>
	<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        		
		
		var data = google.visualization.arrayToDataTable([
          ['Topping', 'Stuecke'],
          <?php
          foreach ($departamento->result() as $dep)
          {
          
          ?>
          ['<?= $dep->nombre;?>',  <?= $dep->total;?>], 
          <?php
      		}
          ?>        
        ]);
		
		<?php
			foreach ($total_departamentos->result() as $total)
			{
		?>
        // Set chart options
        var options = {'title':'',
                       'width':1000,
                       'height':450,
					    hAxis: {title: 'Total de Departamentos 	<?= $total->numero;?>', titleTextStyle: {color: 'orange'}},
						series: {0:{color: 'red', visibleInLegend: false}}		
						
					   
					   };
		<?php
			}
		?>

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
	

	<div id="chart_div"></div>
</body>
</html>