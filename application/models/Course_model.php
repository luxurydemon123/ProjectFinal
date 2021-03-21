<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_model extends CI_Model {

	public $variable;
	const TABLE_NAME = 'course';
	const PRI_INDEX = 'id_course';

	public function __construct()
	{
		parent::__construct();
		
		
	}
	public function get_new_course()
	{
		# code...
		$this->db->select('*');
		$this->db->order_by('date_upload', 'desc');
		$query = $this->db->get('course', 3);
		$result = $query->result_array();
		$result = array('data_course' => $result );
		return $result;
	}
	public function get_all_course()
	{
		# code...
		$this->db->select('*');
		$this->db->order_by('date_upload', 'desc');
		$query = $this->db->get('course');
		$result = $query->result_array();
		$result = array('data_course' => $result );
		return $result;
		
	}
	public function get_title_course($id)
	{
		$this->db->select('*');
		$this->db->where('id_course', $id);
	    $query = $this->db->get('course');
	    return $query->result_array();
	}

	/**
	     * Inserts new data into database
	     *
	     * 
	     */
    public function insert(Array $data) {
    	if ($this->db->insert(self::TABLE_NAME, $data)) {
    		return $this->db->insert_id();
    	} else {
    		return false;
    	}
    }

    public function delete($where = array())
    {
    	if (!is_array($where)) {
    		$where = array(self::PRI_INDEX => $where);
    	}
    	$this->db->delete(self::TABLE_NAME, $where);
    	return $this->db->affected_rows();
	}

	public function update(Array $result, $where = array())
	{
	    	if (!is_array($where)) {
	    		$where = array(self::PRI_INDEX => $where);
	    	}
	    	$this->db->update(self::TABLE_NAME, $result, $where);
	    	return $this->db->affected_rows();
	}

	public function updateContentCourseById($id, $content)
	{
		$data = array('id_course' => $id , 'information' =>$content);
		$this->db->where('id_course', $id);
		return $this->db->update('course', $data);
	}
	

}

/* End of file Course.php */
/* Location: ./application/models/Course.php */