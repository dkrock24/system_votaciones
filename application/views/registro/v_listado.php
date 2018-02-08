<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= directorio_css(); ?>/registro.css" />
	<link rel="stylesheet" type="text/css" href="<?= bootstrap(); ?>" />
	<title>Listado</title>
</head>
<body>
	<?php
		foreach ($info->result() as $value)
		 {
			
		
	?>
			<div class="container">
			<form action="<?= registro(); ?>actualizacion" method="post">
			<table class="table" border=0>
				<tr>
					<td><input type="hidden" name="id" value="<?= $value->id_ciudadano; ?>"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">NOMBRES</td>
					<td width="30%">
			<input class="form-control" type="text" name="nombres" value="<?= $value->nombres; ?>">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">APELLIDOS</td>
					<td width="30%">
			<input class="form-control" type="text" name="apellidos" value="<?= $value->apellidos; ?>">
					</td>
					<td width="20%"></td>
				</tr>	
				<tr>
					<td id="formulario" width="20%">GENERO</td>
					<td width="30%">
						<select name="genero" class="form-control">
							<?php
								if($value->genero == 'M')
								{
									?>
									<option value="M">Masculino</option>
									<option value="F">Femenino</option>
									<?php
								}
								else
								{
									?>
									<option value="F">Femenino</option>
									<option value="M">Masculino</option>
									<?php
								}
							?>							
							
						</select>
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">DUI</td>
					<td width="30%">
			<input class="form-control" type="text" name="dui" value="<?= $value->dui; ?>" readonly=0
					<td width="20%"></td>
				</tr>
				
				<tr>
					<td id="formulario" width="20%">PAIS</td>
					<td width="30%">
			<input class="form-control" type="text" name="pais" value="<?= $value->pais; ?>" readonly=0>
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">DEPARTAMENTO</td>
					<td width="30%">
	<input class="form-control" type="text" name="departamento" value="<?= $value->departamento; ?>" readonly=0>
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">E-MAIL</td>
					<td width="30%">
						<input class="form-control" type="text" name="email" value="<?= $value->email; ?>">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">EDAD</td>
					<td width="30%">
			<input class="form-control" type="text" name="edad" value="<?= $value->edad; ?>">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%">
						
					</td>
					<td width="30%">
		<input class="form-control" type="text" name="usuario" value="<?= $value->usuario; ?>">
		<input class="form-control" type="password" name="password" value="<?= $value->password; ?>">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td id="formulario" width="20%"></td>
					<td width="30%">

						<input class="form-control" type="submit" name="enviar" value="Actualizar">
					</td>
					<td width="20%"></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	<?php
}
?>
</body>
</html>