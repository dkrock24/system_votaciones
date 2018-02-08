<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= bootstrap(); ?>" />
	<title>Paises</title>
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
	<?= $ID; ?>
	<div class="contenedor">	
	<table class="table" border=0>
			<tr>
				<td>Bandera</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Opcion</td>
			</tr>
	<?php
	foreach ($pais->result() as $value)
	{
		?>

			<tr>
				
				<td align="right"><img src="<?= imagenes(); ?><?= $value->url; ?>" width="100px;"></td>
				<td align="center" width="25%"><h2><?= $value->p_nombre; ?></h2></td>
				<td><p><?= $value->descripcion; ?></p></td>
				
				<td align="left">
					<a href="<?= pais(); ?>pais?ID=<?= $value->id_pais; ?>&&Ciudadano=<?= $ID; ?>">
					<input type="button" value="Ingresar" class="btn btn-primary">
					</a>
				</td>
				
			</tr>
		
		
		<?php
	}
	?>
	</table>
	</div>
</body>
</html>