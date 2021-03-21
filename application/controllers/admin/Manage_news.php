<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_news extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->model('News_model');
		$dl1 = $this->News_model->loadDanhsach();
		$dl2 = $this->News_model->loadListNews();
		$dulieu = array(
			'dulieudanhmuc' => $dl1 ,
			'dulieutin' => $dl2 
		);
		$this->load->view('admin/News/News_view',$dulieu);
	}
	function addnews()
	{
		// image processing
		$target_dir = "uploads/News/";
		$target_file = $target_dir . basename($_FILES["image_news"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["image_news"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Check if file already exists
		if (file_exists($target_file)) {
			//echo "Sorry, file already exists.";
			$uploadOk = 0;
		}

		// Check file size
		if ($_FILES["image_news"]["size"] > 500000) {
			//echo "Sorry, your file is too large.";
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
		if (move_uploaded_file($_FILES["image_news"]["tmp_name"], $target_file)) {
			//echo "The file ". htmlspecialchars( basename( $_FILES["image_news"]["name"])). " has been uploaded.";
		} else {
			//echo "Sorry, there was an error uploading your file.";
		}
		$image_news = base_url() ."uploads/News/". basename( $_FILES["image_news"]["name"]);
		$title = $this->input->post('title');
		$idcategory = $this->input->post('idcategory');
		$content = $this->input->post('content');
		$trichdan = $this->input->post('trichdan');

		$this->load->model('News_model');

		$result = $this->News_model->insertNews($title, $idcategory, $content ,$image_news,$trichdan);
		if ($result) {
			echo "<script>";
			echo 'alert("Add News Successful!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Manage_news','refresh');
		}

	
	}
}
	function editNews($id)
	{
		$this->load->model('News_model');
		$ketqua = $this->News_model->getNewsById($id);
		$tendanhmuc = $this->News_model->getNameCategoryById($id);
		$dulieu = array(
			'dulieusua' => $ketqua,
			'tendanhmuc' =>$tendanhmuc
		);
		$this->load->view('admin/News/Edit_News_view', $dulieu);
	}
	function saveNews()
	{
		//Avatar
		$target_dir = "uploads/News/";
		$target_file = $target_dir . basename($_FILES["image_news"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["image_news"]["tmp_name"]);
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
		if ($_FILES["image_news"]["size"] > 50000000) {
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
	} 
		else {
			if (move_uploaded_file($_FILES["image_news"]["tmp_name"], $target_file)) {
				// echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
		} 
			else {
				echo "Sorry, there was an error uploading your file.";
			}
	}
		$image_news = basename($_FILES["image_news"]["name"]);
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$idcategory = $this->input->post('idcategory');
		$content = $this->input->post('content');
		$trichdan = $this->input->post('trichdan');
	if ($image_news) {
		$image_news = base_url()."uploads/News/".basename($_FILES["image_news"]["name"]);
	}
	else{
		$image_news_old = $this->input->post('anhtincu');
		echo $image_news_old;
	}
	$this->load->model('News_model');
		if ($this->News_model->updateNewsById($id,$title, $idcategory, $content, $image_news, $trichdan)) 
		{
			echo "<script>";
			echo 'alert("Update News Successful!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Manage_news','refresh');
		}
		else {
			echo 'that bai';
		}


	}
	function deleteNews($id)
	{
		$this->load->model('News_model');
		$ketqua = $this->News_model->deleteNewsbyId($id);
		if ($ketqua) {
			echo "<script>";
			echo 'alert("Delete News Successful!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Manage_news','refresh');
		}
		else {
			echo 'that bai';
		}
	}
}

/* End of file Manage_news.php */
/* Location: ./application/controllers/Manage_news.php */