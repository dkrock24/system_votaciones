<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Login Page</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?= directorio_css(); ?>/style.css" />
	
	
</head>

<body>
	<a href="<?= estadistica(); ?>">
	<img src="<?= imagenes(); ?>estadistica.png" width="200px" alt="estadisticas">
	</a>
	<form id="login-form" action="<?= inicio(); ?>" method="post">
		<fieldset>
		
			<legend>Log in</legend>
			
			<label for="login">USUARIO</label>
			<input type="text" id="login" name="usuario" placeholder="usuario"/>
			<div class="clear"></div>
			
			<label for="password">PASSWORD</label>
			<input type="password" id="password" name="password" placeholder="password"/>
			<div class="clear"></div>
			
			<a href="<?= registro(); ?>">
			<label for="remember_me" style="padding: 0;">Registrarme</label>
			</a>
			<div class="clear"></div>
			
			<br />
			
			<input type="submit" style="margin: -20px 0 0 287px;" class="button" name="commit" value="Log in"/>	
		</fieldset>
	</form>
	
</body>

</html>