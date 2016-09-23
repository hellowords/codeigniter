<?php
/**
* Articles Controller
*/
class Article extends CI_Controller
{
	
	public function index($num = 'article')
	{
		// if (!file_exists(APPPATH.'views/article/'.$num.'.php')) {
		// 	show_404(); 
		// }
		echo $num;
		// $data['title'] = ucfirst($num);
		// $data['hello'] = 'hiwud';
		// $this->load->view('article/article',$data);
		// $this->load->view('article/article',$data);
		// $this->load->view('article/article',$data);
	}
}