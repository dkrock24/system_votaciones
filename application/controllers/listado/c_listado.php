<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_listado extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('mlistado_model');
		//$this->load->model('autentificar_model');
		$this->load->helper('hrutas');
		$this->load->helper('form');
	}

	public function index()
	{	
		$data = $this->mlistado_model->listado();
		$data = array('listado'=>$data);
		$this->load->view('listado/v_listado',$data);
	}
}
?>