<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_pais extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('mpaises_model');
		$this->load->model('mvotacion_model');
		//$this->load->model('autentificar_model');
		$this->load->helper('hrutas');
		$this->load->helper('form');
	}
	public function index()
	{
		$id_ciudadano = $_GET['ID'];
		$info = $this->mpaises_model->selecionar_paises();
		$data = array('pais'=>$info,'ID'=>$id_ciudadano);
		$this->load->view('pais/v_paises',$data);
	}
	public function pais()
	{		
		$id_ciudadano = $_GET['Ciudadano'];
		$pais = $_GET['ID'];
		$info = $this->mpaises_model->selecionar_departamento($_GET['ID']);
		$comprobante = $this->mvotacion_model->verificar($id_ciudadano,$pais);

		if($comprobante->result()==TRUE)
		{
			$si = 1;
			$data = array('departamento'=>$info,'ID'=>$id_ciudadano,'verificar'=>$si);
			$this->load->view('pais/v_departamento',$data);
		}
		else
		{
			$no = 0;
			$data = array('departamento'=>$info,'ID'=>$id_ciudadano,'verificar'=>$no);
			$this->load->view('pais/v_departamento',$data);
		}

		
	}
}
?>