<?php
/**
* Articles Controller
*/
class Article extends CI_Controller
{
	//__construct Action to extends CI_Controller
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Articles_model');
		$this->load->helper('url_helper');
	}

	//show someone article 
	public function show($content = 'My first Content' )
	{
		$data['article'] = $this->Articles_model->get_article($content);
		$data['title'] = ucfirst($content);
		$data['hello'] = 'hiwud';
		$this->load->view('article/article',$data);
		echo json_encode($data['article']);
		exit;
		// $this->load->view('article/article',$data);
		// $this->load->view('article/article',$data);
	}

	//show all articles
	public function index($value='')
	{
		$data['articles'] = $this->Articles_model->get_article();

	}
}