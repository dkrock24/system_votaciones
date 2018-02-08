<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= bootstrap(); ?>" />
	<title>Listado</title>
		<style>
		.contenedor
		{
			width: 70%;	height: 100%;
			background: none;
			margin: 0 auto;
			margin-top: 20px;
			border-radius: 10px;
		}
		#color:hover
		{
			background: orange;
		}
	</style>
</head>
<body>
	<div class="contenedor">
	<table class="table">
		<tr>
			<td>N</td>
			<td>PAIS</td>
			<td>DEPARTAMENTO</td>
			<td>COMITE</td>
			<td>LOGO</td>
		</tr>
		
		<?php
		$numero=1;
		foreach ($listado->result() as $lista)
		{
			if($numero%2==0)
			{
			?>

			<tr id="color">
				<td><?= $numero;?></td>			
				<td><?= $lista->p_nombre; ?></td>	
				<td><?= $lista->nombre; ?></td>					
				<td><?= $lista->c_nombre;?></td>		
				<td><img src="<?= imagenes(); ?>comite/<?= $lista->c_url;?>" width="50px"></td>
			</tr>
			<?php
			}
			else
			{
			?>

			<tr id="color">
				<td><?= $numero;?></td>			
				<td><?= $lista->p_nombre; ?></td>	
				<td><?= $lista->nombre; ?></td>					
				<td><?= $lista->c_nombre;?></td>
				<td><img src="<?= imagenes(); ?>comite/<?= $lista->c_url;?>" width="50px"></td>		
			</tr>
			<?php
			}
			$numero+=1;
		}
		?>

	</table>
	</div>
</body>
</html>