<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
	}

	public function index()
	{
		if ($this->session->userdata('user_admin')){
			# code...
			$this->load->view('admin/Admin_view');
		}else{
			redirect('http://localhost:8888/Project2/admin','refresh');

		}
			
		
	}
	public function checkLogin()
	{
		# code...
		$this->load->model('Account_model');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->Account_model->checkLogin($username, $password)) 
		{
			# code...
			$this->session->set_userdata('user_admin' , $username);
			redirect('http://localhost:8888/Project2/admin/Login_admin/index','refresh');
		}
		else{
			echo "<script>";
			echo 'alert("Invalid username or password!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin','refresh');
		}		
	}
	
	public function logout($value='')
	{
		# code...
		if ($this->session->userdata('user_admin')) {
			# code...
			//cancel session
			$this->session->unset_userdata('user_admin');
			redirect('http://localhost:8888/Project2/admin','refresh');
		}
		//Page log out
	}

}

/* End of file login_admin.php */
/* Location: ./application/controllers/login_admin.php */