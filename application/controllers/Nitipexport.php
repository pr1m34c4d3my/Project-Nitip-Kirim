<?php

class Nitipexport extends CI_Controller {

    public function index()

    {
        $this->load->view('header');
        $this->load->view('nitipexport');
        $this->load->view('footer');
    }

}