<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mod_blog');
	}
	

	public function index()
	{
		$data['page_title'] = "Homepage";
		$data['page'] = "home";
		$this->load->view('section/header');
		$this->load->view('front/welcome_message',$data);
		$this->load->view('section/footer');
	}

	public function tentang()

    {
		$data['page_title'] = "About Us";
		$data['page'] = "about-us";
        $this->load->view('section/header');
		$this->load->view('front/tentang',$data);
		$this->load->view('section/footer');
    }

	public function nitipexport()

    {
		$data['page_title'] = "Nitip Export";
		$data['page'] = "nitip-export";
        $this->load->view('section/header');
		$this->load->view('front/nitipexport',$data);
		$this->load->view('section/footer');
    }

	public function nitipimport()

    {
		$data['page_title'] = "Nitip Import";
		$data['page'] = "nitip-import";
        $this->load->view('section/header');
		$this->load->view('front/nitipimport',$data);
		$this->load->view('section/footer');
    }

	public function nitipnusantara()

    {
		$data['page_title'] = "Nitip Nusantara";
		$data['page'] = "nitip-nusantara";
        $this->load->view('section/header');
		$this->load->view('front/nitipnusantara',$data);
		$this->load->view('section/footer');
    }

	public function contact()

    {
		$data['page_title'] = "Hubungi Kami";
		$data['page'] = "contact";
        $this->load->view('section/header');
		$this->load->view('front/contact',$data);
		$this->load->view('section/footer');
    }

	public function news()

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
		
		$this->load->view('front/detail',$data);
		
	}
}
