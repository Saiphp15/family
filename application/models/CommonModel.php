<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	

	public function all_countries_list(){
		try{
			
			$query = $this->db->select('*')->from('countries')->get();
			$record_count = $query->num_rows();
			if($record_count>0){
				return $query->result();
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

}
