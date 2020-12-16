<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library(array('session'));
        $this->load->model(array('AdminModel','CommonModel','WebsiteModel'));

        $response = [];
        
	}

	public function index()
	{
		$this->load->view('dashboards/dashboard');
	}

	public function all_slider_images(){
		try{
			
			$result = $this->AdminModel->all_slider_images();
			if($result==false){
				$response["stutusCode"] = 404;
				$response['stutusMessage'] = "slider images not found !";
				echo json_encode($response); exit;
			}else{
				//giving api response 
				$response["stutusCode"] = 200;
				$response['data'] = $result;
  				$response["stutusMessage"] = "slider images retrived successfully.";
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["stutusCode"] = 500;
			$response['stutusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function all_announcements(){
		try{
			
			$result = $this->AdminModel->all_announcements();
			if($result==false){
				$response["stutusCode"] = 404;
				$response['stutusMessage'] = "announcements not found !";
				echo json_encode($response); exit;
			}else{
				//giving api response 
				$response["stutusCode"] = 200;
				$response['data'] = $result;
  				$response["stutusMessage"] = "announcements retrived successfully.";
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["stutusCode"] = 500;
			$response['stutusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function all_upcomig_events(){
		try{
			
			$result = $this->AdminModel->all_upcomig_events();
			if($result==false){
				$response["stutusCode"] = 404;
				$response['stutusMessage'] = "upcomig events not found !";
				echo json_encode($response); exit;
			}else{
				//giving api response 
				$response["stutusCode"] = 200;
				$response['data'] = $result;
  				$response["stutusMessage"] = "upcomig events retrived successfully.";
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["stutusCode"] = 500;
			$response['stutusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function all_imp_dates(){
		try{
			
			$result = $this->AdminModel->all_imp_dates();
			if($result==false){
				$response["stutusCode"] = 404;
				$response['stutusMessage'] = "important dates not found !";
				echo json_encode($response); exit;
			}else{
				//giving api response 
				$response["stutusCode"] = 200;
				$response['data'] = $result;
  				$response["stutusMessage"] = "important dates retrived successfully.";
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["stutusCode"] = 500;
			$response['stutusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function pagination_events(){
		try{
			$page_no = 1;
			if(isset($_REQUEST['page_no']) && !empty($_REQUEST['page_no'])){
				$page_no = $_REQUEST['page_no'];
			}
			
			$result = $this->AdminModel->pagination_events($page_no);
			if($result==false){
				$response["statusCode"] = 404;
				$response['statusMessage'] = "upcomig events not found !";
				echo json_encode($response); exit;
			}else{
				//giving api response 
				$response["statusCode"] = 200;
				$response['data'] = $result;
  				$response["statusMessage"] = "upcomig events retrived successfully.";
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["statusCode"] = 500;
			$response['statusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

	public function pagination_imp_dates(){
		try{
			$page_no = 1;
			if(isset($_REQUEST['page_no']) && !empty($_REQUEST['page_no'])){
				$page_no = $_REQUEST['page_no'];
			}
			
			$result = $this->AdminModel->pagination_imp_dates($page_no);
			if($result==false){
				$response["statusCode"] = 404;
				$response['statusMessage'] = "important dates not found !";
				echo json_encode($response); exit;
			}else{
				//giving api response 
				$response["statusCode"] = 200;
				$response['data'] = $result;
  				$response["statusMessage"] = "important dates retrived successfully.";
				echo json_encode($response); exit;
			}

		}catch(Exception $e){
			$response["statusCode"] = 500;
			$response['statusMessage'] = $e->getMessage();
			echo json_encode($response); exit;
		}
	}

}

?>