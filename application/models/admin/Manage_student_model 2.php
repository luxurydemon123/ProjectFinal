<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_student_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function add_student($name_student, $date, $gender,$email_student, $course_student, $avatar_student)
	{
		# code...
		$data = array(
			'studentname' =>$name_student ,
			'date' =>$date ,
			'gender' =>$gender ,
			'course' =>$course_student ,
			'email' =>$email_student ,
			'image' =>$avatar_student 
			);
		$this->db->insert('student', $data);
		return $this->db->insert_id();
	}
	public function getAllData()
	{
		# code...
		 
		$this->db->select('*');
		
		$data = $this->db->get('student' );
		$data = $data->result_array();
		

		
		return $data;
	}
	
	public function getDataByID($key)
	{
		# code...
		$this->db->select('*');
		$this->db->where('id', $key);
		$data = $this->db->get('student');
		$data = $data->result_array();
		return $data;
	}
	public function deleteStudent($id)
	{
		# code...
		$this->db->where('id', $id);
		return $this->db->delete('student');
	}

	public function updateByID($id, $name_student, $date, $gender,$email_student, $course_student, $avatar_student)
	{
		# code...
		$data = array(
			'id' => $id,
			'studentname' =>$name_student ,
			'date' =>$date ,
			'gender' =>$gender ,
			'course' =>$course_student ,
			'email' =>$email_student ,
			'image' =>$avatar_student 
			);
		$this->db->where('id', $id);
		return $this->db->update('student', $data);
	}


	public function signup_offline($fullname , $phonenumber, $email,$schedule)
	{
		# code...
		$customer = array(
			'tenkh' => $fullname, 
			'sdt' => $phonenumber, 
			'email' => $email, 
			'lichhoc' => $schedule 		 
		);

		return $this->db->insert('signup_offline', $customer);
	}
	public function getDataStudent()
	{
		# code...
		$this->db->select('*');
		$data = $this->db->get('signup_offline');
	
		$data = $data->result_array();
		return $data;
	}

}

/* End of file Manage_student_model.php */
/* Location: ./application/models/Manage_student_model.php */