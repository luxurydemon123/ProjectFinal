<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('pagination');
         
        // load URL helper
        $this->load->helper('url');
	}

	public function index()
	{
		
		$this->load->model('admin/Manage_student_model');
		$result = $this->Manage_student_model->getAllData();
		
		$result = array('student' => $result  );
		
		$this->load->view('admin/Manage_student_view' , $result);
	}
	public function add_student()
	{
		# code...
		$this->input->post('avatar_student');
		

		//Avatar
		$target_dir = "uploads/student/";
		$target_file = $target_dir . basename($_FILES["avatar_student"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatar_student"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

// Check if file already exists
		// if (file_exists($target_file)) {
		// 	echo "Sorry, file already exists.";
		// 	$uploadOk = 0;
		// }

// Check file size
		if ($_FILES["avatar_student"]["size"] > 50000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["avatar_student"]["tmp_name"], $target_file)) {
			// echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	$name_student =  $this->input->post('name_student');
	$date = $this->input->post('date');
	$gender = $this->input->post('gender');

	$email_student = $this->input->post('email_student');
	$course_student = $this->input->post('course_student');
	$avatar_student = base_url()."uploads/student/".basename($_FILES["avatar_student"]["name"]);

		//load moadel
	$this->load->model('admin/Manage_student_model');
	$status =  $this->Manage_student_model->add_student($name_student,$date, $gender, $email_student, $course_student, $avatar_student);
	if ($status) {
		# code...
		$this->load->view('message/Insert_student_successfully_view');
	}
		else{
			echo "Failer to insert";
		}

	}



	public function delete_student($id)
	{
		# code...
		$this->load->model('admin/Manage_student_model');
		if ($this->Manage_student_model->deleteStudent($id)) {
			# code...
			$this->load->view('message/Delete_student_successfully_view');
		}
		else{
			echo "Failer to delete!";
		}
		
	}

	public function edit_student($id)
	{
		# code...
		$this->load->model('admin/Manage_student_model');
		$result = $this->Manage_student_model->getDataByID($id);
		$result = array('data_student' => $result );
		$this->load->view('admin/edit_student_view' , $result ,false);
	}

	public function update_student()
	{
		# code...
		$id = $this->input->post('id');
		$name_student =  $this->input->post('name_student');
		$date = $this->input->post('date');
		$gender = $this->input->post('gender');

		$email_student = $this->input->post('email_student');
		$course_student = $this->input->post('course_student');
		


		//Avatar
		$target_dir = "uploads/student/";
		$target_file = $target_dir . basename($_FILES["avatar_student"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatar_student"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

// Check if file already exists
		// if (file_exists($target_file)) {
		// 	echo "Sorry, file already exists.";
		// 	$uploadOk = 0;
		// }

// Check file size
		if ($_FILES["avatar_student"]["size"] > 50000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["avatar_student"]["tmp_name"], $target_file)) {
			// echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}

	}
	$avatar_student = basename($_FILES["avatar_student"]["name"]);

	if ($avatar_student) {
		# code...
		$avatar_student = base_url()."uploads/student/".basename($_FILES["avatar_student"]["name"]);
	}
	else{
		$avatar_student = $this->input->post('avatar_student_2');
		echo $avatar_student;
	}
	$this->load->model('admin/Manage_student_model');

	if ($this->Manage_student_model->updateByID($id ,$name_student,$date, $gender, $email_student, $course_student, $avatar_student))
	{
		# code...
		$this->load->view('message/update_student_thanhcong');
	}
	else{
		echo "Fail to update";
	}
}
	


	public function Mail()
	{
		# code...
		$this->load->view('admin/Mail/mailbox_view.php');
	}
}

/* End of file Manage_student.php */
/* Location: ./application/controllers/Manage_student.php */