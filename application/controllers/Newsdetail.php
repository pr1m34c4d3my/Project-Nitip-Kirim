<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsdetail extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('news-detail');
		$this->load->view('footer');
	}
}
