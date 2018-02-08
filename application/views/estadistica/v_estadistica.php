<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Estadistica</title>
	<style>
		.bandera
		{
			width:160px; 
			padding: 10px;
			border-radius: 10px;
			box-shadow: 0px 10px 20px grey;
			-webkit-transition: all 1s;
			overflow: hidden;
			text-align: center;
			position: relative;
		}
		.info{
			width: 200px;	height: 20px;

		}
		.bandera:hover{
			-webkit-transform: scale(1.2,1.2);
			
			z-index: auto;
		}
		.banderas
		{
			width:80%;	
			margin-top:10%;
		}
	</style>
</head>
<body>
	<table class="table" border=0 align="center">
		<tr>
			<div class="banderas">
	<?php
	foreach ($pais->result() as $paises)
	{
		?>		
			<td class="bandera">
				<a href="<?= estadistica(); ?>estadistica_pais?ID_PAIS=<?= $paises->id_pais; ?>">
				<img src="<?= imagenes();?><?= $paises->url; ?>" width="150px" alt="">
				</a> 
				<div class="info">
					
					<p><?= $paises->p_nombre; ?></p>
				</div>			
			</td>		
		
		<?php
	}
	?>
	</div>
	</tr>
	</table>
</body>
</html>