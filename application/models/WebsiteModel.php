<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class WebsiteModel extends CI_Model {



	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function save_user($data){
		try{
			$query = $this->db->insert('users',$data);
			if($query==true){
				$insert_id = $this->db->insert_id();
  	 			return  $insert_id;
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}

	}

	public function save_user_password($data){
		try{
			$query = $this->db->insert('users_credentials',$data);
			if($query==true){
				$insert_id = $this->db->insert_id();
  	 			return  $insert_id;
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function chk_user_login($data){
		try{
			$query = $this->db->select('users.id, users.name, users.email, users.role')
			->from('users')
			->join('users_credentials','users_credentials.user_id=users.id','left')
			->where('users.email',$data['email'])
			->where('users_credentials.password',$data['password'])
			->get();
			$count_records = $query->num_rows();
			if($count_records>0){
				return $query->result();
			}else{
				return false;
			}
			
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function get_user_login_data($user_id){
		try{
			$query = $this->db->select('id, name, email, role')
			->from('users')
			->where('id',$user_id)
			->get();
			$count_records = $query->num_rows();
			if($count_records>0){
				return $query->row();
			}else{
				return false;
			}
			
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

}

?>