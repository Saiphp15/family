<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function technologyList(){
		try{
			$query = $this->db->select('*')->from('technology')->get();
			if($query==true){
				return $query->result();
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function save_contact_form($data){
		try{
			$query = $this->db->insert('contact_form',$data);
			if($query==true){
				$last_inserted_id = $this->db->insert_id();
				return $last_inserted_id;
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function save_solution($data){
		try{
			$query = $this->db->insert('solutions',$data);
			if($query==true){
				$last_inserted_id = $this->db->insert_id();
				return $last_inserted_id;
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function single_question_details($question_id){
		try{
			$result = [];
			$query1 = $this->db->select('*')->from('questions')->where('id',$question_id)->get();
			$count_record = $query1->num_rows();
			if($count_record>0){

				$result['question_details'] = $query1->row();
				//echo "<pre>"; print_r($result); exit;
				$query2 = $this->db->select('*')->from('solutions')->where('question_id',$question_id)->get();
				$count_record2 = $query2->num_rows();
				if($count_record2>0){
					$result['question_solutions'] = $query2->result();
				}else{
					$result['question_solutions'] = '';
				}
				//echo "<pre>"; print_r($result); exit;
				return $result;
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function update_page_views($question_id){
		try{
			$query1 = $this->db->select('views')->from('questions')->where('id',$question_id)->get();
			$count_record = $query1->num_rows();
			if($count_record>0){
				$data = $query1->row();
				$view_count = $data->views;
				$view_count = $view_count + 1;

				// Update
	            $values=array('views'=>$view_count);
	            $query2 = $this->db->update('questions', $values, array('id' => $question_id));
	            if($query2==true){
	            	return true;
	            }else{
	            	return false;
	            }
				
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function technology($technology){
		try{
			$query = $this->db->select('questions.*,count(solutions.id) AS solution_count')
			->from('questions')
			->join('solutions','solutions.question_id=questions.id','left')
			->like('questions.title', $technology)
			->or_like('questions.keywords', $technology)
			->group_by('questions.id')
			->order_by('questions.id', 'ASC')
			->get();
			$count_record = $query->num_rows();
			if($count_record>0){
				return $query->result();
			}else{
				return false;
			}
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

}
