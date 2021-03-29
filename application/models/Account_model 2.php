<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function checkLogin($username , $password)
	{
		# code...
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$result = $this->db->get('admin')->result_array();
		if (empty($result)) {
			# code...
			return false;
		}
		else{
			return true;
		}

	}

}

/* End of file Account_model.php */
/* Location: ./application/models/Account_model.php */