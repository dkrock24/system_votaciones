<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Mvotacion_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function votar($data)
		{
			$this->db->insert('votacion', $data);
		}
		function verificar($id,$pais)
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('votacion');
			$query = $this->db->WHERE('id_ciudadano',$id);
			$query = $this->db->WHERE('id_pais',$pais);
			//$query = $this->db->WHERE('password',$data['password']);
			$query = $this->db->get();
			return $query;	
		}
		function misvotos($id)
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('votacion');			
			$query = $this->db->JOIN('departamento','departamento.id_departamento=votacion.id_departamento');
			$query = $this->db->JOIN('pais','pais.id_pais=votacion.id_pais');
			$query = $this->db->JOIN('comite','comite.id_comite=votacion.id_comite');
			$query = $this->db->WHERE('id_ciudadano',$id);
			//$query = $this->db->WHERE('id_pais',$pais);
			//$query = $this->db->WHERE('password',$data['password']);
			$query = $this->db->get();
			return $query;	
		}
	}
?>