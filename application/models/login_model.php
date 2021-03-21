<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function addMember($user_new , $email_new , $password_new, $repassword_new)
	{
		# code...
		//Check if the username exists?
		$this->db->where('username', $user_new);
		$userexits = $this->db->get('user_login')->num_rows();
		//check password matches
		if ($password_new != $repassword_new) {
			# code...
			echo "<span style ='color:red,font-size: 21px;'>Passwords do not match! Please re-register</span>";
		} else if ($userexits == '0') 
			# code...
		{
			$object = array('username' => $user_new , 'email' => $email_new, 'password' => $password_new, 'repassword' => $repassword_new );
			if ($this->db->insert('user_login', $object)) {
				echo "<span style ='color:red,font-size: 21px;'>Your account is successfully registered.</span>";
			}
			
		}
		
		else{
			echo  "<span style= 'color: red'><h3>User already exists! Please re-enter <i class='fas fa-frown-open'></i></h3></span>";
		}

	}
	public function getMember($username,$password)
	{
		# code...
		
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$dem = $this->db->get('user_login')->num_rows();
		return $dem;

	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */