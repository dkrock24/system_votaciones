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
			<form action="<?= registro(); ?>registro" method="post">
			<table class="table" border=0>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">NOMBRES</td>
					<td width="30%">
						<input class="form-control" type="text" name="nombres" placeholder="NOMBRES">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">APELLIDOS</td>
					<td width="30%">
						<input class="form-control" type="text" name="apellidos" placeholder="APELLIDOS">
					</td>
					<td width="20%"></td>
				</tr>	
				<tr>
					<td id="formulario" width="20%">GENERO</td>
					<td width="30%">
						<select name="genero" class="form-control">
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">DUI</td>
					<td width="30%">
						<input class="form-control" type="text" name="dui" placeholder="DUI">
					</td>
					<td width="20%"></td>
				</tr>
				
				<tr>
					<td id="formulario" width="20%">PAIS</td>
					<td width="30%">
		<input class="form-control" type="text" name="pais" value="<?= $id_pais; ?>" readonly="0">
						
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">DEPARTAMENTO</td>
					<td width="30%">
						<select name="departamento" class="form-control">
						<?php
						foreach ($departamento->result() as $value)
						{
							?>
							<option value="<?= $value->id_departamento; ?>"><?= $value->nombre; ?></option>
							<?php
						}
						?>
						</select>
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">E-MAIL</td>
					<td width="30%">
						<input class="form-control" type="text" name="email" placeholder="E-MAIL">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">EDAD</td>
					<td width="30%">
						<input class="form-control" type="text" name="edad" placeholder="EDAD">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">
						
					</td>
					<td width="30%">
						<input class="form-control" type="text" name="usuario" placeholder="usuario">
						<input class="form-control" type="password" name="password" placeholder="password">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%"></td>
					<td width="30%">

						<input class="form-control" type="submit" name="enviar" value="Registrar">
					</td>
					<td width="20%"></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
</body>
</html>