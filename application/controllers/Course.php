<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Course_model');
		$this->load->model('Lesson_model');
		$this->load->model('Document_model');

	}

	public function index()
	{
		
		$this->load->model('Course_model');
		$data = $this->Course_model->get_all_course();
		$this->load->view('Course/Course_view' , $data);
	}
	public function Course_detail($id)
	{		
		$this->load->model('Course_model');
		$where = array('id_course' => $id);

		$data3 = $this->Course_model->get_title_course($id);
		$data1 = $this->Lesson_model->get($where);
		$data2 = $this->Document_model->get($where);

		$data = array($data1 , $data2 , $data3);
		$data = array("data_detail_course" => $data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die();
		$this->load->view('Course/Course_detail',$data);
	}
	public function Course_lession($id)
	{
		$this->load->model('Lesson_model');
		$this->load->model('Course_model');
		$where = array('id_course' => $id);

		
		$data1 = $this->Lesson_model->get_id_course($id);
		$data2 = $this->Course_model->get_title_course($id);

		$data = array($data1 , $data2 );
		$data = array("data_detail_course" => $data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die();
		$this->load->view('Course/Course_lession',$data);
		
	}
	

}

/* End of file Course.php */
/* Location: ./application/controllers/Course.php */


