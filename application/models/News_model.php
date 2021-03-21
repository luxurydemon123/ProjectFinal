<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertCategory($tendanhmuc)
	{
		$dl = array('tendanhmuc' => $tendanhmuc);

		return $this->db->insert('category', $dl);
	}
	function loadDanhsach()
	{
		
		$this->db->select('*');
		$dl = $this->db->get('category');
		$dl = $dl->result_array();
		return $dl;
	}
	function getDatabyID($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('category');
		$dl = $dl->result_array();
		return $dl;
	}
	function updateById ($id, $tendanhmuc)
	{
		$dlupdate = array('id' => $id , 'tendanhmuc' =>$tendanhmuc);
		$this->db->where('id', $id);
		return $this->db->update('category', $dlupdate);
	}
	function deleteByID($id)
	{
		$this->db->where('id', $id);
		
		$this->db->delete('category');

	}
	//model for news
	function insertNews($title, $idcategory, $content,$image_news,$trichdan)
	{
		$dulieu = array(
			'title'=>$title,
			'idcategory'=>$idcategory,
			'content'=>$content,
			'image'=>$image_news,
			'trichdan'=>$trichdan
		);
		$this->db->insert('news', $dulieu);
		return $this->db->insert_id();
		 
	}
	function loadListNews()
	{
		$this->db->select('*');
		$dl = $this->db->get('news');
		$dl = $dl->result_array();
		return $dl;

	}
	function updateNewsById($id,$title, $idcategory, $content, $image_news, $trichdan)
	{
		
		$dataedit = array(
			'id' => $id ,
			'title' => $title ,
			'idcategory' => $idcategory ,
			'content' => $content ,
			'image' =>$image_news,
			'trichdan' => $trichdan 
		);
		$this->db->where('id', $id);
		return $this->db->update('news', $dataedit);
	}
	function getNewsById($id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('news', 'news.idcategory = category.id', 'left');
		$this->db->where('news.id', $id);
		$result = $this->db->get();
		$result = $result->result_array();
		return $result;
	}
	function getNameCategoryById($id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('news', 'news.idcategory = category.id', 'left');
		$this->db->where('news.id', $id);
		$result = $this->db->get();
		$result = $result->result_array();
		$name = $result[0]['tendanhmuc'];
		return $name;
	

	}
	function deleteNewsbyId($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news');

	}
	function loadDanhSachTin2($sotintrong1trang)
	{
		
		
		$this->db->select('*');
		$this->db->join('news', 'news.idcategory = category.id', 'left');
		$ketqua = $this->db->get('category',$sotintrong1trang,0);
		$ketqua = $ketqua->result_array();
		return $ketqua;
		
	}
	function soTrang($sotintrong1trang)
	{
		
		$this->db->select('*');
		$ketqua2 = $this->db->get('news');
		$ketqua2 = $ketqua2->result_array();
		$soluongtin = count($ketqua2);
		$sotrang = ceil($soluongtin/$sotintrong1trang);
		return $sotrang;
	}
	function loadTinTheoTrang($trangthumay, $sotintrong1trang)
	{
		$this->db->select('*');
		$this->db->join('news', 'news.idcategory = category.id', 'left');
		$vitri = ($trangthumay-1)*$sotintrong1trang;
		
		$ketqua = $this->db->get('category',$sotintrong1trang,$vitri);
		$ketqua = $ketqua->result_array();
		return $ketqua;
		
	}
	function loadNews($sotintrong1trang,$idDanhMuc)
	{
		
		
		$this->db->select('*');
		$this->db->join('news', 'news.idcategory = category.id', 'left');
		$this->db->where('news.idcategory', $idDanhMuc);
		$ketqua = $this->db->get('category',$sotintrong1trang,0);
		$ketqua = $ketqua->result_array();
		return $ketqua;
		
	}
	
}

/* End of file News_model.php */
/* Location: ./application/models/News_model.php */