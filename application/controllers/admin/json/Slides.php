<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model('admin/Slides_model');
		
	}
	
	public function index()
	{	$this->load->view('admin/json/slides_view' );
		
		

		
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
	public function addSlide()
	{
		# code...

		// step 1 : Get data from slides_topbanner
		$data = $this->Slides_model->getdataSlide();
		$data = json_decode($data,true);
		if ($data == null) {
			# code...
			
			$data = array();
		}
		
		//json
		
		//get data from view
		//upload file
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["slide_image"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}

// Check file size
		if ($_FILES["slide_image"]["size"] > 500000) {
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
		echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
			echo "The file ". htmlspecialchars( basename( $_FILES["slide_image"]["name"])). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}



		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$slide_image = base_url().'uploads/'.basename($_FILES["slide_image"]["name"]);
		
		$slides = array(
			'title' =>$title ,
			'description' =>$description ,
			'button_link' =>$button_link ,
			'button_text' =>$button_text ,
			'slide_image' =>$slide_image 
			);
		array_push($data, $slides);
		
		
		$data = json_encode($data);

		if( $this->Slides_model->updateSlide($data)){
			echo "<script>";
			echo 'alert("Add Successfull!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/json/Slides','refresh');
		}
	}
	public function updateSlide()
	{
		# code...
		// get content
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		

		$cacanh = $_FILES['slide_image']['name'];
		$filevatly = $_FILES['slide_image']['tmp_name'];

		$slide_image = array();
		$slide_image_old = $this->input->post('slide_image_old');
		

		
		for ($i=0; $i < count($cacanh) ; $i++) { 
			# code...
			
			if (empty($cacanh[$i]))
			{
				# code...
				$slide_image[$i] = $slide_image_old;
			}
			else{
				$url = 'uploads/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $url);
				$slide_image[$i] = base_url()."uploads/".$cacanh[$i];
			}
			
		}
		
		
		// create array  "allslide"

		$tatcaslide = array();
		for ($i=0; $i < count($title) ; $i++) { 
			$tam = array();
			$tam['title'] = $title[$i];
			$tam['description'] = $description[$i];
			$tam['button_text'] = $button_text[$i];
			$tam['button_link'] = $button_link[$i];
			$tam['slide_image'] = $slide_image[$i];
			array_push($tatcaslide, $tam);
		}
		
		$tatcaslide = json_encode($tatcaslide);
		
		//insert

		$this->load->model('admin/Slides_model');
		if ($this->Slides_model->updateSlide($tatcaslide))
		 {
			# code...
			echo "<script>";
			echo 'alert("Update Successfull!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/json/Slides','refresh');
		}
		
	}

}

/* End of file hotline.php */
/* Location: ./application/controllers/hotline.php */