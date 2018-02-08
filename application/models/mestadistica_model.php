<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Mestadistica_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function paises()
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('pais');			
			$query = $this->db->get();
			return $query;			
		}
		function estadisticas()
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('votacion');			
			$query = $this->db->JOIN('departamento','departamento.id_departamento=votacion.id_departamento');
			$query = $this->db->JOIN('pais','pais.id_pais=votacion.id_pais');
			$query = $this->db->JOIN('comite','comite.id_comite=votacion.id_comite');
			//$query = $this->db->WHERE('id_ciudadano',$id);
			//$query = $this->db->WHERE('id_pais',$pais);
			//$query = $this->db->WHERE('password',$data['password']);
			$query = $this->db->get();
			return $query;			
		}
		function total_departamentos($data)
		{
			$query = $this->db->SELECT('count(*) as numero');
			$query = $this->db->FROM('departamento');			
			$query = $this->db->WHERE('id_pais',$data);			
			$query = $this->db->get();
			return $query;			
		}
		function calculos($data)
		{
			$query = $this->db->SELECT('v.id_departamento,d.nombre,v.id_comite,count(*)as total');
			$query = $this->db->FROM('votacion as v');	
			$query = $this->db->JOIN('departamento as d','v.id_departamento=d.id_departamento');	
			$query = $this->db->WHERE('v.id_pais',$data);			
			$query = $this->db->GROUP_BY('v.id_departamento');	
			$query = $this->db->get();
			return $query;			
		}

	}