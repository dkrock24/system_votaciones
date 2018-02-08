<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= bootstrap(); ?>" />
	<title>Departamentos</title>
	<style>
		.contenedor
		{
			width: 70%;	height: 100%;
			background: none;
			margin: 0 auto;
			margin-top: 20px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	
	<div class="contenedor">
	<table class="table">
		<tr>
			<td>N</td>
			<td>Departamento</td>
			<td>Descripcion</td>
			<td>Comite</td>
			<td>Bandera</td>
			<td>Votar</td>
		</tr>
	<?php
	$contador=1;
		foreach ($departamento->result() as $value)
		{
			if($value->id_departamento %2 ==1)
			{
			?>
			<tr bgcolor="#9ACD32">
				<td><?= $contador; ?></td>
				<td><?= $value->nombre; ?></td>
				<td><?= $value->descripcion; ?></td>
				<td><?= $value->c_nombre; ?></td>
				<td><img src="<?= imagenes(); ?>comite/<?= $value->c_url; ?>" width="50px"></td>
				<td>
					<?php
						
						if($verificar==0)
						{
					?>
					<a href="<?= votacion(); ?>?ID=<?= $ID; ?>&&id_comite=<?= $value->id_comite; ?>&&id_departamento=<?= $value->id_departamento; ?>&&id_pais=<?= $value->id_pais; ?>">
					<input type="button" value="Votar" class="btn btn-success">
					</a>
					<?php
						}
						else
						{
							echo "Ya Voto";
						}
						
					?>
				</td>
			</tr>			
			<?php
			}
			else
			{
			?>
				<tr>
					<td><?= $contador; ?></td>
					<td><?= $value->nombre; ?></td>
					<td><?= $value->descripcion; ?></td>
					<td><?= $value->c_nombre; ?></td>
					<td><img src="<?= imagenes(); ?>comite/<?= $value->c_url; ?>" width="50px"></td>
					<td>
						<?php

							
						if($verificar== 0)
						{
					?>
					<a href="<?= votacion(); ?>?ID=<?= $ID; ?>&&id_comite=<?= $value->id_comite; ?>&&id_departamento=<?= $value->id_departamento; ?>&&id_pais=<?= $value->id_pais; ?>">
					<input type="button" value="Votar" class="btn btn-success">
					</a>
					<?php
						}
						else
						{
							echo "Ya Voto";
						}
					?>
				</td>
				</tr>			
			<?php
			}
			$contador+=1;
		}
	?>
	</table>
	</div>
</body>
</html>