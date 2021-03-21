<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_teacher_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function add_teacher($name_teacher,$age_teacher,$phonenumber,$avatar,$linkfb,$description)
	{
		# code...
		//upload mysql
		$data = array(
			'name_teacher' => $name_teacher ,
			'age_teacher' => $age_teacher ,
			'phonenumber' => $phonenumber ,
			'avatar' => $avatar ,
			'linkfb' => $linkfb ,
			'description' => $description 
			);
		$this->db->insert('teacher', $data);
		return $this->db->insert_id();

	}
	public function getAllData()
	{
  	# code...
		$this->db->select('*');
		$data = $this->db->get('teacher');
		$data = $data->result_array();
		return $data;
	}
	public function getDataByID($key)
	{
		# code...
		$this->db->select('*');
		$this->db->where('id', $key);
		$data = $this->db->get('teacher');
		$data = $data->result_array();
		return $data;
	}
	public function updateByID($id,$name_teacher,$age_teacher,$phonenumber,$avatar,$linkfb,$description)
	{
		# code...
		// encapsulates the variable into an array of data
		$data = array(
			'id' =>$id, 
			'name_teacher' =>$name_teacher ,
			'age_teacher' =>$age_teacher ,
			'phonenumber' =>$phonenumber ,
			'avatar' =>$avatar ,
			'linkfb' =>$linkfb ,
			'description' =>$description 
			);
		$this->db->where('id', $id);
		return $this->db->update('teacher', $data);
		
	}
	public function deleteByID($id)
	{
		# code...
		$this->db->where('id', $id);
		return $this->db->delete('teacher');
	}


}

/* End of file Manage_teacher_model.php */
/* Location: ./application/models/Manage_teacher_model.php */