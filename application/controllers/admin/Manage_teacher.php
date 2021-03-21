<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_teacher extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		
		$this->load->model('admin/Manage_teacher_model');
		$result = $this->Manage_teacher_model->getAllData();
		$result = array('teacher' => $result );
		$this->load->view('admin/Manage_teacher_view', $result);
	}
	public function add_teacher()
	{
		# code...
		$this->input->post('avatar');
		

		//Avatar
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
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
		if ($_FILES["avatar"]["size"] > 50000000) {
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
		if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
			// echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	$name_teacher = $this->input->post('name_teacher');
	$age_teacher = $this->input->post('age_teacher');
	$phone_number = $this->input->post('phone_number');
	$avatar =  base_url()."uploads/".basename($_FILES["avatar"]["name"]);
	$linkfb = $this->input->post('linkfb');
	$description = $this->input->post('description');
	

	//load model

	$this->load->model('admin/Manage_teacher_model');
	$status = $this->Manage_teacher_model->add_teacher($name_teacher,$age_teacher,$phone_number,$avatar,$linkfb,$description);
	if ($status) {
		# code...
		$this->load->view('message/Insert_succesfully_view');
	}
	else{
		echo "Failer to insert";
	}


  }
  public function edit_teacher($id)
  {
  	# code...
  	$this->load->model('admin/Manage_teacher_model');
  	
  	$result = $this->Manage_teacher_model->getDataByID($id);
  	$result = array('data' => $result );
  	$this->load->view('admin/Edit_teacher_view',$result, false);

  }
  public function delete_teacher($id)
  {
  	# code...
  	$this->load->model('admin/Manage_teacher_model');
  	if ($this->Manage_teacher_model->deleteByID($id)) {
  		# code...
  		$this->load->view('message/Delete_sucesfully_view');
  	}
  	else{
  		echo "Failer to delete";
  	}

  }
  public function update_teacher($value='')
  {
  	# code...
  	$id = $this->input->post('id');
  	$name_teacher = $this->input->post('name_teacher');
	$age_teacher = $this->input->post('age_teacher');
	$phone_number = $this->input->post('phone_number');
	
	$linkfb = $this->input->post('linkfb');
	$description = $this->input->post('description');
	



	//Upload Avatar

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
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
		if ($_FILES["avatar"]["size"] > 50000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		//echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
			// echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}

		//$avatar =  base_url()."uploads/".basename($_FILES["avatar"]["name"]);
		
	}
	$avatar =  basename($_FILES["avatar"]["name"]);

		if ($avatar) {
			# code...
			$avatar =  base_url()."uploads/".basename($_FILES["avatar"]["name"]);;
		}
		else{
			$avatar = $this->input->post('avatar2');
			echo $avatar;
		}

		$this->load->model('admin/Manage_teacher_model');
		if ($this->Manage_teacher_model->updateByID($id,$name_teacher,$age_teacher,$phone_number,$avatar,$linkfb,$description)) {
			# code...
			$this->load->view('message/Update_succesfully_view');
		}
		else{
			echo "Fail to update";
		}

  }


}

/* End of file Manage_teacher.php */
/* Location: ./application/controllers/Manage_teacher.php */