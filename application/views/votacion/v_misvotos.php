<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= bootstrap(); ?>" />
	<title>Mis Votos</title>
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
		<p>Tus Votaciones Por Pais</p>
	<table class="table">
	<tr bgcolor="grey">
		<td>N</td>
		<td>Pais</td>
		<td>Departamento</td>
		<td>Comite</td>	
		<td>Logo</td>	
	</tr>
	<?php
	$numero=1;
		foreach ($votos->result() as $value)
		{
			?>
			<tr>
				<td><?= $numero; ?></td>
				<td><?= $value->p_nombre; ?></td>
				<td><?= $value->nombre; ?></td>
				<td><?= $value->c_nombre; ?></td>
				<td><img src="<?= imagenes(); ?>comite/<?= $value->c_url; ?>" width="60px"></td>
			</tr>
			<?php
			$numero+=1;
		}
	?>
	</table>
	</div>
</body>
</html>