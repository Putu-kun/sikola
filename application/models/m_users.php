<?php

class m_users extends CI_Model{

	private $_table = "users";

  
    public function input_data($data,$table)
    {
    	$this->db->insert($table,$data);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

 
}
