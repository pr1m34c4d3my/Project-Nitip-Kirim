<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mod_blog');
	}
	

	public function index()
	{
		$data['page_title'] = "Artikel";
		$data['page'] = "artikel";
		$data['list_artikel']=$this->mod_blog->select_all();
		$this->load->view('section/header');
		$this->load->view('front/news',$data);
		$this->load->view('section/footer');
	}

	public function detail()
	{
		
		$id=$this->uri->segment(3);
		$data['artikel']=$this->mod_blog->select_one($id)->row_array();
		$this->load->view('section/header');
		$this->load->view('front/news-detail',$data);
		$this->load->view('section/footer');
	}
}
