<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
  }

  function register_list_db($where = null, $show_all = 0){
		if(isset($where)){
			$this->db->where($where);
    }
    if($show_all != 1){
			$this->db->where('status_delete', '1');
    }
    $this->db->select('*');
    $this->db->from('certif_register');
		$query = $this->db->get();
		return $query->result_array();
  }
  
  public function register_update_process_db($data, $where){
		$this->db->where($where);
		$this->db->update('certif_register',$data);
	}

}