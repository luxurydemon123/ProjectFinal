<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('mail/PHPMailer.php');
require('mail/SMTP.php');
require('mail/POP3.php');
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('email');
		$this->load->model('user_model');
		
	}
	public function index()
	{
		$this->load->view('user/login_view' );
	}

	public function sign_in()
	{
		
		$this->load->view('user/login_view' );
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		
		$this->load->model('login_model');
		$dem = $this->login_model->getMember($username, $password);
		if ($dem == '1') {
			echo 'thành công';
			$this->session->set_userdata('user',$username);
			

			redirect('http://localhost:8888/Project2/Home/Home_user','refresh');
			//create session user

			
		}
		else {
			echo "<span style ='color:red;font-size: 21px;'>Login Failed!</span>";
		}
		
	}	
	// public function Email()
	// {
	// 	$this->load->library('email');
	// 	$config = array();
	// 	$config['protocol'] = 'smtp';
	// 	$config['SMTP_host'] = 'smtp.gmail.com';
	// 	$config['SMTP_user'] = 'luxurydemon1999@gmail.com';
	// 	$config['SMTP_pass'] = 'tdnacmiemt1234';
	// 	$config['SMTP_port'] = 465;
	// 	$config['mailtype'] = 'html';
		
	// 	$this->email->initialize($config);
		

	// 	$this->email->from('luxurydemon1999@gmail.com');
	// 	$this->email->to('luxurydemon123@gmail.com');
		

	// 	$this->email->subject('Email Test');
	// 	$this->email->message('Testing the email class.');
	// 	if ($this->email->send()) {
	// 		echo 'thanh cong';
	// 	}
	// 	else{
	// 		echo 'that bai';
	// 	}
		
	// }





	public function sign_up()
	{
		$this->load->view('user/login_view');
		//get data from login_view
		$username = $this->input->post('username-new');
		$email = $this->input->post('email-new');
		$password = $this->input->post('password-new');
		$repassword = $this->input->post('repassword-new');
		if ($username && $email && $password && $repassword) {
			$this->load->model('login_model');
			$this->login_model->addMember($username , $email , $password, $repassword);
		
		}
	}
	public function Forgotpassword()
	{
		$this->load->view('user/forgotpassword_view');
	}

	public function Email()
	{
		
	}

	public function resetlink()
	{
		$email = $this->input->post('email');
		
		$result = $this->db->query("select * from user_login where email ='".$email."'")->result_array();
		
		if (count($result) > 0)
		{
			$tokan =  rand(1000,9999);
			$this->db->query("update user_login set password = '".$tokan."'where email ='".$email."'");
			$message = "Please Click on password reset link <br> <a href='".base_url('reset?tokan=').$tokan."'>Reset Passowrd</a>";
			$this->Email($email ,'Reset Password Link', $message);
		}
		else 
		{
			$this->session->set_flashdata('message', 'Email not registered');
			redirect(base_url('Login/Forgotpassword'));
		}

		// Instantiation and passing `true` enables exceptions
		
		$mail = new PHPMailer\PHPMailer\PHPMailer();
	    $mail->IsSMTP(); // enable SMTP

	    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	    $mail->SMTPAuth = true; // authentication enabled
	    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	    $mail->Host = "smtp.gmail.com";
	    $mail->Port = 465; // or 587
	    $mail->CharSet = "UTF-8";
	    $mail->IsHTML(true);
	    $mail->Username = "luxurydemon1999@gmail.com";
	    $mail->Password = "sosztdrzcvvflxji";
	    $mail->SetFrom("luxurydemon1999@gmail.com", $email);
	    $mail->AddAddress($email);
	    $mail->Subject = "Dekiru Nihongo Reset Password";
	    $mail->Body = "Please Click on password reset link <br> <a href='".base_url('login/reset?tokan=').$tokan."'>Reset Password</a>" ;



	    if(!$mail->send()) {

	    	echo "Mailer Error: " . $mail->ErrorInfo;
	    	$this->Email($email ,'Reset Password Link', $message);
	    } else {
	    	$this->load->view('message/Message_view');
	    }





		
	}
	
	public function reset()
	{
		$data['$tokan'] = $this->input->get('tokan');
		$_SESSION['tokan'] = $data['$tokan'];
		$this->load->view('user/resetpass_view');
	}

	public function updatepass()
	{
		$_SESSION['tokan'];
		$data = $this->input->post();	
		if ($data['password'] == $data['cpassword']) 
		{
			$this->db->query("update user_login set password='".$data['password']."' where password='".$_SESSION['tokan']."'");
			echo "<script>";
			echo 'alert("Bạn đã cập nhật mật khẩu thành công!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/Login/','refresh');
		}

	}

	
	

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */