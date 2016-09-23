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
		$query = $this->db->get_where('articles',array('id'=>$value));
		return $query->row_array();
	}

	public function set_article()
	{
		$this->load->helper('url');
		$content = url_title($this->input->post('content'),'dash',TRUE);
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $content
		 );
		return $this->db->insert('articles',$data);
	}
}
 ?>