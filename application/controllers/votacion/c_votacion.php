<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_votacion extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('mvotacion_model');
		//$this->load->model('autentificar_model');
		$this->load->helper('hrutas');
		$this->load->helper('form');
	}
	public function index()
	{
		echo "nada en votacion";
		echo $_GET['ID'];
		echo $_GET['id_comite'];
		echo $_GET['id_departamento'];
		echo $_GET['id_pais'];
		echo $fecha = date('d-m-y H:m:s');
		
		$data = array(
			'id_comite'=>$_GET['id_comite'],
			'id_pais'=>$_GET['id_pais'],
			'id_departamento'=>$_GET['id_departamento'],
			'id_ciudadano'=>$_GET['ID'],
			'fecha_votacion'=>$fecha
			);

		$this->mvotacion_model->votar($data);

		$this->load->view('votacion/v_votacion');
	}
	public function misvotos()
	{
		$id_ciudadano = $_GET['ID'];
		$data = $this->mvotacion_model->misvotos($id_ciudadano);
		$data = array('votos'=>$data);
		$this->load->view('votacion/v_misvotos',$data);
	}
}
?>