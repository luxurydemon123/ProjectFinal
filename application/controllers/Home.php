<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('mail/PHPMailer.php');
require('mail/SMTP.php');
require('mail/POP3.php');

class Home extends CI_Controller {

	public function __construct()
	{
		//$this->load->library('session');
		
		
	}
	// List all course

	public function index(  )
	{
		
		parent::__construct();
		$this->load->model('admin/Slides_model');
		$this->load->model('admin/Manage_Footer_model');
		$footer = $this->Manage_Footer_model->getData();
		$footer = json_decode($footer, true);
		$dl = $this->Slides_model->getdataSlide();
		$dl = array('mangdl' => $dl ,'dataFooter'=> $footer);

		$this->load->view('index', $dl , $footer);

		
	}
	public function getNewCourse()
	{
		# code...
		$this->load->model('Course');
		$data = $this->Course->get_new_course();
		$this->load->view('index' , $data );

	}

	public function Home_user(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('user')) {
			$this->load->view('user/index');
		}
		else {
			redirect('http://localhost:8888/Project2/Login/','refresh');
		}
		
	}

	public function Course_user(){

		parent::__construct();
		$this->load->model('Course_model');
		$data = $this->Course_model->get_all_course();
		$this->load->library('session');
		if ($this->session->userdata('user')) {
			$this->load->view('user/layout/Course_user',$data);
		}
		else {
			redirect('http://localhost:8888/Project2/Login/','refresh');

		}

		
		
	}

	public function News_user(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('user')) {
			$this->load->view('News_view');
		}
		else {
			redirect('http://localhost:8888/Project2/Login/','refresh');

		}
	}
	public function Contact_user(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('user')) {
			$this->load->view('user/layout/Contact_user');
		}
		else {
			redirect('http://localhost:8888/Project2/Login/','refresh');

		}
	}
	public function logout(){
		parent::__construct();
		if ($this->session->userdata('user')) {

			$this->session->unset_userdata('user');//cancel session
			redirect('http://localhost:8888/Project2/','refresh');
		}
		
	}

	

	
	


}
