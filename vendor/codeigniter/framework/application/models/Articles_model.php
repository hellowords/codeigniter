<?php 
/**
* Articles Model
*/
class Articles_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_article($value = FALSE)
	{
		if ($value === FALSE) {
			$query = $this->db->get('articles');
			return $query->result_array();
		}
		$query = $this->db->get_where('articles',array('content'=>$value));
		return $query->row_array();
	}

}
 ?>