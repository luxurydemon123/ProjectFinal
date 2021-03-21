<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailbox extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->model('admin/Manage_student_model');
		$result = $this->Manage_student_model->getDataStudent();
		
		$result = array('student_offline' => $result  );
		
		$this->load->view('admin/Mail/mailbox_view.php' , $result);
		
	}
	public function Mail()
	{
		$this->load->view('admin/mailbox/compose.php');
	}
	public function mailbox()
	{
		$this->load->view('admin/mailbox/mailbox.php');

	}

}

/* End of file Mailbox.php */
/* Location: ./application/controllers/Mailbox.php */