<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Mlistado_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function listado()
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('pais');
			$query = $this->db->JOIN('departamento','pais.id_pais=departamento.id_pais');
			$query = $this->db->JOIN('comite','departamento.id_departamento=comite.id_departamento');
			$query = $this->db->get();
			return $query;			
		}

	}