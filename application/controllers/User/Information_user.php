<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class information_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_model');
		
	}

	public function index()
	{
		$this->load->model('User_model');
		$user = $this->input->get_post('user-new');
		$result = $this->User_model->getInfo($user);
		
		print_r($result);
		$this->load->view('user/information_user' , $result);

	}


}

/* End of file User.php */
/* Location: ./application/controllers/User.php */