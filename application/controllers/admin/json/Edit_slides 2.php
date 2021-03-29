<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
		$this->load->model('admin/Slides_model');
	}

	public function index()
	{
		

		// get data from mysql
		
		//pass the array to the view

		$this->load->model('admin/Slides_model');
		$data = $this->Slides_model->getdataSlide();

		// turn json into an array
		$data = json_decode($data , true);
		

		$data = array('mangdl' => $data );
		
		
		
		
		$this->load->view('admin/json/edit_slide_view', $data, False );
		
		



	}

}

/* End of file Edit_slides.php */
/* Location: ./application/controllers/Edit_slides.php */