<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Mlogin_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function autentificar($data)
		{
			$query = $this->db->SELECT('*');
			$query = $this->db->FROM('ciudadano');
			$query = $this->db->WHERE('usuario',$data['usuario']);
			$query = $this->db->WHERE('password',$data['password']);
			$query = $this->db->get();
			return $query;
			
		}

	}