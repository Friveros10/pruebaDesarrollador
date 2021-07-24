<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//date_default_timezone_set('America/Santiago');

class myApi_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getDatos(){
		$sql ="SELECT * from indicadores";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) return $query->result();
		 return array();
	}

	public function sendDatos($data){
		foreach($data as $row ){
/* 			$arr = array(
				'codigo' =>
			); */
			json_encode($row->uf);
		}
	}
}