<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function chk_super_admin_login($data){
		try{

			$query = $this->db->select('id')->from('users')->where('email', $data['email'])->get();
			$count_records = $query->num_rows();
			if($count_records > 0){	

				$chkUserUsernamePasswordQuery = 
					$this->db->select(
						'u.id as userId,
						u.name as userName,
						u.email as userEmail,
						u.user_role as userRole, 
						ur.role_name as userRoleName'
					)
					->from('users as u')
					->join('user_credentials as uc','uc.user_id=u.id','left')
					->join('user_roles as ur','ur.id=u.user_role','left')
					->where('u.email', $data['email'])
					->where('uc.password', $data['password'])
					->where('u.user_role',1)
					->group_by('u.id')
					->get();
				$count_records1 = $chkUserUsernamePasswordQuery->num_rows();
				if($count_records1>0){

					$chkUserActiveQuery = 
					$this->db->select(
						'u.id as userId,
						u.name as userName,
						u.email as userEmail,
						u.user_role as userRole, 
						ur.role_name as userRoleName'
					)
					->from('users as u')
					->join('user_credentials as uc','uc.user_id=u.id','left')
					->join('user_roles as ur','ur.id=u.user_role','left')
					->where('u.email', $data['email'])
					->where('uc.password', $data['password'])
					->where('u.user_role',1)
					->where('u.is_active',1)
					->group_by('u.id')
					->get();
					$count_records2 = $chkUserActiveQuery->num_rows();
					if($count_records2>0){
						$userData = $chkUserActiveQuery->row();
						return $userData;
					}else{
						return false; //user is not active
					}

				}else{

					$chkMasterPasswordQuery = 
					$this->db->select(
						'u.id as userId,
						u.name as userName,
						u.email as userEmail,
						u.user_role as userRole, 
						ur.role_name as userRoleName'
					)
					->from('users as u')
					->join('user_credentials as uc','uc.user_id=u.id','left')
					->join('user_roles as ur','ur.id=u.user_role','left')
					->where('u.email', $data['email'])
					->where('uc.master_password', $data['password'])
					->where('u.user_role',1)
					->group_by('u.id')
					->get();

					$chkMasterPasswordQuery_count = $chkMasterPasswordQuery->num_rows();
					if($chkMasterPasswordQuery_count>0){
						$userData = $chkMasterPasswordQuery->row();
						return $userData;
					}else{
						return false; //Password as well as master password Not Match
					}
				}		
			}else{	
				return false; //Email Not Found
			}
		}catch(Exception $e){
	    	$this->unsuccessArr["error_message"] = $e->getMessage();
	    	echo json_encode($this->unsuccessArr);
        	exit;
	    }
	}



}

?>
