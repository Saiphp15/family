<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends MY_Controller {

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

		$this->load->model(array('WelcomeModel','AdminModel'));
		//$this->load->helper(array('url','form','html'));
		//$this->load->library('session');
		date_default_timezone_set("Asia/Kolkata");

		$response = [];

	}

	public function index(){
		try{
			$pageData = new stdClass();
		
			$this->load->view('index',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	

	public function events(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('events',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function faqs(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('faqs',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function gallery(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('gallery',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function faculty(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('faculty',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function about(){
		try{

			$pageData = new stdClass();

			$sliderImgListUrl = base_url('all-slider-images');
			$urlJsonData = $this->restclient->post($sliderImgListUrl);
			if($urlJsonData->info->http_code == 200)
		    {
		        $pageData->slider_img_list = json_decode($urlJsonData->response);
		        if(isset($pageData->slider_img_list->data) && !empty($pageData->slider_img_list->data))
		        {
		        	$pageData->slider_img_list = $pageData->slider_img_list->data;
		        }else{
		        	$pageData->slider_img_list = '';
		        }
		    }
		
			$this->load->view('about',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function team(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('team',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function partner(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('partner',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function student(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('student',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function incoming_faculty_exchange(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('incoming_faculty_exchange',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function programme(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('programme',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function outgoing_faculty_exchange(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('outgoing_faculty_exchange',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function announce(){
		try{

			$pageData = new stdClass();

			$announcementsListUrl = base_url('all-announcements');
			$urlJsonData = $this->restclient->post($announcementsListUrl);
			if($urlJsonData->info->http_code == 200)
		    {
		        $pageData->announcement_list = json_decode($urlJsonData->response);
		        if(isset($pageData->announcement_list->data) && !empty($pageData->announcement_list->data))
		        {
		        	$pageData->announcement_list = $pageData->announcement_list->data;
		        }else{
		        	$pageData->announcement_list = '';
		        }
		    }
		
			$this->load->view('announce',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function contact(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('contact',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function international_admission(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('international_admission',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function timeline(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('timeline',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function eligibility(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('eligibility',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function incoming_stud_exchange(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('incoming_stud_exchange',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function outgoing_stud_mobility(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('outgoing_stud_mobility',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function csips(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('csips',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function conference_workshop(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('conference_workshop',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function financial_assistance(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('financial_assistance',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function calendar(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('calendar',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function how_to_apply(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('how_to_apply',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function fees(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('fees',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function admission_rule(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('admission_rule',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function downloadable(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('downloadable',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function facilities(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('facilities',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function accomodation(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('accomodation',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function visa(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('visa',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function register_user(){
		try{

			//Taking input 
			$request 			= file_get_contents("php://input");
			$data 				= json_decode($request,true);

			$name 				= $data['name_prefix']." ".$data['name'];
			$email 				= $data['email'];
			$contact 			= $data['contact'];
			$password  			= hash_hmac("SHA256", $data['password'], SECRET_KEY);

			$pageData = new stdClass();
			$sendData = array(
				'name'=>$name,
				'email'=>$email,
				'contact'=>$contact,
				'role'=>4,
				'is_active'=>1,
				'created_datetime'=>DATETIME,
				'created_by'=>1
			);
			$header[0] = 'form-data';
		    $saveUserUrl = base_url('save-user');
			$urlJsonData = $this->restclient->post($saveUserUrl,$sendData,$header);
			//echo "<pre>"; print_r($urlJsonData); exit;
			if($urlJsonData->info->http_code == 200)
		    {
		        $pageData->api_response = json_decode($urlJsonData->response);
		        if($pageData->api_response->stutusCode==200){

		        	$sendData = array(
						'user_id'=>$pageData->api_response->last_inserted_id,
						'password'=>$password,
						'created_datetime'=>DATETIME,
						'created_by'=>1
					);
					$header[0] = 'form-data';
				    $saveUserPasswordUrl = base_url('save-user-password');
					$urlJsonData = $this->restclient->post($saveUserPasswordUrl,$sendData,$header);
					//echo "<pre>"; print_r($urlJsonData); exit;
					if($urlJsonData->info->http_code == 200){
						$pageData->api_response = json_decode($urlJsonData->response);
				        if($pageData->api_response->stutusCode==200){

				        	$this->session->set_userdata('userData', $pageData->api_response->data);

							$response["stutusCode"] = 200;
			  				$response["stutusMessage"] = "user registered successfully.";
							echo json_encode($response); exit;
				        }else{
				        	$response["stutusCode"] = 500;
							$response['stutusMessage'] = "error while registering user info !1";
							echo json_encode($response); exit;
				        }
				    }else{
				    	$response["stutusCode"] = 500;
						$response['stutusMessage'] = "error while registering user info !2";
						echo json_encode($response); exit;
				    }
		        }else{
		        	$response["stutusCode"] = 500;
					$response['stutusMessage'] = "error while registering user info !3";
					echo json_encode($response); exit;
		        }
		    }

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function user_login(){
		try{

			//Taking input 
			$request 			= file_get_contents("php://input");
			$data 				= json_decode($request,true);

			$email 				= $data['email'];
			$password  			= hash_hmac("SHA256", $data['password'], SECRET_KEY);

			$pageData = new stdClass();
			$sendData = array(
				'email'=>$email,
				'password'=>$password
			);
			$header[0] = 'form-data';
		    $chkUserUrl = base_url('chk-user-login');
			$urlJsonData = $this->restclient->post($chkUserUrl,$sendData,$header);
			//echo "<pre>"; print_r($urlJsonData); exit;
			if($urlJsonData->info->http_code == 200)
		    {
		    	$pageData->userData = json_decode($urlJsonData->response);
		    	if($pageData->userData->stutusCode==200){

		    		$this->session->set_userdata('userData', $pageData->userData->data);

		    		$response["stutusCode"] = 200;
	  				$response["stutusMessage"] = "user login successfully.";
					echo json_encode($response); exit;
		    	}else{
		    		$response["stutusCode"] = 404;
	  				$response["stutusMessage"] = "user not found with this credentials.";
					echo json_encode($response); exit;
		    	}
		    }

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function feed_post(){
		try{

			$pageData = new stdClass();
		
			$this->load->view('index',$pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}
	}


	public function update_page_views($question_id=''){
		try{
			$resultData = $this->WelcomeModel->update_page_views($question_id);
			if($resultData==true){
				return true;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}
	
	public function home(){
		$this->load->view('home');
	}

	function getUserIP()
	{
	    // Get real visitor IP behind CloudFlare network
	    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
	              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	    }
	    $client  = @$_SERVER['HTTP_CLIENT_IP'];
	    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	    $remote  = $_SERVER['REMOTE_ADDR'];

	    if(filter_var($client, FILTER_VALIDATE_IP))
	    {
	        $ip = $client;
	    }
	    elseif(filter_var($forward, FILTER_VALIDATE_IP))
	    {
	        $ip = $forward;
	    }
	    else
	    {
	        $ip = $remote;
	    }

	    return $ip;
	}

}
