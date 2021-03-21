<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Document_model extends CI_Model {

	public $variable;


	public function __construct()
	{
		parent::__construct();
		
		
	}
	public function get($where = NULL)
	{
		$this->db->select('*');
		$this->db->from('book_pdf');
		
		$this->db->order_by('date_upload', 'ASC');

		if ($where !== NULL) {
			if (is_array($where)) {
				foreach ($where as $field=>$value) {
					$this->db->where( $field, $value);
				}

			}else{
				$this->db->where('id_documents', $where);
			}
		}
		
		$result = $this->db->get()->result_array();
		$result = array('data_document' => $result);
		return $result;
	}
	public function get_id_course($id)
	{

		$this->db->select('*');
		$this->db->from('book_pdf');
		$this->db->where('id_documents', $id);
		
		$result = $this->db->get()->result_array();
		return $result;


	}
	public function insert(Array $data )
	{
		if ($this->db->insert('book_pdf', $data))
		{
			return $this->db->insert_id();
		}
		else {
			return false;
		}
		
	}

	public function delete($where = array()) {
        if (!is_array($where)) {
            $where = array('id_documents' => $where);
        }
        $this->db->delete('book_pdf', $where);
        return $this->db->affected_rows();
    }



    public function update(Array $data, $where = array()) {
        if (!is_array($where)) {
            $where = array('id_documents' => $where);
        }
        $this->db->update('book_pdf', $data, $where);
        return $this->db->affected_rows();
    }

   
}

/* End of file Document_model.php */
/* Location: ./application/models/Document_model.php */