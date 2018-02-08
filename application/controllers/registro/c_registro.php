<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_registro extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('registro_model');
		//$this->load->model('autentificar_model');
		$this->load->helper('hrutas');
		$this->load->helper('form');
	}

	public function index()
	{
		$data = $this->registro_model->obtener_paises();
		$info = array('pais'=>$data);
		$this->load->view('registro/v_selecionarpais',$info);
		//$this->load->view('registro/v_registro',$info);
	}
	public function llenar_departamento()
	{
		$pais_id = $_POST['pais'];
		$data = $this->registro_model->pais_departamento($pais_id);
		$info = array('departamento'=>$data,'id_pais'=>$pais_id);
		
		$this->load->view('registro/v_registro',$info);
	}
	public function registro()
	{
		$nombres = $this->input->post('nombres');
		$apellidos = $this->input->post('apellidos');
		$genero = $this->input->post('genero');
		$dui = $this->input->post('dui');
		$pais = $this->input->post('pais');
		$departamento = $this->input->post('departamento');
		$email = $this->input->post('email');
		$edad = $this->input->post('edad');
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');
		$estado = 1;

		$data = array(
				'nombres' => $nombres,
				'apellidos'=>$apellidos,
				'genero'=>$genero,
				'dui'=>$dui,
				'pais'=>$pais,
				'departamento'=>$departamento,
				'email'=>$email,
				'edad'=>$edad,
				'usuario'=>$usuario,
				'password'=>$password,
				'estado'=>$estado
			);
		$this->registro_model->registro_insert($data);
		$data = $this->registro_model->obtener_paises();
		$info = array('pais'=>$data);
		$this->load->view('registro/v_selecionarpais',$info);
	}	
	public function mostrar()
	{
		//echo $_GET['ID'];
		//echo "nada";
		$datos = $this->registro_model->seleccionar($_GET['ID']);
		$data = array('info'=>$datos);
		$this->load->view('registro/v_listado',$data);
	}
	public function actualizacion()
	{
		//ACTUALIZACION DE LA INFORMACION DEL USUARIO
		$id = $this->input->post('id');
		$nombres = $this->input->post('nombres');
		$apellidos = $this->input->post('apellidos');
		$genero = $this->input->post('genero');
		$dui = $this->input->post('dui');
		$pais = $this->input->post('pais');
		$departamento = $this->input->post('departamento');
		$email = $this->input->post('email');
		$edad = $this->input->post('edad');
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');
		$estado = 1;

		$data = array(
				//'id_ciudadano'=>$id,
				'nombres' => $nombres,
				'apellidos'=>$apellidos,
				'genero'=>$genero,
				'dui'=>$dui,
				'pais'=>$pais,
				'departamento'=>$departamento,
				'email'=>$email,
				'edad'=>$edad,
				'usuario'=>$usuario,
				'password'=>$password,
				'estado'=>$estado
			);
		$this->registro_model->actualizacion($data,$id);

		$datos = $this->registro_model->seleccionar($id);
		$data = array('info'=>$datos);
		$this->load->view('registro/v_listado',$data);
	}

}
?>