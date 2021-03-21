<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
			$this->load->model('News_model');
		$result = $this->News_model->loadDanhsach();
		$result = array('db' => $result);
		$this->load->view('admin/Category_view', $result);
	}
	function themdanhmuc()
	{
		$tendanhmuc = $this->input->post('tendanhmuc');
		$this->load->model('News_model');
		if ($this->News_model->insertCategory($tendanhmuc)) {
			echo "<script>";
			echo 'alert("Insert Successfully!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Category','refresh');
		}
		else{
			echo 'that bai';
		}
	}
	function suadanhmuc($id)
	{
		$this->load->model('News_model');
		$dl = $this->News_model->getDatabyID($id);	
		$dl = array('db'=> $dl);
		$this->load->view('admin/Category_News/editcategory_view', $dl, FALSE);
	}
	public function updatedanhmuc()
	{
		$this->load->model('News_model');
		$id = $this->input->post('id');
		$tendanhmuc = $this->input->post('tendanhmuc');
		
		if ($this->News_model->updateById($id, $tendanhmuc)) {
			echo "<script>";
			echo 'alert("Update Successfully!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Category','refresh');
		}
		else{
			echo 'Failure';
		}
		
	}
	function xoadanhmuc($id)
	{
		
		
		$this->load->model('News_model');
		$this->News_model->deleteByID($id);
		
			echo "<script>";
			echo 'alert("Delete Successfully!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Category','refresh');
	
		
		
	}
	function addJquery()
	{
		$tendanhmuc = $this->input->post('tendanhmuc');
		$this->load->model('News_model');
		$this->News_model->insertCategory($tendanhmuc);
		echo json_encode($this->db->insert_id()); 
	}
}

/* End of file News.php */
/* Location: ./application/controllers/News.php */