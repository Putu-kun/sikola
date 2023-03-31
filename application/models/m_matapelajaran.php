<?php

class M_matapelajaran extends CI_Model{

	private $_table = "mapel";
	private $table = "soal";

  // function index(){
  //   $this->load->view('v_dataguru');
  // }
	public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    function getSoalbyId($where,$table){
		return $this->db->get_where($table,$where);
	}

    public function input_data($data,$table)
    {
    	$this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function cek_kode($table){
		return $this->db->get_where($table);
	}

	function findKelas($where,$table){
		return $this->db->get_where($table,$where);
	}
}
