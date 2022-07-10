<?php
class Nitipimport extends CI_Controller{

    public function index()
    
    {
        $this->load->view('header');
        $this->load->view('nitipimport');
        $this->load->view('footer');
    }

}