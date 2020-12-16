<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class CommonController extends MY_Controller {



	/**

	 * Index Page for this controller.

	 *

	 * Maps to the following URL

	 * 		http://example.com/index.php/welcome

	 *	- or -

	 * 		http://example.com/index.php/welcome/index

	 *	- or -

	 * Since this controller is set as the default controller in

	 * config/routes.php, it's displayed at http://example.com/

	 *

	 * So any other public methods not prefixed with an underscore will

	 * map to /index.php/welcome/<method_name>

	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */



	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->model('CommonModel');

		$this->load->helper(array('url','form','html'));

		$this->load->library('session');

		date_default_timezone_set("Asia/Kolkata");

	}



	public function all_countries_list(){

		try{

			$questionData = new stdClass();

			$resultData = $this->CommonModel->all_countries_list();

			if(isset($resultData) && !empty($resultData)){

				$questionData->all_countries_list = array_reverse($resultData);

			}else{

				$questionData->all_countries_list = '';

			}

			echo json_encode($questionData);


		}catch(Exception $e){

			return $e->getMessage();

		}

	}



	public function secratelock(){

		try{

			$data = array('secratelock' => md5('sai'), 'tocken' => md5('sai'), 'flag' => 1);



			echo json_encode($data);



			

		}catch(Exception $e){

			return $e->getMessage();

		}

	}


	public function loginadd()
	{
		
		$password = 'IroSuperAdmin@2020'; 	// super admin password
		//$password = 'IroAdmin@2020'; 			// admin password
		//$password = 'IroMaster@2020'; 			// master password
		
		$pass  = hash_hmac("SHA256", $password, SECRET_KEY);
		echo "<pre>"; print_r($pass); exit;
	}




	

}

