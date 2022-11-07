<?php defined('BASEPATH') or exit('No direct script access allowed');

class Domestik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
		$viewData['data'] = $this->Domestik_model->getData('domestik_code',null);
		$viewData['csrf'] = array(
		        'name' => $this->security->get_csrf_token_name(),
		        'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('section/header');
		$this->load->view('front/domestik',$viewData);
		$this->load->view('section/footer');
	}

	 public function domestikAct()
	{
		$post = $this->input->post();

		$from  	= explode("-",$post['fromDomestik']);
		$to 	= explode("-",$post['toDomestik']);
		$fromCodeOne = $from[0];
		$fromCodeTwo = $from[1];
		$fromLabel = $from[2];
		$toCodeOne = $to[0];
		$toCodeTwo = $to[1];
		$toLabel = $to[2];

		$dataAPI = getDataPriceDomestic($fromCodeOne,$fromCodeTwo,$fromLabel,$toCodeOne,$toCodeTwo,$toLabel,$post['weight'],$post['service']);
		$crsf = array(
		        'namecrsf' => $this->security->get_csrf_token_name(),
		        'hashcrsf' => $this->security->get_csrf_hash()
		);
		$dataMerge = array_merge($dataAPI,$crsf);

		echo json_encode($dataMerge);
	}

	
}