<?php

/*
-----------------------------------------------------------
	FUNCION PARA ACCESAR AL LOGIN
-----------------------------------------------------------
*/
function login()
{
	$ruta_login='http://localhost:81/transdelnorte/index.php/cwelcome/autentificar';
	return $ruta_login;
}
/*
-----------------------------------------------------------
	FUNCION PARA CARGAR LA IMAGEN EN EL PRIMER IFRAME
-----------------------------------------------------------
*/
function carga_iframe1()
{
	$carga_iframe1='http://localhost:81/transdelnorte/index.php/cwelcome/dashboard';
	return $carga_iframe1;
}
/*
-----------------------------------------------------------
	FUNCION PARA CARGAR LAS IMAGENES EN LAS RUTAS
-----------------------------------------------------------
*/
function server_root(){
      $server_root = 'http://localhost:81/transdelnorte/imag';
      return $server_root;
}
/*
-----------------------------------------------------------
	FUNCION PARA CARGAR JQUERY
-----------------------------------------------------------
*/
function cargar_jquery(){
      $cargar_jquery = 'http://localhost:81/transdelnorte/jquery';
      return $cargar_jquery;
}


function server_root2()
{
	  $server_root2 = 'http://localhost:81/transdelnorte/js';
      return $server_root2;
}
/*
-----------------------------------------------------------
	FUNCION PARA CARGAR EL RAIZ DEL SISTEMA
-----------------------------------------------------------
*/
function server_root3()
{
		$server_root3 = 'http://localhost:81/transdelnorte/index.php';
      return $server_root3;
}

/*
-----------------------------------------------------------
	FUNCION PARA CARGAR EL FRAMEWIORK CSS BOOTSTRAP
-----------------------------------------------------------
*/
function acceso_bootstrap()
{
	$acceso_bootstrap = 'http://localhost:81/transdelnorte/css/css/bootstrap.css';
	return $acceso_bootstrap;
}

function bootstrap_js()
{
	$bootstrap_js = 'http://localhost:81/transdelnorte/css/js/bootstrap.min.js';
	return $bootstrap_js;
}
function bootstrap_mincss()
{
	$bootstrap_mincss = 'http://localhost:81/transdelnorte/css/css/bootstrap.min.css';
	return $bootstrap_mincss;
}
/*
-----------------------------------------------------------
	FUNCION PARA CARGAR EL ESTILO CSS 
-----------------------------------------------------------
*/
function cargar_css()
{
	$cargar_css = 'http://localhost:81/transdelnorte/css';
	return $cargar_css;
}


function acceso_estilo_contenido()
{
	$acceso_estilo_contenido = 'http://localhost:81/transdelnorte/css/estilo_contenido.css';
	return $acceso_estilo_contenido;
}
function agregar_departamento()
{
	$acceso_estilo_contenido = 'http://localhost:81/transdelnorte/index.php/gestion_menu/menu';
	return $acceso_estilo_contenido;
}
function listado_menu_por_area()
{
	$menus = 'http://localhost:81/transdelnorte/index.php/gestion_menu/cver_listado';
	return $menus;
}

function gestion_usuarios()
{
	$usuarios = 'http://localhost:81/transdelnorte/index.php/gestion_usuarios/cusuarios/';
	return $usuarios;
}


function gestion_actualizar()
{
	$actualizacion = 'http://localhost:81/transdelnorte/index.php/gestion_usuarios';
	return $actualizacion;
}

function kpi()
{
	$kpi = 'http://localhost:81/transdelnorte/index.php/kpi/ckpi';
	return $kpi;
}

function jquery()
{
	$jquery = 'http://localhost:81/transdelnorte/jquery/jquery.js';
	return $jquery;
}

?>