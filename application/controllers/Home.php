<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->post_load_more_count = 6;
        $this->comment_limit = 5;
    }

	public function index()
	{
		
		$this->load->view('section/header');
		$this->load->view('front/welcome_message');
		$this->load->view('section/footer');
	}

    public function tentang()

    {
        $this->load->view('section/header');
		$this->load->view('front/tentang');
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
		
		$this->load->view('section/header');
		$this->load->view('news',$data);
		$this->load->view('section/footer');
	}

	public function tarifekonomi()
	{
		$data['page_title'] = "Tarif Ekonomi";
		$this->load->view('section/header');
		$this->load->view('front/ekonomi',$data);
		$this->load->view('section/footer');
	}

	public function tarifprioritas()
	{
		$data['page_title'] = "Tarif Prioritas";
		$this->load->view('section/header');
		$this->load->view('front/prioritas',$data);
		$this->load->view('section/footer');
	}
	
	public function track()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('front/track',$data);
		$this->load->view('section/footer');
	}

	public function afganistan()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/afganistan',$data);
		$this->load->view('section/footer');
	}

	public function estimasi1()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zona1',$data);
		$this->load->view('section/footer');
	}

	public function estimasi2()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zona2',$data);
		$this->load->view('section/footer');
	}

	public function estimasi2m()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zonamalay',$data);
		$this->load->view('section/footer');
	}

	public function estimasi2hk()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zonahk',$data);
		$this->load->view('section/footer');
	}

	public function estimasi2b()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zonab',$data);
		$this->load->view('section/footer');
	}

	public function estimasi2t()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zonat',$data);
		$this->load->view('section/footer');
	}

	public function estimasi3()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zona3',$data);
		$this->load->view('section/footer');
	}

	public function estimasi4()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zona4',$data);
		$this->load->view('section/footer');
	}

	public function estimasi5()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zona5',$data);
		$this->load->view('section/footer');
	}

	public function estimasi6()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zona6',$data);
		$this->load->view('section/footer');
	}
	
	public function estimasi7()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zona7',$data);
		$this->load->view('section/footer');
	}

	public function estimasi9()
	{
		$data['page_title'] = "Tracking";
		$this->load->view('section/header');
		$this->load->view('negara/zonaaus',$data);
		$this->load->view('section/footer');
	}

}
