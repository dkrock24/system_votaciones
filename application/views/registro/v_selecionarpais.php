<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= directorio_css(); ?>/registro.css" />
	<link rel="stylesheet" type="text/css" href="<?= bootstrap(); ?>" />
	<title>Registro</title>
</head>
<body>
	<div class="contenedor">
		<div class="superior">
			<div class="atras"><a href="<?= base(); ?>">Regresar</a></div>
			<h1 id="titulo"><img src="<?= imagenes(); ?>votar.png" width="100px" alt="">
				Registro Ciudadano
			</h1>
		</div>
		<div class="espacio">
				
		</div>
		<div class="container">
			<form action="<?= registro(); ?>llenar_departamento" method="post">
				<br>
				<br>
				Primer paso Elije Tu Pais
			<table class="table" border=0>
				
				
				<tr>
					<td id="formulario" width="20%">PAIS</td>
					<td width="30%">
						<select name="pais" class="form-control">
						<?php
						foreach ($pais->result() as $value)
						{
							?>
							<option value="<?= $value->id_pais; ?>"><?= $value->p_nombre; ?></option>
							<?php
						}
						?>
						</select>
						
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="form-control" name="enviar" value="Selecionar">
					</td>
					<td></td>
				</tr>

			</table>
		</div>
		</form>
	</div>
</body>
</html>