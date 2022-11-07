<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Domestik_model extends CI_Model
{
    //input values
    public function getData($table,$where)
	{
		$dataReturn = $this->db->get_where($table,$where)->result_array();
		return $dataReturn;
	}
}