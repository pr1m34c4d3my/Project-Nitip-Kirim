<?php
class Nitipnusantara extends CI_Controller {


    public function index()

    {
        $this->load->view('header');
        $this->load->view('nitipnusantara');
        $this->load->view('footer');
    }


}