<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('mlogin_model');
		//$this->load->model('autentificar_model');
		$this->load->helper('hrutas');
		$this->load->helper('form');
	}

	public function index()
	{
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');
		$data = array('usuario'=>$usuario,'password'=>$password);

		$credenciales = $this->mlogin_model->autentificar($data);
		
		//	SI DATOS EXISTEN
		if($credenciales->result()==TRUE)
		{
			$otra['informacion'] = $this->mlogin_model->autentificar($data);

			$usuario = array("info"=>$otra['informacion']);
			$this->load->view('home/v_principal',$usuario);
		}
		else
		{
			$this->load->view('welcome_message');
		}
		
	}
	public function inicio()
	{
		$data = array('ID'=>$_GET['ID']);
		$this->load->view('home/v_inicio',$data);
	}
}