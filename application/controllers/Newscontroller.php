<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newscontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_blog');
	}
	
	public function detail()
	{
		
		$id=$this->uri->segment(3);
		$data['artikel']=$this->Model_blog->select_one($id)->row_array();
		$this->load->view('section/header');
		$this->load->view('front/news-detail',$data);
		$this->load->view('section/footer');
	}
}
