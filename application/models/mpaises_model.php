<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Mpaises_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function selecionar_paises()
		{			
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('pais');		
			$query = $this->db->get();
			return $query;			
		}
		function selecionar_departamento($data)
		{			
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('departamento');
			$query = $this->db->JOIN('comite','comite.id_departamento = departamento.id_departamento');
			$query = $this->db->WHERE('departamento.id_pais',$data);	
			$query = $this->db->get();
			return $query;			
		}
	}
?>