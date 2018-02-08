<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_estadistica extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('mestadistica_model');
		//$this->load->model('autentificar_model');
		$this->load->helper('hrutas');
		$this->load->helper('form');
	}

	public function index()
	{		
		$data = $this->mestadistica_model->paises();
		$data = array('pais'=>$data);
		$this->load->view('estadistica/v_estadistica',$data);
	}
	public function estadistica_pais()
	{
		$id_pais = $_GET['ID_PAIS'];
		$data = $this->mestadistica_model->total_departamentos($id_pais);

		$info = $this->mestadistica_model->calculos($id_pais);



		$data = array(
			'total_departamentos'=>$data,
			'departamento'=>$info
			);
		$this->load->view('estadistica/v_totales',$data);
	}

}