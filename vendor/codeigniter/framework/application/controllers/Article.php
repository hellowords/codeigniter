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
	public function show($content = 1 )
	{
		// $content = $_GET['id'];
		$data['result'] = $this->Articles_model->get_article($content);
		$data['title'] = ucfirst($content);
		$data['hello'] = 'hiwud';
		$this->load->view('article/header',$data);
		$this->load->view('article/con',$data);
		// echo json_encode($data['result']); 
		$this->load->view('article/foot',$data);
	}

	//show all articles
	public function index()
	{
		$data['articles'] = $this->Articles_model->get_article();
		// echo json_encode($data['articles']);
		$this->load->view('article/index',$data);
	}

	//Create article 
	public function create()
	{
		$this->load->helper('form');
	    $this->load->library('form_validation');
        $data['title'] = 'Create a news item';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('content','content','required');

        if ($this->form_validation->run() === FALSE) {
        	$this->load->view('article/header',$data);
        	$this->load->view('article/create',$data);
        	$this->load->view('article/foot',$data);
        }else{
        	$this->Articles_model->set_article();
        	$this->load->view('article/success');
        }

	}
}