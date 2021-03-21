<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getQuestions()
	{
		$this->db->select('*');
		$this->db->from('quiz');	
		$query = $this->db->get();
		return $query->result();

		$num_data_returned = $query->num_row;
		if ($num_data_returned < 1)
		{
			echo 'There is no data in the database';
			exit();
		}
	}
}

/* End of file Quiz_model.php */
/* Location: ./application/models/Quiz_model.php */