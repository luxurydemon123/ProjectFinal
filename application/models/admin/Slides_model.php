<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdataSlide()
	{
		# code...
		$this->db->select('*');
		$this->db->where('property_name', 'slides_topbanner');
		$data = $this->db->get('news_slide');
		$data = $data->result_array();

		foreach ($data as $value) {
			# code...
			$temp = $value['property_value'];
		}
		return $temp;
		
	}
	public function updateSlide($dulieucanupdate)
	{
		# code...
		$data = array('property_name' =>'slides_topbanner' ,'property_value'=> $dulieucanupdate  ); 
		$this->db->where('property_name', 'slides_topbanner');
		return $this->db->update('news_slide', $data);

	}

}

/* End of file Slides_model.php */
/* Location: ./application/models/Slides_model.php */