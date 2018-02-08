<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="<?= directorio_css(); ?>/estilo2_1360.css" 	media="screen and (min-width:1365px) and (max-width:1368px)">
	<link rel="stylesheet" href=".<?= directorio_css(); ?>/estilo1_1024.css" 	media="screen and (min-width:1px) 	and (max-width:1364px)">
	<title>INICIO</title>
</head>
<body>
	
	<div class='principal'>
		<a href="<?= pais(); ?>?ID=<?= $ID; ?>">
		<div class="uno">
			<div class="logo"><img src="<?= imagenes(); ?>graficas.png" width='150px' alt=""/></div>
			<div class="nota">Paises Selecionados en votacion</div>
		</div>
		</a>
		<a href="<?= listado(); ?>">
		<div class="uno">
			<div class="logo"><img src="<?= imagenes(); ?>system.png" width='150px' alt=""/></div>
			<div class="nota">Candidatos en Campaña</div>
		</div>
		</a>
		<a href="<?= votacion(); ?>misvotos?ID=<?= $ID; ?>">
		<div class="uno">
			<div class="logo"><img src="<?= imagenes(); ?>config.png" width='150px' alt=""/></div>
			<div class="nota">Historico de tus votos por pais</div>
		</div>
		</a>
		<a href="<?= estadistica(); ?>">
		<div class="uno">
			<div class="logo"><img src="<?= imagenes(); ?>data.png" width='150px' alt=""/></div>
			<div class="nota">Estadisticas a nivel departamental y pais</div>
		</div>
		</a>
		<div class="uno">
			<div class="logo"><img src="<?= imagenes(); ?>nube.png" width='150px' alt=""/></div>
			<div class="nota">Configuracion del sistema</div>
		</div>
	</div>
</body>
</html>