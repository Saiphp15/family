<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library(array('session'));
        $this->load->model(array('AdminModel','CommonModel','WebsiteModel','UserModel'));

        $response = [];
        
	}

	public function super_admin_login(){
		try{
			
			$this->load->view('admin/super_admin_login');

		}catch(Exception $e){
			$response["stutusCode"] = 500;
			$response['stutusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function chk_super_admin_login(){
		try{
			
			//echo "<pre>"; print_r($_POST); exit;

			$email = $_POST['email'];
			$password  = hash_hmac("SHA256", $_POST['password'], SECRET_KEY);

			$data=array('email'=>$email, 'password'=>$password);
			
			$result = $this->UserModel->chk_super_admin_login($data);
			if(isset($result) && !empty($result)){
				$response["stutusCode"] = 200;
				$response["redirectUrl"] = base_url('admin');
				$response['stutusMessage'] = "Login Success.";
				$userdata = array(
					'userId'     	=> $result->userId,
					'userName'     	=> $result->userName,
	               	'userRole'     	=> $result->userRole,
	               	'userRoleName' 	=> $result->userRoleName,
	               	'logged_in' 	=> TRUE
	           	);

				$this->session->set_userdata('loggedInUserData', $userdata);

				echo json_encode($response); exit;
			}else{
				$response["stutusCode"] = 404;
				$response['stutusMessage'] = "Incorrect Username/Email Or Password!";
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["stutusCode"] = 500;
			$response['stutusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function showPass(){
		
		//$password = 'IroAdmin@2020'; // admin password
		//$password = 'IroSuperAdmin@2020'; // Super admin password
		//$password = 'IroMasterPwd@2020'; // master password
		$pass  = hash_hmac("SHA256", $password, SECRET_KEY);
		echo "<pre>"; print_r($pass); exit;
	}

}

?>