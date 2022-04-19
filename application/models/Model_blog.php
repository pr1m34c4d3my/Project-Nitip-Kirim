<?php
class Mod_blog extends CI_Model {

    public function __construct(){
		parent::__construct();
		
	}
    
    function select_all(){
        return $this->db->get('artikel');
    }

    function select_one($id)
    {
        return $this->db->get_where('artikel',array('artikel_id'=>$id));
    }

}