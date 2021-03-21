<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lesson_model extends CI_Model {

	public $variable;
	

	public function __construct()
	{
		parent::__construct();
		
		
	}
	public function get($where = NULL)
	{
		$this->db->select('*');
		$this->db->from('lession');
		$this->db->order_by('date_upload', 'asc');
		if ($where !== NULL) {
			if (is_array($where)) {
				foreach ($where as $field=>$value) {
					$this->db->where($field, $value);
				}
			}else {
				$this->db->where('id_lesson', $where);
			}
		}
		$result = $this->db->get()->result_array();
		$result = array('data_lesson' => $result);
		return $result;

	}
	public function get_id_course($id)
	{
		$this->db->select('*');
		$this->db->from('lession');
		$this->db->where('id_lesson', $id);
		$result = $this->db->get()->result_array();
		return $result;
	}
	public function insert(Array $data)
	{
		if ($this->db->insert('lession', $data)) 
		{
			return $this->db->insert_id();	
		}
		else {
			return false;
		}
	}
	public function delete($where = array())
	{
		if (!is_array($where)) {
			$where = array('id_lesson' => $where);
		}
		$this->db->delete('lession' ,$where);
		return $this->db->affected_rows();
	}

	public function update(Array $data , $where = array())
	{
		if (!is_array($where)) {
			$where = array('id_lesson' => $where);
		}
		$this->db->update('lession', $data , $where);
		return $this->db->affected_rows();
	}

	

}

/* End of file Lesson_model.php */
/* Location: ./application/models/Lesson_model.php */