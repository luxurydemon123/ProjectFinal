<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_Footer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->model('admin/Manage_Footer_model');
		$dl= $this->Manage_Footer_model->getData();
		
	
		// mã hóa JSon
		$dl = json_decode($dl, true);
		$dulieu = array('footer' => $dl);
		$this->load->view('admin/Manage_Footer_view' ,$dulieu);

		
		
	}
	public function addFooter()
	{
		$dlFooter = array(
			'mangXH'=> array(
				'linkFB' => "http",
				'linkTwitter' => "http",
				'linkGitHub' => "http"
			),
			'Address'=> array(
				'address' => "104/12 Le Dinh Ly" 
			),		
			'Hotline'=> array(
				'soDT' => "0906 576 269"
			),
			'Gmail'=> array(
				'Gmail' => "luxurydemon123@gmail.com" 
			),
			'Title'=> array(
				'nameWebsite' => "Dekiru Nihongo",
				'titleWebsite' => "The leading website for learning Japanese online in VietNam"

			),
			'logo'=> "https://koijapanese.github.io/images/facilities4.jpg"
		);

		$dlFooter = json_encode($dlFooter);
		$this->load->model('admin/Manage_Footer_model');
		if ($this->Manage_Footer_model->updateFooterJson($dlFooter)) 
		{
			echo '<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thanh cong</strong> Alert body ...
			</div>';
		}
		else 
		{
			echo '<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>That bai</strong> Alert body ...
			</div>';
		}
	}

	public function updateFooter()
	{
		$linkFB = $this->input->post('linkFB');
		$linkTwitter = $this->input->post('linkTwitter');

		$linkGitHub = $this->input->post('linkGitHub');
		$soDT = $this->input->post('soDT');
		$address = $this->input->post('address');
		$Gmail = $this->input->post('Gmail');
		$nameWebsite = $this->input->post('nameWebsite');
		$titleWebsite = $this->input->post('titleWebsite');
		// logo
		$logo_old = $this->input->post('logo_old');
		$logo = $_FILES['logo']['name'];

		// if do not upload 
		if (empty($logo))
		{
			$logo = $logo_old; 
		}
		else //uploaded file image
		{
			$url = "uploads/";
			$url = $url . basename($_FILES['logo']['name']);
			move_uploaded_file($_FILES['logo']['tmp_name'], $url);

		}
		$logo = base_url(). "uploads/".basename($_FILES['logo']['name']);

		$dlFooter = array(
			'mangXH'=> array(
				'linkFB' => $linkFB ,
				'linkTwitter' => $linkTwitter,
				'linkGitHub' => $linkGitHub
			),
			'Address'=> array(
				'address' => $address 
			),		
			'Hotline'=> array(
				'soDT' => $soDT
			),
			'Gmail'=> array(
				'Gmail' => $Gmail 
			),
			'Title'=> array(
				'nameWebsite' => $nameWebsite,
				'titleWebsite' => $titleWebsite

			),
			'logo'=> $logo
		);
		// Mã hóa thành Json
		$dlFooter = json_encode($dlFooter);

		// Code Update Information 
		$this->load->model('admin/Manage_Footer_model');
		if ($this->Manage_Footer_model->updateFooterJson($dlFooter)) 
		{
			echo "<script>";
			echo 'alert("Update Infomation Footer Successful!")';
			echo "</script>";
			redirect('http://localhost:8888/Project2/admin/Manage_Footer','refresh');
		}
		else
		{
			
			echo 'Failed';	
		}
		
	}

}

/* End of file Manage_Footer.php */
/* Location: ./application/controllers/Manage_Footer.php */