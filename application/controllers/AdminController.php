<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class AdminController extends MY_Controller {



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

		$this->load->helper(array('url','form','html'));

		$this->load->library('session');

		date_default_timezone_set("Asia/Kolkata");

		if($this->session->userdata('loggedInUserData')){
		    $loggedInUserData = $this->session->userdata('loggedInUserData');
		}else{
		    redirect('super-admin-login');
		}

	}

	public function index()
	{

		try{

			$pageData = new stdClass();


			$this->load->view('admin/dashboard', $pageData);

		}catch(Exception $e){

			return $e->getMessage();

		}

	}

	public function super_admin_logout(){
		try{

			$this->session->unset_userdata('loggedInUserData');
		    $this->session->sess_destroy();
		    redirect('super-admin-login');

		}catch(Exception $e){

			return $e->getMessage();

		}
	}


	public function add_new_slider_image($crude='', $image_id=''){

		try{

			$imageData = new stdClass();

			switch($crude){

			  	case 'add':

				  	$imageData->crude = 'add';

					$this->load->view('admin/add_new_slider_image',$imageData);

			 	break;

			  	case 'edit':

			  		$imageData->crude = 'edit';

					$this->load->view('admin/add_new_slider_image',$imageData);

			  	break;

			  	case 'view':

			  		$imageData->crude = 'view';

			  		$this->load->view('admin/add_new_slider_image',$imageData);

			  	break;

		  	}

		}catch(Exception $e){

			return $e->getMessage();

		}

	}

	public function save_slider_image(){
		try{

			$data = array(
				'is_active'=>$_REQUEST['status'],
				'created_datetime'=>DATETIME,
				'created_by'=>1
			);

			$file_name = '';
			if(isset($_FILES['slider_img']['name']) && !empty($_FILES['slider_img']['name'])){

			    $file_name = $_FILES['slider_img']['name'];
			    $file_tmp =$_FILES['slider_img']['tmp_name'];
			      
			    $path = SERVER_ROOT_PATH_UPLOADS.'slider_images';
			    
			    move_uploaded_file($file_tmp,$path."/".$file_name);

				$array1 = array('slider_img'=>isset($file_name)?$file_name:'');
				$data = array_merge($array1,$data);
			}

			$status = $this->AdminModel->save_slider_img($data);
			if($status==false){
				$response["statusCode"] = 500;
				$response['statusMessage'] = "error while inserting slider image !";
				echo json_encode($response); exit;
			}else{

				//giving api response 
				$response["statusCode"] = 200;
  				$response["statusMessage"] = "Slider image inserted successfully.";
  				$response["redirectUrl"] = base_url('view-all-slider-images');
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["statusCode"] = 500;
			$response['statusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function view_all_slider_images(){
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

		    //echo "<pre>"; print_r($pageData); exit;

			$this->load->view('admin/view_all_slider_images',$pageData);
		}catch(Exception $e){
			$this->unsuccessArr['statusMessage'] = $e->getMessage();
			echo json_encode($this->unsuccessArr); exit;
		}
	}

	public function add_new_announcement($crude='', $image_id=''){
		try{

			$announcementData = new stdClass();

			switch($crude){

			  	case 'add':

				  	$announcementData->crude = 'add';

					$this->load->view('admin/add_new_announcement',$announcementData);

			 	break;

			  	case 'edit':

			  		$announcementData->crude = 'edit';

					$this->load->view('admin/add_new_announcement',$announcementData);

			  	break;

			  	case 'view':

			  		$announcementData->crude = 'view';

			  		$this->load->view('admin/add_new_announcement',$announcementData);

			  	break;

		  	}

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function save_announcement(){
		try{

			$data = array(
				'title'=>$_REQUEST['title'],
				'short_desc'=>$_REQUEST['short_desc'],
				'is_active'=>$_REQUEST['status'],
				'created_datetime'=>DATETIME,
				'created_by'=>1
			);

			$status = $this->AdminModel->save_announcement($data);
			if($status==false){
				$response["statusCode"] = 500;
				$response['statusMessage'] = "error while inserting Announcement !";
				echo json_encode($response); exit;
			}else{

				//giving api response 
				$response["statusCode"] = 200;
  				$response["statusMessage"] = "Announcement inserted successfully.";
  				$response["redirectUrl"] = base_url('view-all-announcements');
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["statusCode"] = 500;
			$response['statusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function view_all_announcements(){
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

		    //echo "<pre>"; print_r($pageData); exit;

			$this->load->view('admin/view_all_announcements',$pageData);
		}catch(Exception $e){
			$this->unsuccessArr['statusMessage'] = $e->getMessage();
			echo json_encode($this->unsuccessArr); exit;
		}
	}

	public function add_new_upcomig_event($crude='', $image_id=''){
		try{

			$upcomigEventData = new stdClass();

			switch($crude){

			  	case 'add':

				  	$upcomigEventData->crude = 'add';

					$this->load->view('admin/add_new_upcomig_event',$upcomigEventData);

			 	break;

			  	case 'edit':

			  		$upcomigEventData->crude = 'edit';

					$this->load->view('admin/add_new_upcomig_event',$upcomigEventData);

			  	break;

			  	case 'view':

			  		$upcomigEventData->crude = 'view';

			  		$this->load->view('admin/add_new_upcomig_event',$upcomigEventData);

			  	break;

		  	}

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function save_upcomig_event(){
		try{

			$data = array(
				'title'=>$_REQUEST['title'],
				'event_date'=>date('Y-m-d',strtotime($_REQUEST['event_date'])),
				'short_desc'=>$_REQUEST['short_desc'],
				'is_active'=>$_REQUEST['status'],
				'created_datetime'=>DATETIME,
				'created_by'=>1
			);

			$status = $this->AdminModel->save_upcomig_event($data);
			if($status==false){
				$response["statusCode"] = 500;
				$response['statusMessage'] = "error while inserting Upcomig Event !";
				echo json_encode($response); exit;
			}else{

				//giving api response 
				$response["statusCode"] = 200;
  				$response["statusMessage"] = "Upcomig Event inserted successfully.";
  				$response["redirectUrl"] = base_url('view-all-upcomig-events');
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["statusCode"] = 500;
			$response['statusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function view_all_upcomig_events(){
		try{
			$pageData = new stdClass();
		    $upcomigEventListUrl = base_url('all-upcomig-events');
			$urlJsonData = $this->restclient->post($upcomigEventListUrl);
			if($urlJsonData->info->http_code == 200)
		    {
		        $pageData->upcomig_event_list = json_decode($urlJsonData->response);
		        if(isset($pageData->upcomig_event_list->data) && !empty($pageData->upcomig_event_list->data))
		        {
		        	$pageData->upcomig_event_list = $pageData->upcomig_event_list->data;
		        }else{
		        	$pageData->upcomig_event_list = '';
		        }
		    }

		    //echo "<pre>"; print_r($pageData); exit;

			$this->load->view('admin/view_all_upcomig_events',$pageData);
		}catch(Exception $e){
			$this->unsuccessArr['statusMessage'] = $e->getMessage();
			echo json_encode($this->unsuccessArr); exit;
		}
	}

	public function add_new_imp_date($crude='', $impdate_id=''){
		try{

			$impDateData = new stdClass();

			switch($crude){

			  	case 'add':

				  	$impDateData->crude = 'add';

					$this->load->view('admin/add_new_imp_date',$impDateData);

			 	break;

			  	case 'edit':

			  		$impDateData->crude = 'edit';

					$this->load->view('admin/add_new_imp_date',$impDateData);

			  	break;

			  	case 'view':

			  		$impDateData->crude = 'view';

			  		$this->load->view('admin/add_new_imp_date',$impDateData);

			  	break;

		  	}

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function save_important_date(){
		try{

			$data = array(
				'title'=>$_REQUEST['title'],
				'imp_date'=>date('Y-m-d',strtotime($_REQUEST['important_date'])),
				'description'=>$_REQUEST['short_desc'],
				'is_active'=>$_REQUEST['status'],
				'created_datetime'=>DATETIME,
				'created_by'=>1
			);

			$status = $this->AdminModel->save_important_date($data);
			if($status==false){
				$response["statusCode"] = 500;
				$response['statusMessage'] = "error while inserting important date !";
				echo json_encode($response); exit;
			}else{

				//giving api response 
				$response["statusCode"] = 200;
  				$response["statusMessage"] = "important date inserted successfully.";
  				$response["redirectUrl"] = base_url('view-all-imp-dates');
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["statusCode"] = 500;
			$response['statusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function view_all_imp_dates(){
		try{
			$pageData = new stdClass();
		    $impDateListUrl = base_url('all-imp-dates');
			$urlJsonData = $this->restclient->post($impDateListUrl);
			if($urlJsonData->info->http_code == 200)
		    {
		        $pageData->imp_date_list = json_decode($urlJsonData->response);
		        if(isset($pageData->imp_date_list->data) && !empty($pageData->imp_date_list->data))
		        {
		        	$pageData->imp_date_list = $pageData->imp_date_list->data;
		        }else{
		        	$pageData->imp_date_list = '';
		        }
		    }

		    //echo "<pre>"; print_r($pageData); exit;

			$this->load->view('admin/view_all_imp_dates',$pageData);
		}catch(Exception $e){
			$this->unsuccessArr['statusMessage'] = $e->getMessage();
			echo json_encode($this->unsuccessArr); exit;
		}
	}



	public function save_question(){

		try{

			$request = file_get_contents("php://input");

	      	$data = json_decode($request,true);

	      	

			$result = [];

			//echo "<pre>"; print_r($_REQUEST); exit;

			if(isset($data) && !empty($data)){



				$user_ip = $this->getUserIP();



				$keywordArray =  str_word_count($data['title'], 1);

				$question_keywords = '';

				for ($i=0; $i < count($keywordArray); $i++) { 

					$question_keywords .= ','.$keywordArray[$i];

				}

				$question_keywords = substr($question_keywords, 1);

				//echo $question_keywords; exit;



				$data = array(

					'title' => isset($data['title'])?addslashes($data['title']):'',

					'description' => isset($data['description'])?addslashes($data['description']):'',

					'keywords'=>$question_keywords,

					'user_ip'=>$user_ip,

					'created_datetime' => DATETIME

				);

				//echo "<pre>"; print_r($data); exit;



				$saveStatus = $this->AdminModel->save_question($data);

				if($saveStatus==false){

					$result['http_response_code'] = 500;

					$result['message'] = 'error while saving question form data !';

					echo json_encode($result); exit;

				}else{

					$result['http_response_code'] = 200;

					$result['message'] = "Thank You! Your question has been sent.";

					$result['redirect_url'] = base_url('all-questions-list');

					echo json_encode($result); exit;

				}



			}else{

				$result['http_response_code'] = 403;

				$result['message'] = 'There was a problem with your submission, please try again.';

				echo json_encode($result); exit;

			}

			

		}catch(Exception $e){

			return $e->getMessage();

		}

	}



	public function all_questions_list(){

		try{

			$questionData = new stdClass();

			$resultData = $this->AdminModel->all_questions_list();

			if(isset($resultData) && !empty($resultData)){

				$questionData->all_questions_list = array_reverse($resultData);

			}else{

				$questionData->all_questions_list = '';

			}

			$this->load->view('admin/all_question_list',$questionData);

		}catch(Exception $e){

			return $e->getMessage();

		}

	}



	public function getUserIP()

	{

		try{

		    // Get real visitor IP behind CloudFlare network

		    if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])){

		        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];

		        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];

		    }

		    $client  = @$_SERVER['HTTP_CLIENT_IP'];

		    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];

		    $remote  = $_SERVER['REMOTE_ADDR'];



		    if(filter_var($client, FILTER_VALIDATE_IP)){

		        $ip = $client;

		    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){

		        $ip = $forward;

		    }else{

		        $ip = $remote;

		    }



		    return $ip;

	    }catch(Exception $e){

			return $e->getMessage();

		}

	}





	

}

