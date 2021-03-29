<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_Footer_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function updateFooterJson($data)
	{
		$dl = array(
			'property_name' => 'ManageFooter',
			'id' => '2',
			'property_value' => $data
		);
		$this->db->where('property_name', 'ManageFooter');
		return $this->db->update('news_slide', $dl);

	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->where('property_name', 'ManageFooter');
		$dl = $this->db->get('news_slide');
		$dl = $dl->result_array();
		$dl = $dl[0]['property_value'];
		return $dl;
	}

}

/* End of file Manage_Footer_model.php */
/* Location: ./application/models/Manage_Footer_model.php */