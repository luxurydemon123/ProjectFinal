<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_course extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//Load Dependencies
		$this->load->model('Course_model');
		$this->load->model('Lesson_model');
		$this->load->model('Document_model');

	}

	public function index()
	{
		$data_course = $this->Course_model->get_all_course();
		$this->load->view('admin/Course/Course_view',$data_course);
	}
	//add New Course
	public function add_course()
	{	
		//config upload images
		$config['upload_path']          = './uploads/Course/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = '10000000';


		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$path_image = $this->upload->data();
		$path_image = $path_image['file_name'];
		$path_image = base_url() . 'uploads/Course/' . $path_image;


		$title = $this->input->post('title');
		$image = $path_image;

		if ($title == NULL OR $image == NULL) {
			$this->load->view('errors/Failure_view');
		} 
		else {
			$data = array(
				'title_course' => $title,
				'image' => $image
			);
			if ($this->Course_model->insert($data)) 
			{
				redirect(base_url() . 'admin/Manage_course','refresh');
			}
		}
	}

	// Delete Course
	public function delete_course($id){
		$where = array('id_course' => $id);
		
		if ($this->Course_model->delete($id)) {
			redirect(base_url() . 'admin/Manage_course','refresh');
		} else {
			//$this->load->view('add_course_fail');
			echo 'that bai';
		}

	}
	//Update Course
	public function update_course()
	{
		$config['upload_path']          = './uploads/Course/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = '10000000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('image-edit');
		$image = $this->upload->data();
		$image = $image['file_name'];

		if($image == NULL){
			$image = $this->input->post('image-course');
		} else {
			$image = base_url() . 'uploads/Course/' . $image;
		}
		$title = $this->input->post('title-edit');
		$id = $this->input->post('id-edit');
		

		$result = array(
			'title_course' => $title,
			'image' => $image
		);

		$this->load->model('Course_model');
		if ($this->Course_model->update($result, $id)) {
			redirect(base_url() . 'admin/Manage_course','refresh');
		} else {
			$this->load->view('errors/Failure_view');
		}
	}

	public function ad_detail_course($id)
	{

		
		$where = array('id_course' => $id);

		$data3 = $this->Course_model->get_title_course($id);
		$data1 = $this->Lesson_model->get($where);

		
		$data2 = $this->Document_model->get($where);
		// echo "<pre>";
		// var_dump($data2);
		// echo "</pre>";
		// die();
		

		$data = array($data1 , $data2 , $data3);
		$data = array("data_detail_course" => $data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die();
		$this->load->view('admin/Course/Detail_course',$data);
	}

	//Edit Content Course
	public function editContent()
	{
		$id = $this->input->post('id');
		$content = $this->input->post('content');
		$this->load->model('Course_model');
		if ($this->Course_model->updateContentCourseById($id, $content)) 
		{
			echo "<script>";
			echo 'alert("Update Content Course Successful!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Manage_course','refresh');
		}
		else{
			echo 'Failure';
		}
		
	}




	// ADD a NEW Lesson
	public function add_lesson($id)
	{
		$config['upload_path']          = './uploads/Course/Video';
		$config['allowed_types']        = '*';
		$config['max_size']             = '100000000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('file-lesson');
		$file = $this->upload->data();
		$file = $file['file_name'];

		$title_lesson = $this->input->post('title-lesson');
		$link_youtube = $this->input->post('link-youtube');
		
		if ($title_lesson == NULL OR $link_youtube == NULL ) 
		{
			$this->load->view('message/fail');	
		}
		else
		{
			$file = base_url() . 'uploads/Course/Video/' . $file;
			$data = array(
				'id_course' => $id,
				'title_lesson' => $title_lesson,
				'video' => $link_youtube,
				'file' => $file
			);
			$this->load->model('Lesson_model');
			if ($this->Lesson_model->insert($data)) 
			{
				$url = base_url() .'admin/Manage_course/ad_detail_course/' . $id;
				redirect($url,'refresh');		
			}	

		}
	}

	// Delete Lesson Admin

	public function delete_lesson($id)
	{
		$id_course = $this->Lesson_model->get_id_course($id);
		$id_course = $id_course[0]['id_course'];

		$this->Lesson_model->delete($id);

		$url = base_url() .'admin/Manage_course/ad_detail_course/' . $id_course;
		redirect($url,'refresh');	
	}



	//Update Lesson

	// public function update($id)
	// {
	// 	$config['upload_path']          = './uploads/Course/Video/';
	// 	$config['allowed_types']        = '*';
	// 	$config['max_size']             = '100000000';

	// 	$this->load->library('upload', $config);
	// 	$this->upload->do_upload('file-upload');
	// 	$file = $this->upload->data();
	// 	$file = $file['file_name'];

	// 	if ($file == NULL) 
	// 	{
	// 		$file = $this->input->post('file-upload2');	
	// 	}
	// 	else
	// 	{
	// 		$file = base_url() . './uploads/Course/Video/' . $file;
	// 	}

	// 	$id_edit = $this->input->post('id-edit');
	// 	$type = $this->input->post('type');
	// 	$title_edit = $this->input->post('title-edit');
	// 	$youtube_edit = $this->input->post('youtube-edit');

	// 	$id_course = $this->Lesson_model->get_id_course($id);
	// 	$id_course = $id_course[0]['id_course'];

	// 	$url = base_url() .'admin/Manage_course/ad_detail_course/' . $id_course;
	// 	redirect($url,'refresh');

	// 	$data = array(
	// 		'title_lesson' => $title_edit,
	// 		'video' => $youtube_edit,
	// 		'file' => $file
	// 	);

	// 	// switch ($type) {
	// 	// 	case 1: //update for lesson
	// 	// 	$data = array(
	// 	// 		'title_lesson' => $title_edit,
	// 	// 		'video' => $youtube_edit,
	// 	// 		'file' => $file
	// 	// 	);
	// 	// 	$this->Lesson_model->update($data , $id_edit);
	// 	// 	redirect($url ,'refresh');
	// 	// 	break;

	// 	// 	case 2: //update for documents
	// 	// 	$data = array('tit');

			
			
	// 	// }
	// 	$this->load->model('Lesson_model');
	// 	if ($this->Lesson_model->update($id_edit , $data)) 
	// 	{
	// 		redirect(base_url() . 'admin/Manage_course','refresh');
	// 	} else 
	// 	{
	// 		$this->load->view('errors/Failure_view');
	// 	}

	// }

	public function editLesson($id)
	{
		$config['upload_path']          = './uploads/Course/Video/';
		$config['allowed_types']        = '*';
		$config['max_size']             = '100000000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('file-upload');
		$file = $this->upload->data();
		$file = $file['file_name'];

		if ($file == NULL) 
		{
			$file = $this->input->post('file-upload2');	
		}
		else
		{
			$file = base_url() . './uploads/Course/Video/' . $file;
		}

		$id_edit = $this->input->post('id-edit');
		$type = $this->input->post('type');
		$title_edit = $this->input->post('title-edit');
		$youtube = $this->input->post('youtube-edit');

		$id_course = $this->Lesson_model->get_id_course($id);
		$id_course = $id_course[0]['id_course'];

		

		switch ($type) {
			


			case 1: //update for lesson
			$data = array(
				'title_lesson' => $title_edit,
				'video' => $youtube,
				'file' => $file
			);
			$this->Lesson_model->update($data, $id_edit);				
			echo "<script>";
			echo 'alert("Update Lesson Successful!")';
			echo "</script>";
			
			break;

			case 2: //update for documents
			$data = array(
				'title_documents' => $title_edit,
				'link_dowload' => $file
			);
			$this->Document_model->update($data, $id_edit);				
			echo "<script>";
			echo 'alert("Update Lesson Successful!")';
			echo "</script>";
			break;

		}

	}




	// add Document
	public function add_documents($id)
	{
		$this->load->model('Document_model');
		$config['upload_path']          = './uploads/Course/Doc/';
		$config['allowed_types']        = '*';
		$config['max_size']             = '100000000000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('file-documents');
		$file = $this->upload->data();
		$file = $file['file_name'];

		$title_documents = $this->input->post('title-documents');

		if ($title_documents == NULL OR $file == NULL) {
			echo 'that bai';
		} else {
			$file = base_url() . './uploads/Course/Doc/' . $file;
			$data = array(
				'id_course' => $id,
				'title_documents' => $title_documents,
				'link_dowload' => $file
			);
			if ($this->Document_model->insert($data)) 
			{
				$url = base_url() . 'Admin/ad_detailt_course/' . $id;
				redirect($url, 'refresh');
			}
			else {
				echo 'that bai';
			}
		}
	}


	//Delete Document
	public function delete_documents($id)
	{
		$id_course = $this->Document_model->get_id_course($id);
		$id_course = $id_course[0]['id_course'];
		
		$this->Document_model->delete($id);
		
		$url = base_url() .'admin/Manage_course/ad_detail_course/' . $id_course;
		redirect($url,'refresh');
	}


	


	

	
}

/* End of file Manage_course.php */
/* Location: ./application/controllers/Manage_course.php */