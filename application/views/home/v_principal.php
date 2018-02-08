<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?= directorio_css(); ?>/principal.css" />
	<script src="<?= jquery(); ?>jquery/jquery.js" type="text/javascript"></script>
<script src="<?= jquery(); ?>animacion_menu.js" type="text/javascript"></script>
	<title>home</title>
</head>
<body>
    
<?php 
    foreach ($info->result() as $value)
    {
?>
<div class="principal">
	<div class="logo">
    	<img src="<?= imagenes() ?>uno.png">
    </div>
    <div class="menu">

    	<nav>
        	<ul>
            	<li rel="<?= registro(); ?>mostrar?ID=<?php echo $value->id_ciudadano; ?>">TUS DATOS</li>
                
                <li rel="<?= inicio(); ?>/inicio?ID=<?= $value->id_ciudadano; ?>">INICIO</li>
                
            </ul>
        </nav>
    </div>
    <div class="user">
        <table class="table">
            <tr>
                <td colspan=2>BIENVENIDO AL SISTEMA</td>                                      
            </tr>
            <tr>
                
                <td>
                    USUARIO:<br>
                    <?php
                        echo $value->nombres;
                    }
                    ?>
                    <br>
                    Fecha:<br><?php echo date('d-m-y'); ?><br>
                    <a href="<?= base(); ?>">SALIR</a>
                </td>
                <td width='100px'><img src="<?= imagenes() ?>login.png" width="100px"/></td>  
            </tr>
        </table>        
    </div>
</div>

<div class="data">

	<iframe id="iframe" src="<?= inicio(); ?>/inicio?ID=<?= $value->id_ciudadano; ?>" width="100%" height='480px' frameborder="1">
    </iframe>
</div>



</body>
</html>