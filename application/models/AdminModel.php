<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class AdminModel extends CI_Model {



	public function __construct(){

		parent::__construct();

		$this->load->database();
	}


	public function save_slider_img($data){

		try{

			$query = $this->db->insert('slider_images',$data);

			if($query==true){
				return true;

			}else{

				return false;

			}

		}catch(Exception $e){

			return $e->getMessage();

		}

	}

	public function all_slider_images(){
		try{

			$query = $this->db->select('*')->from('slider_images')->get();

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

	public function save_announcement($data){
		try{

			$query = $this->db->insert('announcements',$data);

			if($query==true){
				return true;

			}else{

				return false;

			}

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function all_announcements(){
		try{

			$query = $this->db->select('*')->from('announcements')->order_by('id','DESC')->get();

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

	public function save_upcomig_event($data){
		try{

			$query = $this->db->insert('upcomig_events',$data);

			if($query==true){
				return true;

			}else{

				return false;

			}

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function all_upcomig_events(){
		try{

			$query = $this->db->select('*')->from('upcomig_events')->order_by('id','DESC')->get();

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

	public function save_important_date($data){
		try{

			$query = $this->db->insert('important_dates',$data);

			if($query==true){
				return true;

			}else{

				return false;

			}

		}catch(Exception $e){

			return $e->getMessage();

		}
	}

	public function all_imp_dates(){
		try{

			$query = $this->db->select('*')->from('important_dates')->order_by('id','DESC')->get();

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

	public function pagination_events($page_no){
		try{

			// $limit = 3;
			// $start = $page_no;

			if($page_no==1){
				$start_from = 0;
			}else{
				$start_from = 3 * $page_no - 3;
			}

			$query = $this->db->select('*')->from('upcomig_events')->order_by('id','DESC')->limit(3, $start_from)->get();

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

	public function pagination_imp_dates($page_no){
		try{

			// $limit = 3;
			// $start = $page_no;

			if($page_no==1){
				$start_from = 0;
			}else{
				$start_from = 3 * $page_no - 3;
			}

			$query = $this->db->select('*')->from('important_dates')->order_by('id','DESC')->limit(3, $start_from)->get();

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

