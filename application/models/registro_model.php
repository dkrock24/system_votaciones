<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Registro_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function registro_insert($data)
		{
			$this->db->insert('ciudadano', $data);
			
		}
		function seleccionar($id)
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('ciudadano');
			$query = $this->db->WHERE('id_ciudadano',$id);
			//$query = $this->db->WHERE('password',$data['password']);
			$query = $this->db->get();
			return $query;			
		}
		function actualizacion($data,$id)
		{
			$this->db->UPDATE('ciudadano', $data);
			$this->db->WHERE('id_ciudadano', $id);
		}
		function obtener_paises()
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('pais');
			//$query = $this->db->WHERE('id_ciudadano',$id);
			//$query = $this->db->WHERE('password',$data['password']);
			$query = $this->db->get();
			return $query;			
		}
		function pais_departamento($id)
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('pais as p');
			$query = $this->db->JOIN('departamento as d','p.id_pais=d.id_pais');
			$query = $this->db->WHERE('p.id_pais',$id);
			//$query = $this->db->WHERE('password',$data['password']);
			$query = $this->db->get();
			return $query;	
		}

	}